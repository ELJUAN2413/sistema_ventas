<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


route::get('dashboard', [CustomAuthController::class, 'dashboard']);
route::get('login',[CustomAuthController::class, 'index'])->name('login');
route::post('custom-login',[CustomAuthController::class, 'customlogin'])->name('login.custom');
route::get('registration',[CustomAuthController::class, 'registration'])->name('register.user');
route::post('custom-registration',[CustomAuthController::class, 'customregistration'])->name('register.custom');
route::get('sigout',[CustomAuthController::class, 'sigout'])->name('sigout');


//muestra categorias
route::get('/categories',[CategoryController::class,'index'])
->name('categories.index');

//formulario categorias
route::get('/categories/create', [CategoryController::class,'create'])
->name('categories.create');

//datos formulario categorias
route::post('/categories/create',[CategoryController::class,'store'])
->name('categoria.create');

Route::get('/', function () {
    return view('welcome');
});
