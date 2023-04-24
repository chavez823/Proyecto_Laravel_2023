<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuario extends Model
{
    use HasFactory;

    protected $table="Usuario";
    protected $primaryKey="ID_Usuario";
     
   
   //public function sesion($usuario){

        /*$sentencia=DB::table('Usuario')
            ->select('*')
            ->Where('Correo', '=', $Correo, 'AND', 'Contrasenia', '=', $Contrasenia )
            ->post();
         return $sentencia;

        /* $sentencia = DB::table('Usuario')->where('Correo', $Correo)->first();
         return $sentencia;*/

     /*  $sentencia= DB::select('SELECT * FROM Usuario WHERE Correo = :Correo', $usuario);

*/

public function insertarusuario($Contrasenia,$Correo,$ID_Usuario,$Nombres, $Apellidos,$Tipo ){
    DB::table('Usuario')->insert([
        ['Nombres'=>$Nombres,'Apellidos'=>$Apellidos,'Contrasenia'=>$Contrasenia,'Correo'=>$Correo,'ID_Usuario'=>$ID_Usuario,'Tipo'=>$Tipo ]

    ]);

}

    
    //  }*/
}
