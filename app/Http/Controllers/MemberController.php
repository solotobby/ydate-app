<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function memberHome(){
        return view('members.home');
    }
}
