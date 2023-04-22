<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuario extends Model
{
    use HasFactory;

   // protected $table="Usuario";
    protected $primaryKey="ID_Usuario";
     
   
   public function sesion($Correo, $Contrasenia){

        $sentencia=DB::table('Usuario')
            ->select('*')
            ->Where('Correo', '=', $Correo, 'AND', 'Contrasenia', '=', $Contrasenia )
            ->get();
         return $sentencia;

        /* $sentencia = DB::table('Usuario')->where('Correo', $Correo)->first();
         return $sentencia;*/



    
      }
}
