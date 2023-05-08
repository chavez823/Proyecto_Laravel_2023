<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuponController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RubroController;

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
Route::post('logout', [UsuarioController::class, 'logout']);
Route::get('form', [UsuarioController::class, 'index']);
Route::get('form/recuperacioncontraseña', [UsuarioController::class, 'recuperacioncontraseña']);
Route::patch('/recuperacion', [UsuarioController::class, 'recuperacion']);
Route::get('form/cambio/contraseña', [UsuarioController::class, 'cambiocontraseña']);
Route::patch('/actualizacion', [UsuarioController::class, 'cambiopassword']);
Route::get('Categoria', [CategoriaController::class, 'index']);
Route::get('Categoria/belleza', [CategoriaController::class, 'Ver_belleza']);
Route::get('Categoria/salud', [CategoriaController::class, 'Ver_salud']);
Route::get('Categoria/restaurante', [CategoriaController::class, 'Ver_restaurante']);
Route::get('Categoria/super', [CategoriaController::class, 'Ver_super']);

Route::get('/carrito/{id}&{vista}', [InicioController::class, 'carrito']);
Route::get('/restar/{ID}', [InicioController::class, 'restar']);
Route::get('/delete/{ID}', [InicioController::class, 'delete']);

Route::get('/pagar', [CuponController::class, 'index']);
Route::post('/completar-compra', [CuponController::class, 'compra_completa']);
Route::get('/gracias', [CuponController::class, 'gracias']);
Route::get('/cupones', [CuponController::class, 'ver_cupon']);
Route::get('/cupon/{id_cupon}', [CuponController::class, 'generar_cupon']);


Route::get('nuevocliente', [ClienteController::class, 'index']);
Route::post('/nuevocliente', [ClienteController::class, 'agregar_cliente']);
Route::get('/nuevocliente/verificacion', [ClienteController::class, 'verificacionpagina']);
Route::patch('/nuevocliente/verificacion/verificacion', [ClienteController::class, 'verificacion']);



//Rutas para la gestion de la empresa
Route::get('/Empresa', [EmpresaController::class, 'index']);

Route::get('/Empresa/create', [EmpresaController::class, 'create']);
Route::post('/Empresa/create', [EmpresaController::class,'store']);
Route::get('Empresa/show', [EmpresaController::class,'show']);
Route::get('/Empresa/edit/{id}', [EmpresaController::class,'edit']);
Route::put('/Empresa/update/{id}', [EmpresaController::class,'update']);
Route::get('/Empresa/delete/{id}', [EmpresaController::class,'destroy']);
Route::get('/Empresa/Ofertas', [EmpresaController::class,'ofertas']);
Route::get('/Empresa/Ofertas', [EmpresaController::class,'nuevasOfertas']);
Route::get('/Empresa/POfertas', [EmpresaController::class,'pasadasOfertas']);
Route::put('/Empresa/Estado/{ID_Oferta}&{id}', [EmpresaController::class,'cambiarEstado']);
Route::get('/Empresa/Oferta/{ID_Oferta}', [EmpresaController::class,'verPropuesta']);
Route::get('/Empresa/menuadmin', [EmpresaController::class,'menuadmin']);

Route::get('/Empresa/vercliente', [EmpresaController::class, 'vercliente']);

//Rutas para la gestion de las ofertas
Route::get('/MenuEmpresa', [OfertaController::class, 'index']);
Route::get('/MenuEmpresa/create', [OfertaController::class, 'create']);

Route::post('/MenuEmpresa/create', [OfertaController::class,'store']);
Route::get('/Empresa/vercliente', [EmpresaController::class, 'vercliente']);



//Ruta empleados

Route::get('/Empleado', [EmpleadoController::class, 'index']);
Route::post('/Empleado/nuevo', [EmpleadoController::class, 'create']);
Route::get('/Empleado/ver', [EmpleadoController::class, 'verempleados']);
Route::get('/Empleado/vereditar/{id}', [EmpleadoController::class,'vereditarempleado']);
Route::put('/Empleado/update/{id}', [EmpleadoController::class,'update']);
Route::get('/Empleado/delete/{id}', [EmpleadoController::class,'destroy']);

//rutas rubro
Route::get('/rubro', [RubroController::class, 'index']);
Route::post('/rubro/crear', [RubroController::class, 'create']);
Route::get('/rubro/editar', [RubroController::class,'edit']);
Route::get('/rubro/vereditar/{id}', [RubroController::class,'vereditar']);
Route::put('/rubro/update/{id}', [RubroController::class,'update']);
Route::get('/rubro/delete/{id}', [RubroController::class,'destroy']);


/*Route::get('/', function () {
    return view('welcome');
});*/
