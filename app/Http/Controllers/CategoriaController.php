<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 






     public function Ver_belleza(){
        $ofertas=new Categoria();
        $data=array();
        $data['ofertas']=$ofertas->inicio("Belleza");
     
         return view('Menu/pages/Belleza',$data );
     }

     
     public function Ver_salud(){
        $ofertas=new Categoria();
        $data=array();
        $data['ofertas']=$ofertas->inicio("Salud");
     
         return view('Menu/pages/salud',$data );
     }

     public function Ver_super(){
        $ofertas=new Categoria();
        $data=array();
        $data['ofertas']=$ofertas->inicio("Super");
     
         return view('Menu/pages/Super',$data );
     }

     public function Ver_restaurante(){
        $ofertas=new Categoria();
        $data=array();
        $data['ofertas']=$ofertas->inicio("Restaurante");
     
         return view('Menu/pages/Restaurante',$data );
     }

    public function index()
    {
        //

        return view('Menu/pages/Categorias' );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
