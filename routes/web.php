<?php

use App\Http\Controllers\CiudadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DetallefacturaController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;


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
->name('categories.create');

//muestra formulario editar una categoria
route::get('/categories/edit/{category}',[CategoryController::class,'edit'])
->name('categories.edit');

//recibe formulario editar una categoria
route::post('/categories/edit/{category}',[CategoryController::class,'update'])
->name('categories.edit');

//elimina una categoria por el id
route::post('/categories/delete/{category}',[CategoryController::class,'destroy'])
->name('categories.delete');

//ciudad
//muestra categorias
route::get('/ciudad',[CiudadController::class,'index'])
->name('ciudad.index');

//formulario categorias
route::get('/ciudad/create', [CiudadController::class,'create'])
->name('ciudad.create');

//datos formulario categorias
route::post('/ciudad/create',[CiudadController::class,'store'])
->name('ciudad.create');

//muestra formulario editar una categoria
route::get('/ciudad/edit/{ciudad}',[CiudadController::class,'edit'])
->name('ciudad.edit');

//recibe formulario editar una categoria
route::post('/ciudad/edit/{ciudad}',[CiudadController::class,'update'])
->name('ciudad.edit');

//elimina una categoria por el id
route::post('/ciudad/delete/{ciudad}',[CiudadController::class,'destroy'])
->name('ciudad.delete');

//departamento
//muestra categorias
route::get('/departamento',[DepartamentoController::class,'index'])
->name('departamento.index');

//formulario categorias
route::get('/departamento/create', [DepartamentoController::class,'create'])
->name('departamento.create');

//datos formulario categorias
route::post('/departamento/create',[DepartamentoController::class,'store'])
->name('departamento.create');

//muestra formulario editar una categoria
route::get('/departamento/edit/{departamento}',[DepartamentoController::class,'edit'])
->name('departamento.edit');

//recibe formulario editar una categoria
route::post('/departamento/edit/{category}',[CategoryController::class,'update'])
->name('categories.edit');

//elimina una categoria por el id
route::post('/categories/delete/{category}',[CategoryController::class,'destroy'])
->name('categories.delete');













//1 productos
route::get('/products',[ProductController::class,'index'])
->name('products.index');

//
route::get('/products/create', [ProductController::class,'create'])
->name('products.create');

//
route::post('/products/create',[ProductController::class,'store'])
->name('products.create');

//
route::get('/products/edit/{category}',[ProductController::class,'edit'])
->name('products.edit');

//
route::post('/products/edit/{product}',[ProductController::class,'update'])
->name('products.edit');

//
route::post('/products/delete/{product}',[ProductController::class,'destroy'])
->name('products.delete');







Route::get('/', function () {
    return view('welcome');
});
