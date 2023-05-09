<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Oferta extends Model
{
    use HasFactory;

    public function insertOferta($ID_Oferta,$Titulo,$Categoria,$CantLimite,$Descripcion,$Detalles,
    $FechaInicio,$FechaFin,$PrecioOriginal,$PrecioOferta,$Imagen,$ID_Empresa,$ID_EstadoOferta,$FechaLimite){
        DB::table('oferta')->insert([
            ['ID_Oferta' => $ID_Oferta, 
            'Titulo' => $Titulo,
            'Categoria'=>$Categoria,
            'CantLimite'=>$CantLimite,
            'Descripcion'=>$Descripcion,
            'Detalles'=>$Detalles,
            'FechaInicio'=>$FechaInicio,
            'FechaFin'=>$FechaFin,
            'PrecioOriginal'=>$PrecioOriginal,
            'PrecioOferta'=>$PrecioOferta,
            'Imagen'=>$Imagen,
            'ID_Empresa'=>$ID_Empresa,
            'ID_EstadoOferta'=>$ID_EstadoOferta,
            'FechaLimite'=>$FechaLimite
            ]
        ]);



    }

}
