<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Utilities\Overrider;
use Auth;
use Socialite;

class SocialController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        Overrider::load("SocialSettings");
    }

    public function redirect($provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider) {
        $userSocial = Socialite::driver($provider)->stateless()->user();
        $users      = User::where(['email' => $userSocial->getEmail()])->first();

        if ($users) {
            Auth::login($users);
            return redirect(RouteServiceProvider::HOME);
        } else {
            $trial_period = get_option('trial_period', 7);

            if ($trial_period < 1) {
                $valid_to = date('Y-m-d', strtotime(date('Y-m-d') . " -1 day"));
            } else {
                $valid_to = date('Y-m-d', strtotime(date('Y-m-d') . " + $trial_period days"));
            }

            //Create New User
            $profile_picture = "default.png";
            if ($userSocial->getAvatar() != "") {
                $fileContents    = file_get_contents($userSocial->getAvatar());
                $profile_picture = time() . "_avatar.jpg";
                $path            = public_path() . '/uploads/profile/' . $profile_picture;
                \File::put($path, $fileContents);
            }

            $user                    = new User();
            $user->name              = $userSocial->getName();
            $user->email             = $userSocial->getEmail();
            $user->user_type         = 'user';
            $user->status            = 1;
			$user->valid_to			 = $valid_to;
            $user->profile_picture   = $profile_picture;
            $user->email_verified_at = now();
            $user->provider_id       = $userSocial->getId();
            $user->provider          = $provider;
            $user->save();

            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
