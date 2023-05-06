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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('autor.edit');
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
