<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $SocialUser = Socialite::driver($provider)->user();
            if (User::where('email', $SocialUser->email)->exists()) {
                return redirect('/login')->withErrors([
                    'email' => 'Email sudah terdaftar dengan akun lain.',
                ]);
            }
            $user = User::where([
                'provider' => $provider,
                'provider_id' => $SocialUser->id,
            ])->first();
            if (!$user) {
                $user = User::create([
                    'name' => $SocialUser->name,
                    'username' => User::generateUsername($SocialUser->nickname),
                    'email' => $SocialUser->email,
                    'password' => 12345678,
                    'provider' => $provider,
                    'provider_id' => $SocialUser->id,
                    'provider_token' => $SocialUser->token,
                    'email_verified_at' => now()
                ]);
            }
            Auth::login($user);
            return redirect('/dashboard')->with('success', 'Login menggunakan github berhasil, silahkan lengkapi data diri anda. Password default adalah 12345678');
        } catch (\Exception $e) {
            return redirect('/login');
        }


        $user = User::updateOrCreate([
            'github_id' => $SocialUser->id,
            'provider' => $provider,
        ], [
            'name' => $SocialUser->name,
            'username' => User::generateUsername($SocialUser->nickname),
            'email' => $SocialUser->email,
            'provider_token' => $SocialUser->token,
        ]);

    }
}
