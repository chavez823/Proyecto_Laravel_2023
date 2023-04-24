<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cliente extends Model
{
    use HasFactory;

    public function insertarcliente($Dui,$Nombres, $Apellidos,$Contrasenia, $Correo, $Telefono, $Direccion, $Token, $ID_Usuario){
        DB::table('Cliente')->insert([
            ['DUI' => $Dui,'Nombres'=>$Nombres,'Apellidos'=>$Apellidos,'Contrasenia'=>$Contrasenia,'Correo'=>$Correo,'Telefono'=>$Telefono,'Direccion'=>$Direccion,'Token'=>$Token,'ID_Usuario'=>$ID_Usuario]
        ]);
    }

    public function verificacion($Correo, $Token){

  
//DB::update('UPDATE cliente SET Token=$Token WHERE Correo=$Correo');

$setencia=DB::table('Cliente')
//->update('Cliente')
//->Set('Token', $Token)
->where('Correo', $Correo)
->update(['Token', $Token]);
//->get();

return $setencia;









    
    }
    
}
