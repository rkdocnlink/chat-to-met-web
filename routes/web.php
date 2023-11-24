<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserViewController;
use App\Http\Controllers\FriendManagementController;
use App\Http\Controllers\GroupController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect('login');
});

//----------------------------------Login-----------------------------/
Route::get('login', [UserAuthController::class, 'viewLogin'])->name('login');
Route::post('login', [UserAuthController::class, 'userLogin'])->name('user_login');


//----------------------------------Register--------------------------/
Route::get('register', [UserAuthController::class, 'viewRegister'])->name('register');
Route::post('register', [UserAuthController::class, 'userRegister'])->name('user_register');
Route::get('otp-verify', [UserAuthController::class, 'otpVerify'])->name('otp-verify');
Route::post('otp-verify', [UserAuthController::class, 'userVerifyOTP'])->name('otp-verify-post');

//----------------------------------Logout--------------------------/
Route::get('logout', [UserAuthController::class, 'userLogOut'])->name('logout');


//----------------------------------Profile--------------------------/
Route::get('profile', [UserAuthController::class, 'userProfile'])->name('profile');
Route::get('profile-name', [UserAuthController::class, 'userProfile'])->name('profile-name');
Route::post('update-profile', [UserAuthController::class, 'userProfileUpdate'])->name('update-profile');


//-----------------------------------Friends-------------------------/
Route::POST('add-contact', [FriendManagementController::class,'addContact'])->name('add-contact');
Route::POST('accept-contact', [FriendManagementController::class,'acceptContact'])->name('accept-contact');


//-----------------------------------Group-------------------------/
Route::get('add-group', [GroupController::class,'viewGroupDashboard'])->name('viewGroupDashboard');
Route::POST('add-group', [GroupController::class,'addGroup'])->name('add-group');

//-----------------------------------Dashboard-----------------------/
Route::get('dashboard', [UserAuthController::class, 'viewDashboard'])->name('dashboard');