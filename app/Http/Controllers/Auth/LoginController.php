<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Code;
use App\Providers\RouteServiceProvider;
use App\Rules\Recaptcha;
use App\Services\Auth\TwoFactorAuthentication;
use App\TwoFactor;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected $maxAttempts = 2;
    protected $twoFactor;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @param TwoFactorAuthentication $twoFactor
     */
    public function __construct(TwoFactorAuthentication $twoFactor)
    {
        $this->middleware('guest')->except('logout');
        $this->twoFactor = $twoFactor;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showCodeForm()
    {
        return view('auth.two-factor.login-code');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {

        //validate
        $this->validateForm($request);
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->sendLockoutResponse($request);
        }

        if (!$this->isValidCredentials($request)) {
            $this->incrementLoginAttempts($request);
            return $this->sendFailedLoginResponse();
        }
        //does user enable twoFactor?
        $user = $this->getUser($request);

        if ($user->hasTwoFactor()) {
            $this->twoFactor->requestCode($user);
            return $this->sendHasTwoFactorResponse();
        }
        //login
        Auth::login($user, $request->remember);
        //redirect
        return $this->sendLoginResponse();

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
//
//        if ($this->attemptLogin($request)) {
//            return $this->sendLoginResponse();
//        }
//        //check user and password
//        if ($this->attemptLogin($request)) {
//            return $this->sendLoginResponse();
//        }
//
//        $this->incrementLoginAttempts($request);
//        return $this->sendFailedLoginResponse();

    }

    protected function confirmCode(Code $request)
    {
        $response = $this->twoFactor->login();
        return $response == $this->twoFactor::AUTHENTICATED
            ? $this->sendLoginResponse()
            : back()->with('invalidCode', true);
    }

    protected function isValidCredentials(Request $request)
    {
        return Auth::validate($request->only(['email', 'password']));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse()
    {
        return back()->with('wrongCredentials', true);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */

    protected function sendLoginResponse()
    {
        session()->regenerate();
        return redirect()->intended();

    }

    /**
     * @param Request $request
     */
    protected function validateForm(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required'],
            'recaptcha' => ['required', new Recaptcha]
        ],
            [
                'recaptcha' => __('auth.recaptcha')
            ]
        );
    }

//    /**
//     * @param Request $request
//     * @return bool
//     */
//    protected function attemptLogin(Request $request)
//    {
//        return Auth::attempt($request->only('email', 'password'), $request->filled('remember'));
//    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        session()->invalidate();
        Auth::logout();
        return redirect()->route('home');
    }

    /**
     * @return string
     */
    protected function username()
    {

        return 'email';
    }

    protected function getUser(Request $request)
    {
        return User::where('email', $request->email)->firstOrFail();
    }

    protected function sendHasTwoFactorResponse()
    {
        return redirect()->route('auth.login.code.form');
    }
}
