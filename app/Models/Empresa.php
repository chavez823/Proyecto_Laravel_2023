<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empresa extends Model
{
    use HasFactory;
    public function insertar_empresa($ID_Empresa, $Nombre,$Direccion, $NombreContacto, $Telefono,$correo,$PorcentajeComision,$ID_Rubro){
        DB::table('empresa')->insert([
            ['ID_Empresa' => $ID_Empresa, 'Nombre' => $Nombre,'Direccion'=>$Direccion,
            'NombreContacto'=>$NombreContacto,'Telefono'=>$Telefono,'correo'=>$correo,'PorcentajeComision'=>$PorcentajeComision,'ID_Rubro'=>$ID_Rubro]
        ]);
    }
}
