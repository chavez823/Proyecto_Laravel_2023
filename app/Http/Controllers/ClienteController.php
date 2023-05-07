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
        $request->validate([
            'dui'=>['required','min:9'],
            'name'=>['required'],
            'apellido'=>['required'],
            'telefono'=>['required', 'min:8'],
            'direccion'=>['required'],
            'email'=>['required', 'email'],
            'password'=>['required'],
            
            ]);

        $Dui=$request->dui;
        $Nombres=$request->name; 
        $Apellidos=$request->apellido;
        $Contrasenia=$request->password; 
        $Correo=$request->email; 
        $Telefono=$request->telefono; 
        $Direccion=$request->direccion; 
        $Token = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
     //  $Token = 15;
      
        $ID_Usuario=substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $Tipo="Cliente";
        $usuario= new Usuario();
        $cliente=Cliente::where('DUI', $Dui )->first();

        if ($cliente == null ){
   
           {
            $clientes = new Cliente();
            $usuario->insertarusuario($Contrasenia,$Correo,$ID_Usuario,$Nombres, $Apellidos,$Tipo);

            $clientes->insertarcliente($Dui,$Nombres, $Apellidos, $Correo, $Telefono, $Direccion, $ID_Usuario,$Token);

            Mail::raw($Token , function ($message) use($Correo) {
                $message->from('yam182141@gmail.com', 'Buyit');
                $message->to($Correo)->cc('Buyit@example.com');
                redirect()->to('/nuevocliente/verificacion/')->send();
             
            });

       
 }}


return back()->with( 'errorcli', 'El Dui ya esta registrado');
       


    }


    public function verificacion(Request $request){

        $request->validate([

            'email'=>['required', 'email'],
            
            'token'=>['required'],
            
            ]);

       $Token=$request->token;
      
     $Correo=$request->email;

     $clientes=Cliente::where('Correo', $request->email )->first();

     if ($clientes != null &&  $clientes->Token===$Token){

        {
            $cliente=Usuario::where('Correo', $request->email)->first();
             $cliente->update([
             'Token'=>/*($request->password)*/$Token]);
             redirect()->to('form')->send();

        }

       

 }
 return back()->with( 'errorveri', 'Correo y/o  token equivocados');
  
 
 
   }
  
 




    
    public function verclientes()
    {
        //
       // return "prueba";
       $clientes=Cliente::get();

       return view();

        








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
