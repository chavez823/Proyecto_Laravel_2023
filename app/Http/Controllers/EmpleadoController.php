<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmpleadoController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view("admin_e.nuevo_empleado");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'apellido' => 'required',
        ]);

       // $empleado==Empleado::insert([]);


        $Nombres=$request->name; 
        $Apellidos=$request->apellido;
        $Contrasenia=substr(number_format(time() * rand(), 0, '', ''), 0, 3);
        $Correo=$request->email; 
      $id_empleado=substr(number_format(time() * rand(), 0, '', ''), 0, 3);
        $ID_Usuario=substr(number_format(time() * rand(), 0, '', ''), 0, 3);
        $Tipo="empleado_api";
        $usuario= new Usuario();
       
            $usuario->insertarusuario($Contrasenia,$Correo,$ID_Usuario,$Nombres, $Apellidos,$Tipo);
            $empleado=Empleado::insert(['ID_Empresa'=> $_SESSION['id_empresa'], "ID_Empleado"=>$id_empleado, "ID_Usuario"=>$ID_Usuario, 'Tipo'=>$Tipo]);

            Mail::raw($Contrasenia , function ($message) use($Correo) {
                $message->from('yam182141@gmail.com', 'Buyit');
                $message->to($Correo)->cc('Buyit@example.com');
                redirect()->to('/')->send();
             
            });

    }

    public function verempleados(){

$empleados=Empleado::join('Usuario', 'usuario.ID_Usuario', '=', 'empleado.ID_Usuario')
->join('empresa', 'empleado.ID_Empresa', '=', 'empresa.ID_Empresa')
->select('Usuario.Nombres','Usuario.Apellidos','Usuario.Correo', 'Empleado.ID_Empleado', 'Empleado.Tipo','empresa.ID_Empresa')
->where('empresa.ID_Empresa', $_SESSION['id_empresa'])
->get();

$data=array();
           $data['empleados']=$empleados;
return view("admin_e.listaempleados", $data);

//return $empleados;



    }

    public function vereditarempleado(string $id )
    {
        $empleados=Empleado::Where('ID_Empleado',$id)->get();
        $data=array();
        $data['empleados']=$empleados;

        
       return view("admin_e.editarempleado",$data );
    }



 /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'id_e'=>'required',
'id_emp'=>'required',
'id_u'=>'required',
'tipo'=>'required',

        ]);

        $rubro=Empleado::where('ID_Empleado',$id )->update(['ID_Empleado' => $request->id_e, 'ID_Empresa' => $request->id_emp, 'ID_Usuario' => $request->id_u,'Tipo' => $request->tipo ]);
        redirect()->to('/Empresa')->send();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

    {
        $rubro =Empleado::where('ID_Empleado',$id )->delete();
        redirect()->to('/')->send();
    }


















   
}
