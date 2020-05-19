<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\LoginToken;
use App\Rules\Recaptcha;
use App\Services\Auth\MagicAuthentication;
use Illuminate\Http\Request;

class MagicController extends Controller
{
    private $authentication;

    public function __construct(MagicAuthentication $authentication)
    {
        $this->middleware('guest');
        $this->authentication  = $authentication;
    }

    public function showMagicForm()
    {
        return view('auth.magic-login');
    }

    public function sendToken(Request $request)
    {

        $this->validateForm($request);
        //generate token
        //send token
        $this->authentication->requestLink();
        //redirect
        return back()->with('magicLinkSent',true);

    }

    public function login(LoginToken $token)
    {
        return $this->authentication->authenticate($token) === $this->authentication::AUTHENTICATED
            ? redirect()->route('home')
            : redirect()->route('auth.magic.login.form')->with('invalidToken', true);
    }

    protected function validateForm(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'recaptcha' => ['required', new Recaptcha],
        ],
            [
                'recaptcha'=>__('auth.recaptcha')
            ]);
    }


}
