<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function login(){
        return view('auth.login');
    }

    public function processLogin(Request $request){
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        
        $user = User::where('email', $request->email)->first();
       
        if($user){
            
            if(Hash::check($request->password, $user->password)){ 

                Auth::login($user); //log user in
                return redirect('home'); //redirect to home
             }else{
                return back()->with('error', 'Email or Password is incorrect');

            }

        }else{
            return back()->with('error', 'Email or Password is incorrect');
        }
       
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
