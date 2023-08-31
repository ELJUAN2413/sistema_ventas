<?php

use App\Http\Controllers\BillController;
use App\Http\Controllers\CiudadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DetailInvoiceController;
use App\Http\Controllers\DetallefacturaController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EmployeeController;
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


route::get('/categories',[CategoryController::class,'index'])->name('categories.index');

//formulario categorias
route::get('/categories/create', [CategoryController::class,'create'])->name('categories.create');

//datos formulario categorias
route::post('/categories/create',[CategoryController::class,'store'])->name('categories.create');

//muestra formulario editar una categoria
route::get('/categories/edit/{category}',[CategoryController::class,'edit'])->name('categories.edit');

//recibe formulario editar una categoria
route::post('/categories/edit/{category}',[CategoryController::class,'update'])->name('categories.edit');

//elimina una categoria por el id
route::post('/categories/delete/{category}',[CategoryController::class,'destroy'])->name('categories.delete');

//ciudad
//muestra categorias
route::get('/cities',[CityController::class,'index'])
->name('cities.index');

//formulario categorias
route::get('/cities/create', [CityController::class,'create'])
->name('cities.create');

//datos formulario categorias
route::post('/cities/create',[CityController::class,'store'])
->name('cities.create');

//muestra formulario editar una categoria
route::get('/cities/edit/{city}',[CityController::class,'edit'])
->name('cities.edit');

//recibe formulario editar una categoria
route::post('/cities/edit/{city}',[CityController::class,'update'])
->name('cities.edit');

//elimina una categoria por el id
route::post('/cities/delete/{city}',[CityController::class,'destroy'])
->name('cities.delete');

//departamento
//muestra categorias
route::get('/departaments',[DepartamentController::class,'index'])
->name('departaments.index');

//formulario categorias
route::get('/departaments/create', [DepartamentController::class,'create'])
->name('departaments.create');

//datos formulario categorias
route::post('/departaments/create',[DepartamentController::class,'store'])
->name('departaments.create');

//muestra formulario editar una categoria
route::get('/departaments/edit/{departament}',[DepartamentController::class,'edit'])
->name('departaments.edit');

//recibe formulario editar una categoria
route::post('/departaments/edit/{departament}',[DepartamentoController::class,'update'])
->name('departaments.edit');

//elimina una categoria por el id
route::post('/departaments/delete/{departament}',[DepartamentController::class,'destroy'])
->name('departaments.delete');

//clientes
//muestra categorias
route::get('/clients',[ClientController::class,'index'])
->name('clients.index');

//formulario categorias
route::get('/clients/create', [ClientController::class,'create'])
->name('clients.create');

//datos formulario categorias
route::post('/clients/store',[ClientController::class,'store'])
->name('clients.store');

//muestra formulario editar una categoria
route::get('/clients/edit/{client}',[ClientController::class,'edit'])
->name('clients.edit');

//recibe formulario editar una categoria
route::post('/clients/edit/{client}',[ClientController::class,'update'])
->name('clients.edit');

//elimina una categoria por el id
route::post('/clients/delete/{client}',[ClientController::class,'destroy'])
->name('clients.delete');

//1 productos
route::get('/products',[ProductController::class,'index'])
->name('products.index');

//
route::get('/products/create', [ProductController::class,'create'])
->name('products.create');

//
route::post('/products/create',[ProductController::class,'store'])
->name('products.store');

//
route::get('/products/edit/{product}',[ProductController::class,'edit'])
->name('products.edit');

//
route::post('/products/edit/{product}',[ProductController::class,'update'])
->name('products.edit');

//
route::post('/products/delete/{product}',[ProductController::class,'destroy'])
->name('products.delete');

//employees
//1  emplo
route::get('/employees',[EmployeeController::class,'index'])
->name('employees.index');

route::get('/employees/create', [EmployeeController::class,'create'])
->name('employees.create');

//
route::post('/employees/create',[EmployeeController::class,'store'])
->name('employees.store');

//


//
route::get('/employees/edit/{employee}',[EmployeeController::class,'edti'])
->name('employees.edit');

//
route::post('/employees/delete/{employee}',[EmployeeController::class,'delete'])
->name('employees.delete');

////////////////////////////
route::get('/customers',[CustomerController::class,'index'])
->name('customers.index');

//
route::get('/customers/create', [CustomerController::class,'create'])
->name('customers.create');

//
route::post('/customers/create',[CustomerController::class,'store'])
->name('customers.store');

//
route::get('/customers/edit/{customer}',[CustomerController::class,'edit'])
->name('customers.edit');

//
route::post('/customers/edit/{customer}',[CustomerController::class,'update'])
->name('customers.edit');

//
route::post('/customers/delete/{customer}',[CustomerController::class,'destroy'])
->name('customers.delete');



//bills
route::get('/bills',[BillController::class,'index'])
->name('bills.index');

//
route::get('/bills/create', [BillController::class,'create'])
->name('bills.create');

//
route::post('/bills/create',[BillController::class,'store'])
->name('bills.store');

//
route::get('/bills/edit/{bill}',[BillController::class,'edit'])
->name('bills.edit');

//
route::post('/bills/edit/{bill}',[BillController::class,'update'])
->name('bills.edit');

//
route::post('/bills/delete/{bill}',[BillController::class,'destroy'])
->name('bills.delete');

//detail__invoices

route::get('/detail_invoices',[DetailInvoiceController::class,'index'])
->name('detail_invoices.index');

//
route::get('/detail_invoices/create', [DetailInvoiceController::class,'create'])
->name('detail_invoices.create');

//
route::post('/detail_invoices/create',[DetailInvoiceController::class,'store'])
->name('detail_invoices.store');

//
route::get('/detail_invoices/edit/{detail_invoice}',[DetailInvoiceController::class,'edit'])
->name('detail_invoices.edit');

//
route::post('/detail_invoices/edit/{detail_invoicel}',[DetailInvoiceController::class,'update'])
->name('detail_invoices.edit');

//
route::post('/detail_invoices/delete/{detail_invoice}',[DetailInvoiceController::class,'destroy'])
->name('detail_invoices.delete');






Route::get('/', function () {
    return view('welcome');
});
