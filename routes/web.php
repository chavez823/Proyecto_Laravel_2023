<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CuponController;
use Illuminate\Support\Facades\Route;
session_start();

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
/*Route::get('usuario', function () {
    return view('Usuario.login');
});

Route::get('usuario', function () {
    return view('Usuario.cambiodecontraseña');
});
Route::get('usuario', function () {
    return view('Usuario.recuperacioncontraseña');
});*/
/*Route::get('cliente', function () {
    return view('Cliente.cliente');
});*/

Route::get('/', [InicioController::class, 'index']);
Route::get('buyit', [InicioController::class, 'index']);
Route::get('carrito', [InicioController::class, 'ver_carrito']);
Route::post('login', [UsuarioController::class, 'login']);
Route::get('form', [UsuarioController::class, 'index']);
Route::get('form/recuperacioncontraseña', [UsuarioController::class, 'recuperacioncontraseña']);
Route::get('form/cambiocontraseña', [UsuarioController::class, 'cambiocontraseña']);
Route::get('Categoria', [CategoriaController::class, 'index']);
Route::get('Categoria/belleza', [CategoriaController::class, 'Ver_belleza']);
Route::get('Categoria/salud', [CategoriaController::class, 'Ver_salud']);
Route::get('Categoria/restaurante', [CategoriaController::class, 'Ver_restaurante']);
Route::get('Categoria/super', [CategoriaController::class, 'Ver_super']);

Route::get('/carrito/{id}&{vista}', [InicioController::class, 'carrito']);
Route::get('/restar/{ID}', [InicioController::class, 'restar']);
Route::get('/delete/{ID}', [InicioController::class, 'delete']);
Route::get('/pagar', [CuponController::class, 'index']);


Route::get('nuevocliente', [ClienteController::class, 'index']);



/*Route::get('/', function () {
    return view('welcome');
});*/
