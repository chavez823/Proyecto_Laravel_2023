<?php

namespace App\Http\Controllers;
use App\Models\Rubro;
use App\Models\Oferta;
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
        $rubros=Rubro::get();
        $data=array();
        $data['rubros']=$rubros;
        return view('admin_e.nuevo_cupon',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*@dump($request->titulo);
        @dump($request->cantidad);
        @dump($request->descrip);
        @dump($request->detalles);
        @dump($request->fecha_i);
        @dump($request->fecha_f);
        @dump($request->precio_inicial);
        @dump($request->precio_o);
        @dump($request->fecha_limite);
        @dump($_FILES['imagen']['name'][0]);
        @dump($_FILES['imagen']['tmp_name'][0]);
        @dump($_FILES['imagen']);
        @dump($_SESSION['id_empresa']);*/
        $ID_Oferta=rand(1,100);
		for ($i=0; $i < 2; $i++) { 
		    $ID_Oferta .= rand(1,100);
		}
        $oferta= new Oferta();
        $oferta->insertOferta(
        $ID_Oferta,
        $request->titulo,
        $request->rubro,
        $request->cantidad,
        $request->descrip,
        $request->detalles,
        $request->fecha_i,
        $request->fecha_f,
        $request->precio_inicial,
        $request->precio_o,
        $request->imagen,
        $_SESSION['id_empresa'],
        '1',
        $request->fecha_limite);
        return view("admin_e.menu_ad");
  
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $request->validate([

        'name' => 'required',
        'descripcion'=> 'required',
        'detalles'=> 'required',
        'categ'=> 'required',
        'precio_o'=> 'required',
        'cod_o'=> 'required',
        'fecha_i'=> 'required',
        'fecha_f'=> 'required',
        'precio_ofer'=> 'required',
      ]);

$ofertas=/*DB::table('oferta')*/Oferta::
/*->select('oferta.*', 'cupon.*')
->*//*leftJoin('cupon', 'cupon.ID_Oferta', '=', 'oferta.ID_Oferta')->*/where('oferta.ID_Oferta', $id)
->update(['oferta.ID_Oferta' =>$request->cod_o, /*'cupon.ID_Oferta' =>$request->cod_o,*/ 'oferta.Descripcion'=> $request->descripcion, 'oferta.Titulo' =>$request->name, 'oferta.Detalles' =>$request->detalles,  'oferta.Categoria' =>$request->categ, 'oferta.FechaInicio' =>$request->fecha_i,'oferta.FechaFin' =>$request->fecha_f, 'oferta.PrecioOriginal' =>$request->precio_o, 'oferta.PrecioOferta' =>$request->precio_ofer, 'oferta.ID_EstadoOferta' => '1', 'oferta.FechaLimite' =>$request->fecha_f,]);
redirect()->to('/Empresa/menuadmin')->send();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ofertas=Oferta::where('ID_Oferta', $id)->update(['oferta.ID_EstadoOferta' => '6']);
       // return redirect()->back();
       redirect()->to('/Empresa/menuadmin')->send();
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












}
