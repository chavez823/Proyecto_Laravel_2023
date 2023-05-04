<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 * 
 * @property int $ID_Empleado
 * @property string $ID_Empresa
 * @property int $ID_Usuario
 * @property string $Tipo
 * 
 * @property Usuario $usuario
 * @property Empresa $empresa
 *
 * @package App\Models
 */
class Empleado extends Model
{
	protected $table = 'empleado';
	protected $primaryKey = 'ID_Empleado';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_Empleado' => 'int',
		'ID_Usuario' => 'int'
	];

	protected $fillable = [
		'ID_Empresa',
		'ID_Usuario',
		'Tipo'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'ID_Usuario');
	}

	public function empresa()
	{
		return $this->belongsTo(Empresa::class, 'ID_Empresa');
	}
}
