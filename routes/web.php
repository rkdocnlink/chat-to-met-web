<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\QuestionsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
})->name('adminDashboard');

Route::get('login', function () {
    return view('admin.login');
})->name('adminLogin');

Route::get('register', function () {
    return view('admin.register');
})->name('userRegister');

 
Route::resource('category', CategoryController::class);
Route::resource('classes', ClassesController::class);
Route::resource('subject', SubjectController::class);
Route::resource('questions', QuestionsController::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('get-classes',[QuestionsController::class,'getCategory'])->name('get-classes'); 
Route::get('get-subjects',[QuestionsController::class,'getSubject'])->name('get-subjects'); 