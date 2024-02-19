<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'web'], function () {

    Route::prefix('auth')->group( function(){ 
        Route::get('register', [RegisterController::class, 'register']);
        Route::post('register', [RegisterController::class, 'processRegistration']);

        Route::get('login', [LoginController::class, 'login']);
        Route::post('login', [LoginController::class, 'processLogin']);

     });
// Route::prefix('social')->name('facebook.')->group( function(){
// Route::prefix('social')->name('social.google.')->group( function(){
//     Route::get('google/auth', [SocialiteController::class, 'loginUsingGoogle'])->name('auth');
//     Route::get('google/callback', [SocialiteController::class, 'callbackFromGoogle']);
// });


Route::group(['middleware' => 'auth'], function () { 
    Auth::routes(['auth']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

   //->name('home');
    Route::group(['middleware' => ['role:member']], function () { 
        Route::prefix('member')->group( function(){ 
            Route::get('home', [App\Http\Controllers\MemberController::class, 'memberHome']);
         });
       
     });

     Route::group(['middleware' => ['role:admin']], function () {  
        Route::prefix('admin')->group( function(){ 
            Route::get('home', [App\Http\Controllers\HomeController::class, 'adminHome']);
         });
      
     });
   
});



});
