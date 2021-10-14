<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $googleUser = Socialite::driver('google')->user();


//        $user = User::firstOrCreate(
//            [
//                'provider_id' => $googleUser->getId(),
//            ],
//            [
//                'email' => $googleUser->getEmail(),
//                'name' => $googleUser->getName(),
//                'profile_photo_path' => $googleUser->getAvatar(),
//
//            ]
//        );
////
         $user = User::where('provider_id', $googleUser->getId())->first();
//
         // Create a new user in our database
         if (! $user) {
             $user = User::create([
                 'email' => $googleUser->getEmail(),
                 'name' => $googleUser->getName(),
                 'provider_id' => $googleUser->getId(),
                 'email_verified_at' => now(),
             ]);
         }
//
        // Log the user in
        auth()->login($user, true);

        // Redirect to dashboard
        return redirect('dashboard');
    }
}
