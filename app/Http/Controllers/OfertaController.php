<?php

namespace App\Http\Controllers;
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
