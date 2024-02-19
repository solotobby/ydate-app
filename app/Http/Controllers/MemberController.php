<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function memberHome(){
        // return hasUpdatedInfo();
        
        return view('members.home');
    }
}
