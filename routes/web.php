<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\VerifyController;
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
Route::group(['middleware' => 'home-auth'],function () {
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

});

Route::get('/register',[RegistrationController::class,'getRegister'])->name('get_register');
Route::post('/post-register',[RegistrationController::class,'registered'])->name('register');

Route::get('/login',[LoginController::class,'getLogin'])->name('get_login');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/verify',[VerifyController::class,'getVerify'])->name('get_verify');
Route::post('/verify',[VerifyController::class,'postVerify'])->name('verify');
