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
