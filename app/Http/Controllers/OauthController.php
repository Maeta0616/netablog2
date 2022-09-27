<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OauthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }
    public function callback()
    {
        $oauthUser = Socialite::driver('github')->user();
        // dd($user);
        $user = User::where([
            "email" => $oauthUser->email,
            "provider_id" => 1
            
        ])->first();
        if($user){
            $user->fill(["provider_token" => $oauthUser->token,"provider_refresh_token" => $oauthUser->refreshToken])->save();
            Auth::login($user);
            dd("login!!");
        }
        $user = User::Create([
            "name"=>$oauthUser->name ?? $oauthUser->nickname,
            "email" =>$oauthUser->email,
            "provider_id" => 1,
            "provider_token" =>$oauthUser->token,
            "provider_refresh_token" =>$oauthUser->refreshToken,
        ]);

        Auth::login($user);
        dd("registered");
    }
    
}
