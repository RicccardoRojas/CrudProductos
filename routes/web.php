<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\MuroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Rutas a llamar
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

//Rutas a llamar
// Route::get('/productos', function () {
//     return view('productos.index');
// })->name('ProductosIndex');//Nombre de la ruta

Route::get('/productos', [ProductosController::class,'index']
)->name('ProductosIndex');//Nombre de la ruta

Route::get('/productos/create', [ProductosController::class,'create']
)->name('ProductosCreate');//Nombre de la ruta

Route::post('/productos', [ProductosController::class,'store']
)->name('ProductosStore');//Nombre de la ruta

Route::get('/productos/{producto}/edit', [ProductosController::class,'edit']
)->name('ProductosEdit');//Nombre de la ruta

Route::patch('/productos/{producto}', [ProductosController::class,'update']
)->name('ProductosUpdate');//Nombre de la ruta

Route::delete('/productos/{producto}', [ProductosController::class,'destroy']
)->name('ProductosDestroy');//Nombre de la ruta

//Registro

Route::get('/registro', [RegistroController::class,'index']
)->name('RegistroIndex');//Nombre de la ruta

Route::post('/registro', [RegistroController::class,'store']
)->name('RegistroStore');//Nombre de la ruta

Route::get('/muro', [MuroController::class,'index']
)->name('MuroIndex');//Nombre de la ruta

//Login
Route::get('/login', [LoginController::class,'index']
)->name('LoginIndex');//Nombre de la ruta

Route::post('/login', [LoginController::class,'store']
)->name('LoginStore');//Nombre de la ruta

//Logout
Route::post('/logout', [LogoutController::class,'store']
)->name('LogoutStore');//Nombre de la ruta