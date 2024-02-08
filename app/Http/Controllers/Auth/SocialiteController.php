<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Laravel\Socialite\Facades\Socialite;
use Socialite;

class SocialiteController extends Controller
{
    public function loginUsingGoogle(){
       return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle(){
        return $user = Socialite::driver('google')->user();
    }
}
