<?php

use App\Http\Controllers\API\v2\AuthContoller;
use App\Http\Controllers\API\v2\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group( function () {
   Route::get('users-list',[DashboardController::class,'getUsersList']); 
   Route::get('send-contact-request',[DashboardController::class,'sendContactRequest']); 
   Route::get('accept-contact-request',[DashboardController::class,'acceptContactRequest']); 
});

Route::post('user-login',[AuthContoller::class,'loginUser']); 
Route::post('user-register',[AuthContoller::class,'registerUser']); 
Route::post('verify-otp',[AuthContoller::class,'verifyOTP']); 

