<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\CustomAuthController;


route::get('dashboard', [CustomAuthController::class, 'dashboard']);
route::get('login',[CustomAuthController::class, 'index'])->name('login');
route::post('custom-login',[CustomAuthController::class, 'customlogin'])->name('login.custom');
route::get('registration',[CustomAuthController::class, 'registration'])->name('register.user');
route::post('custom-registration',[CustomAuthController::class, 'customregistration'])->name('register.custom');
route::get('sigout',[CustomAuthController::class, 'sigout'])->name('sigout');





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
