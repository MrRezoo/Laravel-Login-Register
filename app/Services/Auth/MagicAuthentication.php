<?php


namespace App\Services\Auth;

use App\LoginToken;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MagicAuthentication
{
    const  INVALID_TOKEN = 'token.invalid';
    const AUTHENTICATED = 'authenticated';
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

    }

    public function requestLink()
    {
        $user = $this->getUser();
        //generate link
        //send link
        $user->createToken()->send([
            'remember' => $this->request->has('remember'),
        ]);

    }
    public function authenticate(LoginToken $token)
    {
        $token->delete();
        //validate token
        if ($token->isExpired()) {
            return self::INVALID_TOKEN;
        }
        //login
        Auth::login($token->user, $this->request->query('remember'));
        //return response
        return self::AUTHENTICATED;
    }

    protected function getUser()
    {
        return User::where('email', $this->request->email)->firstOrFail();
    }




}
