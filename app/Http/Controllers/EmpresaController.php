<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
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
        $empresa->insertar_empresa($request->cod_empo,$request->name,$request->direccion,$request->name_r,$request->telefono,$request->correo,$request->porcet,1);
        return view("admin_b.menu_buy_ad");
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
}
