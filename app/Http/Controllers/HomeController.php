<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $user = auth()->user();
         if($user->hasRole('member')){
            return redirect('member/home');
         }else{
            return redirect('admin/home');
         }

    }

    public function adminHome(){
        return 'admin';
    }

    
}
