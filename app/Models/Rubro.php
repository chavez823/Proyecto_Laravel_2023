<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rubro
 * 
 * @property int $ID_Rubro
 * @property string $Nombre
 * 
 * @property Collection|Empresa[] $empresas
 *
 * @package App\Models
 */
class Rubro extends Model
{
	protected $table = 'rubro';
	protected $primaryKey = 'ID_Rubro';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_Rubro' => 'int'
	];

	protected $fillable = [
		'Nombre'
	];

	public function empresas()
	{
		return $this->hasMany(Empresa::class, 'ID_Rubro');
	}
}
