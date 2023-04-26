<?php

/*namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cliente extends Model
{
    use HasFactory;

    protected $table='Cliente';

    public function insertarcliente($Dui,$Nombres, $Apellidos,$Contrasenia, $Correo, $Telefono, $Direccion, $Token, $ID_Usuario){
        DB::table('Cliente')->insert([
            ['DUI' => $Dui,'Nombres'=>$Nombres,'Apellidos'=>$Apellidos,'Contrasenia'=>$Contrasenia,'Correo'=>$Correo,'Telefono'=>$Telefono,'Direccion'=>$Direccion,'Token'=>$Token,'ID_Usuario'=>$ID_Usuario]
        ]);
    }

  
    
}*/

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;



/**
 * Class Cliente
 * 
 * @property int $DUI
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Contrasenia
 * @property string $Correo
 * @property string $Telefono
 * @property string $Direccion
 * @property string $Token
 * @property int $ID_Usuario
 * 
 * @property Usuario $usuario
 * @property Collection|Cupon[] $cupons
 *
 * @package App\Models
 */
class Cliente extends Model
{  use HasFactory;
	protected $table = 'cliente';
	protected $primaryKey = 'DUI';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DUI' => 'int',
		'ID_Usuario' => 'int'
	];

	protected $fillable = [
		'DUI',
		'Nombres',
		'Apellidos',
		'Contrasenia',
		'Correo',
		'Telefono',
		'Direccion',
		'Token',
		'ID_Usuario'
	];



    public function insertarcliente($Dui,$Nombres, $Apellidos, $Correo, $Telefono, $Direccion, $ID_Usuario,$Token){
        DB::table('Cliente')->insert([
            ['DUI' => $Dui,'Nombres'=>$Nombres,'Apellidos'=>$Apellidos,'Correo'=>$Correo,'Telefono'=>$Telefono,'Direccion'=>$Direccion,'ID_Usuario'=>$ID_Usuario, 'Token'=>$Token]
        ]);
    }

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'ID_Usuario');
	}

	public function cupons()
	{
		return $this->hasMany(Cupon::class, 'DUI');
	}
}

