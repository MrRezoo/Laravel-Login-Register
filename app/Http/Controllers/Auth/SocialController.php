<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToProvider($driver)
    {

        return Socialite::driver($driver)->redirect();

    }

    public function providerCallback($driver)
    {

        $user = Socialite::driver($driver)->user();
        Auth::login($this->findOrCreatUser($user,$driver));
;
        return redirect()->intended();
    }

    protected function findOrCreatUser($user, $driver)
    {

        $providerUser = User::where([
            'email' => $user->getEmail()
        ])->first();

        if (!is_null($providerUser)) return $providerUser;

        return User::create([
            'email' => $user->getEmail(),
            'name' => $user->user['given_name'],
            'last_name' => $user->user['family_name'],
            'provider' => $driver,
            'provider_id' => $user->getID(),
            'avatar' => $user->getAvatar(),
            'email_verified_at' => now()
        ]);

    }
}
