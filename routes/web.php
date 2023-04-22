<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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
/*Route::get('cliente', function () {
    return view('Cliente.emailverification');
});*/
Route::get('/', [InicioController::class, 'index']);
Route::get('login', [UsuarioController::class, 'index']);

Route::get('/carrito/{id}&{vista}', [InicioController::class, 'carrito']);

//Route::resource('cliente', [ClienteController::class, 'index']);



/*Route::get('/', function () {
    return view('welcome');
});*/
