<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cupon extends Model
{
    use HasFactory;

    public function getNombreEmpresa($id=''){

        $empresa = DB::table('oferta')
            ->join('empresa', 'empresa.ID_Empresa', '=', 'oferta.ID_Empresa')
            ->where( 'oferta.ID_Oferta', '=', $id)
            ->select('empresa.ID_Empresa')
            ->get();
        return $empresa;
    }

    public function getDUI($id=''){
        
        $sentencia = DB::table('cliente')
            ->join('usuario', 'usuario.ID_Usuario', '=', 'cliente.ID_Usuario')
            ->where( 'cliente.ID_Usuario', '=', $id)
            ->select('cliente.DUI')
            ->get();
        return $sentencia;        
    }

    public function insertar_cupon($ID_Cupon, $DUI,$ID_Oferta, $ID_Estado_Cupon){
        DB::table('cupon')->insert([
            ['ID_Cupon' => $ID_Cupon, 'DUI' => $DUI,'ID_Oferta'=>$ID_Oferta,'ID_Estado_Cupon'=>$ID_Estado_Cupon]
        ]);
    }
    public function  getCupones($DUI){
        
        $sentencia = DB::table('cupon')
            ->join('cliente', 'cliente.DUI', '=', 'cupon.DUI')
            ->join('oferta', 'oferta.ID_Oferta', '=', 'cupon.ID_Oferta')
            ->where( 'cupon.DUI', '=', $DUI)
            ->select('*')
            ->get();
        return $sentencia;       
    }
    public function getCupon($ID_CUPON){

        $sentencia = DB::table('cupon')
        ->join('cliente', 'cliente.DUI', '=', 'cupon.DUI')
        ->join('oferta', 'oferta.ID_Oferta', '=', 'cupon.ID_Oferta')
        ->where( 'cupon.ID_Cupon', '=', $ID_CUPON)
        ->select('*')
        ->get();
        return $sentencia;
    }










}
