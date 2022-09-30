<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Oauth;
use App\Models\Provider;
use Illuminate\Support\Facades\Auth;

class OauthController extends Controller
{
    public function redirect(Provider $provider)
    {
        return Socialite::driver($provider->name)->redirect();
    }
    public function callback(Provider $provider)
    {
        $oauthUser = Socialite::driver($provider->name)->user();
        $user = User::where([
            "email" => $oauthUser->email,
            "provider_id" => $provider->id
            
        ])->first();
        if($user){
            $user->fill(["provider_token" => $oauthUser->token,"provider_refresh_token" => $oauthUser->refreshToken])->save();
            Auth::login($user);
            // dd("login!!");
            return redirect("/dashboard");
        }
        $user = User::Create([
            "name"=>$oauthUser->name ?? $oauthUser->nickname,
            "email" =>$oauthUser->email,
            "provider_id" => $provider->id,
            "provider_token" =>$oauthUser->token,
            "provider_refresh_token" =>$oauthUser->refreshToken,
        ]);

        Auth::login($user);
        // 
        return redirect("/dashboard");
    }
    
}
