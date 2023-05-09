<?php

namespace App\Http\Controllers;
use App\Models\Oferta;
use App\Models\Rubro;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_e.menu_ad');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_e.nuevo_cupon');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        @dump($request->titulo);
        @dump($request->cantidad);
        @dump($request->descrip);
        @dump($request->detalles);
        @dump($request->fecha_i);
        @dump($request->fecha_f);
        @dump($request->precio_inicial);
        @dump($request->precio_o);
        @dump($request->imgen);
        @dump($request->fecha_limite);
        @dump($_FILES['imagen']['name'][0]);

     
       
        
    }
       public function verofertas(){
      //  $ofertas = Oferta::leftJoin('estado_oferta', 'oferta.ID_EstadoOferta', '=', 'estado_oferta.ID_EstadoOferta')->select('oferta.Titulo', 'estado_oferta.Nombre')->where('ID_Empresa', $_SESSION['id_empresa'])
   // ->whereColumn('oferta.ID_EstadoOferta', '=', 'estado_oferta.ID_EstadoOferta')
    //->get();
    $ofertas=Oferta::leftJoin('estado_oferta', 'oferta.ID_EstadoOferta', '=', 'estado_oferta.ID_EstadoOferta')
    ->whereColumn('oferta.ID_EstadoOferta', '=', 'estado_oferta.ID_EstadoOferta')
    ->where('oferta.ID_Empresa', $_SESSION['id_empresa'])
    ->get();



        $data=array();
        $data['ofertas']=$ofertas;
      //  return $ofertas;
       return view('admin_e.listaofertas', $data);
       /* DB::table('usuario')
    ->select('usuario.ID_Usuario', 'empleado.*', 'oferta.*')
    ->leftJoin('empleado', 'empleado.ID_Usuario', '=', 'usuario.ID_Usuario')
    ->join('oferta', 'oferta.ID_Empresa', '=', 'empleado.ID_Empresa')
    ->get();*/

       }

       public function vereditar(string $id )
       {
        $ofertas=Oferta::leftJoin('estado_oferta', 'oferta.ID_EstadoOferta', '=', 'estado_oferta.ID_EstadoOferta')
        ->whereColumn('oferta.ID_EstadoOferta', '=', 'estado_oferta.ID_EstadoOferta')
/*select('oferta.*', 'rubro.Nombre')
    ->leftJoin('empresa', 'oferta.ID_Empresa', '=', 'empresa.ID_Empresa')
    ->leftJoin('rubro', 'empresa.ID_Rubro', '=', 'rubro.ID_Rubro')*/
        ->where('oferta.ID_Oferta', $id)
        ->get();
      //  $data=array();
       // $data['ofertas']=$ofertas;
         // return $ofertas;
         $categoria=Rubro::get();
           return view("admin_e.editaroferta",compact('ofertas','categoria') );
       }








    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }













}
