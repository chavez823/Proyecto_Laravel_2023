<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Oferta
 * 
 * @property int $ID_Oferta
 * @property string $Titulo
 * @property string $Categoria
 * @property int $CantLimite
 * @property string $Descripcion
 * @property string|null $Detalles
 * @property Carbon $FechaInicio
 * @property Carbon $FechaFin
 * @property float $PrecioOriginal
 * @property float $PrecioOferta
 * @property string $Imagen
 * @property string $ID_Empresa
 * @property int $ID_EstadoOferta
 * @property string|null $Justificacion
 * @property Carbon $FechaLimite
 * 
 * @property Empresa $empresa
 * @property EstadoOfertum $estado_ofertum
 * @property Collection|Cupon[] $cupons
 *
 * @package App\Models
 */
class Oferta extends Model
{
    use HasFactory;

   






    protected $table = 'oferta';
	protected $primaryKey = 'ID_Oferta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_Oferta' => 'int',
		'CantLimite' => 'int',
		'FechaInicio' => 'datetime',
		'FechaFin' => 'datetime',
		'PrecioOriginal' => 'float',
		'PrecioOferta' => 'float',
		'ID_EstadoOferta' => 'int',
		'FechaLimite' => 'datetime'
	];

	protected $fillable = [
		'Titulo',
		'Categoria',
		'CantLimite',
		'Descripcion',
		'Detalles',
		'FechaInicio',
		'FechaFin',
		'PrecioOriginal',
		'PrecioOferta',
		'Imagen',
		'ID_Empresa',
		'ID_EstadoOferta',
		'Justificacion',
		'FechaLimite'
	];

	public function empresa()
	{
		return $this->belongsTo(Empresa::class, 'ID_Empresa');
	}

	public function estado_ofertum()
	{
		return $this->belongsTo(EstadoOfertum::class, 'ID_EstadoOferta');
	}

	public function cupons()
	{
		return $this->hasMany(Cupon::class, 'ID_Oferta');
	}
    public function insertOferta($ID_Oferta,$Titulo,$Categoria,$Descripcion,$Detalles,
    $FechaInicio,$FechaFin,$PrecioOriginal,$PrecioOferta,$Imagen,$ID_Empresa,$ID_EstadoOferta){
        DB::table('oferta')->insert([
            ['ID_Oferta' => $ID_Oferta, 
            'Titulo' => $Titulo,
            'Categoria'=>$Categoria,
            
            'Descripcion'=>$Descripcion,
            'Detalles'=>$Detalles,
            'FechaInicio'=>$FechaInicio,
            'FechaFin'=>$FechaFin,
            'PrecioOriginal'=>$PrecioOriginal,
            'PrecioOferta'=>$PrecioOferta,
            'Imagen'=>$Imagen,
            'ID_Empresa'=>$ID_Empresa,
            'ID_EstadoOferta'=>$ID_EstadoOferta,
            'FechaLimite'=>$FechaFin
            ]
        ]);



    }



  










}
