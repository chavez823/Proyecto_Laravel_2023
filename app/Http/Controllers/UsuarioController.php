<?php

namespace App\Http\Controllers;

//use App\Models\Usuario;
use App\Models\User;
use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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





      public function login(Request $request, Redirector $redirect){

        //
       // return "Prueba";
       //$usuarios=new User();
      // $data=array();

      // $Correo = $_POST['email'];
       //$Contrasenia=$_POST['password'];
     
    
       // return view('Usuario.login' );

       $user= User::where('Correo', $request->email)->first();
       if($user->Contrasenia===($request->password)){

        Auth::login($user);
        $request->session()->regenerate();
       // $redirect->redirect('/');
       
       $ofertas=new Inicio;
       $data=array();
       $data['ofertas']=$ofertas->inicio();
        return view('Menu.buyit',$data);

      // return view('Menu.buyit');
       }
       else{






       }

    




      }

      public function nuevo(){



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
