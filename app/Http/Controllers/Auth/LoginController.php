<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function showLoginForm()
    {
        return view('.auth.login');
    }

    public function login(Request $request)
    {
        //validate
        $this->validateForm($request);
        //check user and password
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse();
        } else {
            return $this->sendFailedLoginResponse();
        }
        //login

        //redirect
    }

    protected function sendFailedLoginResponse()
    {
        return back()->with('wrongCredentials',true);
    }

    protected function sendLoginResponse()
    {
        session()->regenerate();
        return redirect()->intended();

    }

    protected function validateForm(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required'],
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        return Auth::attempt($request->only('email', 'password'), $request->filled('remember'));
    }

    public function logout()
    {
        session()->invalidate();
        Auth::logout();
        return redirect()->route('home');
    }
}
