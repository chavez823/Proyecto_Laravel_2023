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
    public function verificacionpagina(){
        return view('Cliente.emailverification');

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
       // $Token = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
       $Token = 15;
       $clientes = new Cliente();
        $ID_Usuario=substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $Tipo="Cliente";
        $usuario= new Usuario();
        $usuario->insertarusuario($Contrasenia,$Correo,$ID_Usuario,$Nombres, $Apellidos,$Tipo);

        $clientes->insertarcliente($Dui,$Nombres, $Apellidos, $Correo, $Telefono, $Direccion, $ID_Usuario,$Token);

        //redirect()->to('form')->send();
       // return view('Usuario.login');

      // $usuario= new Usuario();
      // $usuario->insertarusuario($_SESSION['registro_nuevo_cliente'][8], $_SESSION['registro_nuevo_cliente'][1],
     // $_SESSION['registro_nuevo_cliente'][2], $_SESSION['registro_nuevo_cliente'][4],  $_SESSION['registro_nuevo_cliente'][3],$Tipo);
        //inserta los datos necesarios en tabla cliente 
      //  $clientes->insertarcliente($_SESSION['registro_nuevo_cliente'][0], $_SESSION['registro_nuevo_cliente'][1], $_SESSION['registro_nuevo_cliente'][2], $_SESSION['registro_nuevo_cliente'][3], $_SESSION['registro_nuevo_cliente'][4], $_SESSION['registro_nuevo_cliente'][5], $_SESSION['registro_nuevo_cliente'][6], NULL/*$_SESSION['registro_nuevo_cliente'][7]*/, $_SESSION['registro_nuevo_cliente'][8]);
      //llamamos al metodo login 
 

      /* $_SESSION['registro_nuevo_cliente'] = array();
       $_SESSION['registro_nuevo_cliente'][0] = $Dui;
       $_SESSION['registro_nuevo_cliente'][1] = $Nombres;
       $_SESSION['registro_nuevo_cliente'][2] = $Apellidos;
       $_SESSION['registro_nuevo_cliente'][3] = $Contrasenia;
       $_SESSION['registro_nuevo_cliente'][4] = $Correo;
       $_SESSION['registro_nuevo_cliente'][5] = $Telefono;
       $_SESSION['registro_nuevo_cliente'][6] = $Direccion;
       $_SESSION['registro_nuevo_cliente'][7] = $Token;
       $_SESSION['registro_nuevo_cliente'][8] = $ID_Usuario;*/

      // Mail::raw('Text to e-mail' , function ($message) {
       // $message->from('buyitbuyit3@gmail.com', 'Laravel');
      //  $message->to( Request('email'))->cc('bar@example.com');
        //$message->attach('15');
  //  });

       

        redirect()->to('/nuevocliente/verificacion/')->send();
    }


    public function verificacion(Request $request){

       $Token=$request->password;
      
     $Correo=$request->email;

     $cliente=Cliente::where('Correo', $request->email )->first();

     if ($cliente != null &&  $Token===($request->password)){

        {
            $cliente=Usuario::where('Correo', $request->email )->first();
             $cliente->update([
             'Token'=>/*($request->password)*/$Token]);
             redirect()->to('form')->send();

        }

       

 }
 return back()->with( 'errorveri', 'Correo y/o  token equivocados');
  
 
 
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
