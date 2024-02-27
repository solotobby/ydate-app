<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function memberHome(){
        $tl = timeline();
        // return view('users.dashboard');
        return view('members.home', ['tls' => $tl]);
    }

    public function completeOnboarding(Request $request){
        $age = $this->calculateAge($request->year);
        $profile = onboardMember($request, $age);
        return back();
    }

    private function calculateAge($year){
        $currentYear = date('Y');
        return $currentYear - $year;
    }
}
