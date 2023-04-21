<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GS\GsController;
use App\Http\Controllers\HR\HrController;
use App\Http\Controllers\User\PersonalDetailsController;
use App\Http\Controllers\User\UserController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//HR middleware
Route::middleware(['auth','isHr'])->group(function(){
    Route::get('/hrdashboard', [HrController::class, 'index']);
 });

 //GS middleware
Route::middleware(['auth','isGs'])->group(function(){
    Route::get('/gsdashboard', [GsController::class, 'index']);
 });

 //Users middleware
Route::middleware(['auth','isUser'])->group(function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    //Personal Details
    Route::get('/personaldetails', [PersonalDetailsController::class, 'index'])->name('personaldetails');
 });
