<?php

namespace App\Http\Controllers;
use App\Models\Cupon;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Usuario;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class EmpresaController extends Controller
{
    public $correo_admin_empresa;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin_b.menu_buy_ad");
    }

    public function menuadmin()
    {
        return view("admin_e.menu_ad");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin_b.nuevaempresa");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empresa = new Empresa();
        $admin_empresa = new usuario();
        $user= Usuario::where('Correo', $request->correo )->first();
        if($user == null){
        $empresa->insertar_empresa($request->cod_empo,$request->name,
        $request->direccion,$request->name_r,$request->telefono,$request->correo,
        $request->porcet,1);
        $Contrasenia=rand(1,100);
		for ($i=0; $i < 2; $i++) { 
		    $Contrasenia .= rand(1,100);
		}
        $ID_Usuario=rand(1,100);
		for ($i=0; $i < 2; $i++) { 
		    $ID_Usuario .= rand(1,100);
		}
        $id_empleado=rand(1,100);
		for ($i=0; $i < 2; $i++) { 
		    $id_empleado .= rand(1,100);
		}
        $this->correo_admin_empresa=$request->correo;
        Mail::raw('Envio de contraseña es: '.$Contrasenia, function ($message) {
            $message->from('yam182141@gmail.com', 'BuyIt'); 
            $message->to($this->correo_admin_empresa)->cc('bar@example.com');
        });
        $Tipo="Administrador_Empresa";
        $admin_empresa->insertarusuario($Contrasenia,$request->correo,$ID_Usuario,$request->name_r,
        $request->name_r,$Tipo);
        Empleado::insert(['ID_Empresa'=> $request->cod_empo, "ID_Empleado"=>$id_empleado,
            "ID_Usuario"=>$ID_Usuario, 'Tipo'=>$Tipo]);
        return view("admin_b.menu_buy_ad");
        }
        else{
            return back()->with( 'errorlo', '!CORREO EN USO!');
        }  
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $empresas=new Empresa;
        $data=array();
        $data['empresas']=$empresas->getEmpresas();
        return view('admin_b.listaEmpresas',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empresa=new Empresa;
        $data=array();
        $data['empresa']=$empresa->getEmpresas($id);
        return view("admin_b.editarEmpresa",$data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $empresa = new Empresa();
        $empresa->actualizar_empresa($id,$request->name,$request->direccion,$request->name_r,$request->telefono,$request->correo,$request->porcet,1);
        redirect()->to('Empresa/show')->send();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empresa = new Empresa();
        $empresa->eliminar_empresa($id);
        redirect()->to('Empresa/show')->send();
    }
    public function nuevasOfertas(){
        $ofertas=new Empresa;
        $data=array();
        $data['ofertas']=$ofertas->getOfertasNuevas();
        return view('oferta.nuevasOfertas',$data);
    }
    public function pasadasOfertas(){
        $ofertas=new Empresa;
        $data=array();
        $data['ofertas']=$ofertas->getOfertasVerificadas();
        return view('oferta.pasadasOfertas',$data);
    }
    public function cambiarEstado(Request $request,$ID_Oferta,$id){
        $empresa = new Empresa();
        $empresa->changeEstado($request->justificacion,$ID_Oferta,$id);
        redirect()->to('Empresa/Ofertas')->send(); 
    }
    public function verPropuesta($ID_Oferta){
        $ofertas=new Empresa;
        $data=array();
        $data['oferta']=$ofertas->getOferta($ID_Oferta);
        return view('oferta.oferta',$data);

    }



    public function vercliente()
    {
        //
       // return "prueba";
     //  $clientes=Cupon::join('Cliente')->get();
      // $clientes=Cliente::get();
/*$cliente=Cliente::join('Cupon','Cliente.DUI','=','Cupon.DUI' )     
            ->join('Estado_cupon','Estado_cupon.ID_Estado_Cupon','=','Cupon.ID_Estado_Cupon')  
            ->select('Cliente.*','ID_Cupon','Estado_cupon.Estado')
            ->get();
           // return $sentencia;
           $data=array();
           $data['cliente']=$cliente;


    return view("admin_b.listaclientes", $data /*compact('clientes')*///);*/

 //$clientes;


 $cliente=Cliente::join('cupon', 'cupon.DUI', '=', 'cliente.DUI')
 ->join('estado_cupon', 'estado_cupon.ID_Estado_Cupon', '=', 'cupon.ID_Estado_Cupon')
 ->select('cliente.Nombres', 'cliente.Apellidos', 'cliente.DUI', 'cliente.Direccion', 'cliente.Telefono', 'cliente.Correo',
          DB::raw('SUM(CASE WHEN estado_cupon.Estado = "Canjeado" THEN 1 ELSE 0 END) as canjeados'),
          DB::raw('SUM(CASE WHEN estado_cupon.Estado = "Sin Canjear" THEN 1 ELSE 0 END) as sin_canjear'),
          DB::raw('COUNT(cupon.ID_Cupon) as total_cupones'))
 ->groupBy('cliente.Nombres', 'cliente.Apellidos', 'cliente.DUI')
 ->get();

//return $cliente;
$data=array();
           $data['cliente']=$cliente;
return view("admin_b.listaclientes", $data);



    }











}
