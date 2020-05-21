<?php


namespace App\Services\Auth;


use App\TwoFactor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoFactorAuthentication
{
    const CODE_SENT = 'code.sent';
    const INVALID_CODE = 'code.invalid';
    const ACTIVATED = 'code.activated';
    const AUTHENTICATED = 'code.authenticated';
    protected $request;
    protected $code;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    protected function setSession(TwoFactor $code)
    {

        session([
            'code_id' => $code->id,
            'user_id' => $code->user_id,
            'remember' => $this->request->remember
        ]);
    }

    protected function forgetSession()
    {
        session(['user_id', 'code_id', 'remember']);
    }

    public function requestCode(User $user)
    {
        //generate code
        $code = TwoFactor::generateCodeFor($user);
        //set code session
        $this->setSession($code);
        //send code
        $code->send();
        //return response
        return static::CODE_SENT;
    }

    public function resent()
    {
        $this->requestCode($this->getUser());
    }

    public function activate()
    {
        //validate code
        if (!$this->isValidCode()) return static::INVALID_CODE;
        //delete code
        $this->getToken()->delete();
        //active two factor in user model (hasTwoFactor Trait)
        $this->getUser()->activateTwoFactor();
        //delete session
        $this->forgetSession();
        //return response
        return static::ACTIVATED;
    }

    public function login()
    {
        //validate code
        if (!$this->isValidCode()) return static::INVALID_CODE;
        //delete code
        $this->getToken()->delete();
        //user login
        Auth::login($this->getUser(), session('remember'));
        //delete session
        $this->forgetSession();
        //return response
        return static::AUTHENTICATED;
    }


    public function deactivate(User $user)
    {
        return $user->deactivateTwoFactor();
    }

    protected function isValidCode()
    {
        return !$this->getToken()->isExpired() && $this->getToken()->isEqualWith($this->request->code);
    }


    protected function getToken()
    {
        return $this->code ?? $this->code = TwoFactor::findOrFail(session('code_id'));
    }

    protected function getUser()
    {
        return User::findOrFail(session('user_id'));
    }


}
