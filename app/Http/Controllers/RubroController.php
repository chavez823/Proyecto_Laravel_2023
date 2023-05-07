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
     * Show the form for editing the specified resource.
     */
    public function edit()
    {

  $rubros=Rubro::get();


  $data=array();
  $data['rubros']=$rubros;


      return view("admin_b.listarubros",$data );
    }

    public function vereditar(string $id )
    {
        $rubros=Rubro::Where('ID_Rubro',$id)->get();
        $data=array();
        $data['rubros']=$rubros;
        return view("admin_b.editarrubro",$data );
    }



 /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
'name'=>'required',
'id'=>'required',

        ]);

        $rubro=Rubro::where('ID_Rubro',$id )->update(['ID_Rubro' => $request->id, 'Nombre' => $request->name  ]);
        redirect()->to('/Empresa')->send();











    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

    {
        $rubro = Rubro::where('ID_Rubro',$id )->delete();
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

   
   
}
