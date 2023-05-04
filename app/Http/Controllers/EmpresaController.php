<?php

namespace App\Http\Controllers;

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
        @dump($request->name);
        @dump($request->direccion);
        @dump($request->telefono);
        @dump($request->cod_empo);
        @dump($request->name_r);
        @dump($request->correo);
        @dump($request->porcet);
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
