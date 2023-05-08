<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuponController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


/*Abarca todos las solicitudes HTPP referente a las api's */
//Route::apiResource('ticket',CuponController::class);

Route::get('ticket/{id}', [CuponController::class, 'show']);

/*Se pasa 2 parametros para identificar a cual cupon se le va a actualizar el estado*/
Route::put('ticket/{id}/{estado}/', [CuponController::class, 'update']);
