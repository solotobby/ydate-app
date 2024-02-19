<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardController extends Controller
{
    public function initiateOnboarding(){
        return view('members.onboarding');
    }
}
