<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\InventariesController;
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
    return view('plantilla');

});

//Route::view('/', 'paginas.dashboard');
//Route::view('/clientes', 'paginas.cliente')->name('paginas.cliente');
//Route::view('/productos','paginas.productos')->name('paginas.productos');
Route::view('/facturacion','paginas.facturacion')->name('paginas.facturacion');
Route::view('/consultascliente','paginas.consultacliente')->name('paginas.consultacliente');
Route::view('/consultas','paginas.consultaproducto')->name('paginas.consultaproducto');
Route::view('/reportescliente','paginas.reportecliente')->name('paginas.reportecliente');
Route::view('/reportesproductos','paginas.reporteproductos')->name('paginas.reporteproductos');
Route::view('/reportesventas','paginas.reporteventas')->name('paginas.reporteventas');
Route::view('/utilidadesanual','paginas.utilidadanual')->name('paginas.utilidadanual');
Route::view('/utilidadesmensual','paginas.utilidadmensual')->name('paginas.utilidadmensual');

//--clientes
Route::get('/clientes', [ClientsController::class, 'index'])->name('paginas.cliente.index');
Route::get('/clientes/create' , [ClientsController::class, 'create'])->name('paginas.cliente.create');
Route::post('/clientes', [ClientsController::class, 'store'])->name('paginas.cliente.store');
//Route::get('/clientes/{client}', [ClientsController::class, 'show'])->name('paginas.cliente.show'); 
//Route::get('/clientes/{client}/edit', [ClientsController::class, 'edit'])->name('paginas.cliente.edit');
Route::patch('/clientes/{client}', [ClientsController::class, 'update'])->name('paginas.cliente.update');
Route::delete('/clientes/{client}', [ClientsController::class, 'destroy'])->name('paginas.cliente.destroy');

//productos
Route::get('/producto', [InventariesController::class, 'index'])->name('paginas.producto.index');
Route::post('/producto', [InventariesController::class, 'store'])->name('paginas.producto.store');
Route::get('/producto/{product}', [ClientsController::class, 'show'])->name('paginas.producto.show'); 
Route::patch('/producto/{product}',[InventariesController::class, 'update'])->name('paginas.producto.update');
Route::delete('/producto/{product}',[InventariesController::class, 'destroy'])->name('paginas.producto.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
