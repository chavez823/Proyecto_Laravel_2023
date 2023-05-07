<?php

namespace App\Http\Controllers;

use App\Models\Rubro;
use Illuminate\Http\Request;

class RubroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view("admin_b.nuevo_rubro");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       $request->validate([
        'name_rubro' => 'required|string',

       ]); 


      $id=substr(number_format(time() * rand(), 0, '', ''), 0, 6);
      $rubro = Rubro::insert(['ID_Rubro'=>$id, 'Nombre'=>$request->name_rubro]);
      redirect()->to('/Empresa')->send();

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
    public function show(Rubro $rubro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rubro $rubro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rubro $rubro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rubro $rubro)
    {
        //
    }
}
