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

   
     $user= Usuario::where('Correo', $request->email )->first();
   //  $cliente=Cliente::Where('Correo', $request->email )->Where('Token', Null )->first();
        
    if($request->mail== null && $request->password== null){
        return back()->with( 'error', 'Completa los campos');
       }
        
     else if ($user != null && $user->Contrasenia===($request->password) && $user->Tipo=='Cliente' && $user->Token !=null )
           {{

             /* if(){{
                redirect()->to('/nuevocliente/verificacion')->send();}}
                
              else{*/
               // Auth::login($user);
                $request->session()->regenerate();
                $_SESSION['session']["nombre"]= $user->Nombres;
                $_SESSION['session']["correo"]= $request->email;
                redirect()->to('/')->send();
               /* $ofertas=new Inicio;
                $data=array();
                $data['ofertas']=$ofertas->inicio();
                // return view('Menu.buyit',$data);*/
                
              }
              
            }
            else if ($user != null && $user->Contrasenia===($request->password) && $user->Tipo=='Cliente' && $user->Token ==null )
            {{
              redirect()->to('/nuevocliente/verificacion')->send();}}
 


            elseif(($user != null && $user->Contrasenia===($request->password) && $user->Tipo=='Administrador' && $user->Token ==null))
{{
             //($user->Tipo=='Administrador')
              //Auth::login($user);
                $request->session()->regenerate();
                $_SESSION['session']["nombre"]= $user->Nombres;
                $_SESSION['session']["correo"]= $request->email;
       
               /* $ofertas=new Inicio;
                $data=array();
                $data['ofertas']=$ofertas->inicio();
                // return view('Menu.buyit',$data);*/
                redirect()->to('/')->send();
            

}}

            
    return back()->with( 'error', 'Correo y/o  Contraseña incorrectos');
     
    
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

       

        if ($request->password != null ){

          {
            
       $user= Usuario::where('Correo',  $_SESSION['session']["correo"] )->first();
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

      $user= Usuario::where('Correo', $request->email )->first();
      
      $_SESSION['core']= $request->email;
     $correo=$_SESSION['core'];
      $contrsenia=substr(number_format(time() * rand(), 0, '', ''), 0, 6);

      if($user != null ){{

        $user->update([
          'Contrasenia'=>$contrsenia]);
           
               

            
              Mail::raw($contrsenia , function ($message) use($correo) {
                $message->from('yam182141@gmail.com', 'Laravel');
                $message->to($correo)->cc('buyit@example.com');
               // $message->attach('pdfs/prueba.pdf');
            });
   

               
 

 








        
            redirect()->to('form')->send();
         

    
          }

         

   }
   return back()->with( 'errorcambio', 'Debe completar el campo  Contraseña ');
    
   
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
