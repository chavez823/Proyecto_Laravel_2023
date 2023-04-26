<?php

/*namespace App\Models;

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

/*public function insertarusuario($Contrasenia,$Correo,$ID_Usuario,$Nombres, $Apellidos,$Tipo ){
    DB::table('Usuario')->insert([
        ['Nombres'=>$Nombres,'Apellidos'=>$Apellidos,'Contrasenia'=>$Contrasenia,'Correo'=>$Correo,'ID_Usuario'=>$ID_Usuario,'Tipo'=>$Tipo ]

    ]);

}*/

    
    //  }*/
//}


/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

/**
 * Class Usuario
 * 
 * @property int $ID_Usuario
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Contrasenia
 * @property string $Correo
 * @property string $Tipo
 * 
 * @property Collection|Cliente[] $clientes
 * @property Collection|Empleado[] $empleados
 *
 * @package App\Models
 */
class Usuario extends Model
{
	use HasFactory;

	protected $table = 'usuario';
	protected $primaryKey = 'ID_Usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_Usuario' => 'int'
	];

	protected $fillable = [
		'ID_Usuario',
		'Nombres',
		'Apellidos',
		'Contrasenia',
		'Correo',
		'Tipo'
	];


public function insertarusuario($Contrasenia,$Correo,$ID_Usuario,$Nombres, $Apellidos,$Tipo ){
    DB::table('Usuario')->insert([
        ['Nombres'=>$Nombres,'Apellidos'=>$Apellidos,'Contrasenia'=>$Contrasenia,'Correo'=>$Correo,'ID_Usuario'=>$ID_Usuario,'Tipo'=>$Tipo ]

    ]);

}

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'ID_Usuario');
	}

	public function empleados()
	{
		return $this->hasMany(Empleado::class, 'ID_Usuario');
	}
}
