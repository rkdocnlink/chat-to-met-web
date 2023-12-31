<?php

use App\Http\Controllers\API\v2\AuthContoller;
use App\Http\Controllers\API\v2\DashboardAPIController;
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

     Route::get('user-info', [AuthContoller::class,'userInfo']);
     Route::get('categories', [DashboardAPIController::class,'listCategory']);
     Route::get('classes', [DashboardAPIController::class,'listClasses']);
     Route::get('subjects', [DashboardAPIController::class,'listSubjects']);
     
});

Route::post('user-login',[AuthContoller::class,'loginUser']); 
Route::post('user-register',[AuthContoller::class,'registerUser']); 
Route::post('verify-otp',[AuthContoller::class,'verifyOTP']); 

