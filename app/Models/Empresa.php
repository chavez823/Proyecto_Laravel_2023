<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empresa extends Model
{
    use HasFactory;
    public function getEmpresas($id=''){
        if($id == '')
        {
        $sentencia=DB::table('empresa')
            ->select('*')
            ->get();
           
        }else{
            $sentencia=DB::table('empresa')
            ->where('ID_Empresa','=',$id)
            ->select('*')
            ->get();
        }
        return $sentencia;
        
    }
    public function insertar_empresa($ID_Empresa, $Nombre,$Direccion, $NombreContacto, $Telefono,$correo,$PorcentajeComision,$ID_Rubro){
        DB::table('empresa')->insert([
            ['ID_Empresa' => $ID_Empresa, 'Nombre' => $Nombre,'Direccion'=>$Direccion,
            'NombreContacto'=>$NombreContacto,'Telefono'=>$Telefono,'correo'=>$correo,'PorcentajeComision'=>$PorcentajeComision,'ID_Rubro'=>$ID_Rubro]
        ]);
    }
    public function actualizar_empresa($ID_Empresa, $Nombre,$Direccion, $NombreContacto, $Telefono,$correo,$PorcentajeComision,$ID_Rubro){
             DB::table('empresa')
            ->where('ID_Empresa','=',$ID_Empresa)
            ->update([
            'Nombre' => $Nombre,'Direccion'=>$Direccion,
            'NombreContacto'=>$NombreContacto,'Telefono'=>$Telefono,'correo'=>$correo,'PorcentajeComision'=>$PorcentajeComision,'ID_Rubro'=>$ID_Rubro]);
    }
    public function eliminar_empresa($ID_Empresa){
        DB::table('empresa')
       ->where('ID_Empresa','=',$ID_Empresa)
       ->delete();
    }
    public function getOfertasNuevas(){
        $sentencia=DB::table('oferta')
            ->select('*')
            ->where('ID_EstadoOferta','=','1')
            ->get();
        return $sentencia;
    }
    public function getOfertasVerificadas(){
        $sentencia=DB::table('oferta')
            ->join('estado_oferta', 'oferta.ID_EstadoOferta', '=', 'estado_oferta.ID_EstadoOferta')
            ->select('*')
            ->where('oferta.ID_EstadoOferta','NOT LIKE','1')
            ->get();
        return $sentencia;
    }
    public function changeEstado($Jutificacion='',$ID_Oferta,$id){
        DB::table('oferta')
        ->where('ID_Oferta','=',$ID_Oferta)
        ->update(['ID_EstadoOferta' => $id,
                   'Justificacion' => $Jutificacion ]);
    }
    public function getOferta($ID_Oferta){
        $sentencia=DB::table('oferta')
        ->select('*')
        ->where('ID_Oferta','=',$ID_Oferta)
        ->get();
        return $sentencia;
    }
}
