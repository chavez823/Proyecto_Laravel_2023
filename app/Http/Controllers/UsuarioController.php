<?php

namespace App\Http\Controllers;

//use App\Models\Usuario;

use App\Models\Cliente;
use App\Models\User;
use App\Models\Inicio;
use App\Models\Usuario;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Message;

use Hamcrest\Core\HasToString;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Response;
//use  App\Http\Controllers\Redirector;



class UsuarioController extends Controller
{
public $correo;
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

$request->validate([

'email'=>['required', 'email'],

'password'=>['required'],

]);


     $user= Usuario::where('Correo', $request->email )->first();
  if ($user != null && $user->Contrasenia===($request->password) && $user->Tipo=='Cliente' && $user->Token !=null )
           {{

            
                $request->session()->regenerate();
                $_SESSION['session']["nombre"]= $user->Nombres;
                $_SESSION['session']["correo"]= $request->email;
                $_SESSION['session']["tipo"]= $user->Tipo;
                redirect()->to('/')->send();
            
                
              }
              
            }
            else if ($user != null && $user->Contrasenia===($request->password) && $user->Tipo=='Cliente' && $user->Token ==null )
            {{
              redirect()->to('/nuevocliente/verificacion')->send();}}
 


            elseif(($user != null && $user->Contrasenia===($request->password) &&  $user->Token ==null  && $user->Tipo=='Administrador' ))
{{
            
                $request->session()->regenerate();
                $_SESSION['session']["nombre"]= $user->Nombres;
                $_SESSION['session']["correo"]= $request->email;
                $_SESSION['session']["tipo"]= $user->Tipo;
               /* $id=Usuario::join('empleado', 'usuario.ID_Usuario', '=', 'empleado.ID_Usuario')
                ->join('empresa', 'empleado.ID_Empresa', '=', 'empresa.ID_Empresa')
                ->select('empresa.ID_Empresa')
                ->where('usuario.Correo', $request->email)
                ->get();
                $_SESSION['id_empresa']=$id[0]->ID_Empresa;*/
       
             
                redirect()->to('/')->send();
            

}}

elseif(($user != null && $user->Contrasenia===($request->password) &&  $user->Token ==null  && $user->Tipo=='Administrador_Empresa' ))
{{
            
                $request->session()->regenerate();
                $_SESSION['session']["nombre"]= $user->Nombres;
                $_SESSION['session']["correo"]= $request->email;
                $_SESSION['session']["tipo"]= $user->Tipo;
                $id=Usuario::join('empleado', 'usuario.ID_Usuario', '=', 'empleado.ID_Usuario')
                ->join('empresa', 'empleado.ID_Empresa', '=', 'empresa.ID_Empresa')
                ->select('empresa.ID_Empresa')
                ->where('usuario.Correo', $request->email)
                ->get();
                $_SESSION['id_empresa']=$id[0]->ID_Empresa;
       
             
                redirect()->to('/')->send();
            

}}





            
    return back()->with( 'errorlo', 'Correo y/o  Contraseña incorrectos');
     
    
       // return view('Usuario.login' );

      }

      public function logout(Request $request){
       // Auth::logout();
        session_unset();
             //destruye las varibles de  sesiones 
             session_destroy();
             $ofertas=new Inicio;
             $data=array();
             $data['ofertas']=$ofertas->inicio();
             // return view('Menu.buyit',$data);
              redirect()->to('/')->send();
      }


      public function  cambiopassword(Request $request){
        $request->validate([

         
          'password'=>['required'],
          
          ]);

       

        if ($request->password != null ){

          {
            
       $user= Usuario::where('Correo',  $_SESSION['session']["correo"] )->get();
       // $user->Dui;
        $user->update([
          'Contrasenia'=>($request->password)]);
           
               //   $useru= User::update(['Contrasenia'=>($request->password)]);



            redirect()->to('/')->send();
         

    
          }

         

   }
   return back()->with( 'error', 'Debe completar el campo  Contraseña ');
    
   
    

     }


     public function recuperacion(Request $request){

      $request->validate([

        'email'=>['required', 'email'],
      
        
        ]);
      $user= Usuario::where('Correo', $request->email )->first();
      
      $_SESSION['core']= $request->email;
     $correo=$_SESSION['core'];
      $contrasenia=substr(number_format(time() * rand(), 0, '', ''), 0, 6);

      if($user != null ){{

        $user->update([
          'Contrasenia'=>$contrasenia]);
           
               

            
              Mail::raw($contrasenia , function ($message) use($correo) {
                $message->from('yam182141@gmail.com', 'Buyit');
                $message->to($correo)->cc('buyit@example.com');
               // $message->attach('pdfs/prueba.pdf');
            });
   

            
            redirect()->to('form')->send();
         

    
          }

         

   }
   return back()->with( 'errorcambio', 'Debe completar el campo');
    
   
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
