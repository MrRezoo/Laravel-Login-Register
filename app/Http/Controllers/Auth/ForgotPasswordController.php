<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use foo\bar;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showForgetForm()
    {

        return view('auth.passwords.forget');
    }

    public function sendResetLink(Request $request)
    {

        //validate
        $this->validateForm($request);
        //create link
        //send link
        $response = Password::broker()->sendResetLink($request->only('email'));

        if ($response==Password::RESET_LINK_SENT) {

            return back()->with('resetLinkSent', true);
        }
        //redirect
        return back()->with('resetLinkFailed',  true);
    }

    private function validateForm(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users']
        ]);
    }
}
