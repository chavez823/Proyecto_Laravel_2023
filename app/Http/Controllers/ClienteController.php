<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Inicio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Hamcrest\Core\HasToString;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;





class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Cliente.cliente');
    }
 

    public function nuevo(Request $request)
    {
        //

        return view('Cliente.cliente');
    }


    public function agregar_cliente(Request $request)
    {
        //
        $Dui=$request->dui;
        $Nombres=$request->name; 
        $Apellidos=$request->apellido;
        $Contrasenia=$request->password; 
        $Correo=$request->email; 
        $Telefono=$request->telefono; 
        $Direccion=$request->direccion; 
        $Token = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $clientes = new Cliente();
        $ID_Usuario=substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $Tipo="Cliente";
        $usuario= new Usuario();
         $usuario->insertarusuario($Contrasenia,$Correo,$ID_Usuario,$Nombres, $Apellidos,$Tipo );

        $clientes->insertarcliente($Dui,$Nombres, $Apellidos,$Contrasenia, $Correo, $Telefono, $Direccion, $Token, $ID_Usuario);

        //redirect()->to('form')->send();
        return view('Usuario.login');
    }










    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "prueba";





    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
