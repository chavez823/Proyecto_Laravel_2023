<?php

namespace App\Http\Controllers;

//use App\Models\Usuario;
use App\Models\User;
use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Response;
//use  App\Http\Controllers\Redirector;



class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
       return view('Usuario.login');
       
    } 

    public function recuperacioncontraseña(){

      return view('Usuario.recuperacioncontraseña');
    }

    public function cambiocontraseña(){

      return view('Usuario.cambiodecontraseña');
    }





      public function login(Request $request){

        //
       // return "Prueba";
       //$usuarios=new User();
      // $data=array();

      // $Correo = $_POST['email'];
       //$Contrasenia=$_POST['password'];
     
    
       // return view('Usuario.login' );

       $user= User::where('Correo', $request->email)->first();
       if($user->Contrasenia===($request->password)){

           {

                 // echo "sirve";
         Auth::login($user);
         $request->session()->regenerate();
         $_SESSION['session']["nombre"]= $user->Nombres;
        // $request->email;
         $ofertas=new Inicio;
         $data=array();
         $data['ofertas']=$ofertas->inicio();
          return view('Menu.buyit',$data);

           }
     

   //   else{					
           // echo "Usuario y/o Contraseña incorrectos";
   //   $errores=array();
   //   array_push($errores,"Correo y/o contraseña equivocado");	
    //  require_once "views/Usuario/login.php";	 
   /* return view('Usuario.login');
      }*/


    }

     
    
       // return view('Usuario.login' );

      }

      public function logout(Request $request){
        Auth::logout();
        session_unset();
             //destruye las varibles de  sesiones 
             session_destroy();
             $ofertas=new Inicio;
             $data=array();
             $data['ofertas']=$ofertas->inicio();
              return view('Menu.buyit',$data);



      }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "Prueba";
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
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
