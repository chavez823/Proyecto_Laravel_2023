<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
/**
 * Class Cupon
 * 
 * @property string $ID_Cupon
 * @property int $DUI
 * @property int $ID_Oferta
 * @property int $ID_Estado_Cupon
 * 
 * @property Cliente $cliente
 * @property Ofertum $ofertum
 * @property EstadoCupon $estado_cupon
 *
 * @package App\Models
 */
class Cupon extends Model
{

    use HasFactory;
	protected $table = 'cupon';
	protected $primaryKey = 'ID_Cupon';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DUI' => 'int',
		'ID_Oferta' => 'int',
		'ID_Estado_Cupon' => 'int'
	];

	protected $fillable = [
		'DUI',
		'ID_Oferta',
		'ID_Estado_Cupon'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'DUI');
	}

	public function ofertum()
	{
		return $this->belongsTo(Categoria::class, 'ID_Oferta');
	}

	public function estado_cupon()
	{
		return $this->belongsTo(EstadoCupon::class, 'ID_Estado_Cupon');
	}


















  

    public function getNombreEmpresa($id=''){

        $empresa = DB::table('oferta')
            ->join('empresa', 'empresa.ID_Empresa', '=', 'oferta.ID_Empresa')
            ->where( 'oferta.ID_Oferta', '=', $id)
            ->select('empresa.ID_Empresa')
            ->get();
        return $empresa;
    }

    public function getDUI($correo){
        
        $sentencia = DB::table('cliente')
            ->join('usuario', 'usuario.ID_Usuario', '=', 'cliente.ID_Usuario')
            ->where( 'cliente.Correo', '=', $correo)
            ->select('cliente.DUI')
            ->get();
        return $sentencia;        
    }

    public function insertar_cupon($ID_Cupon, $DUI,$ID_Oferta, $ID_Estado_Cupon){
        DB::table('cupon')->insert([
            ['ID_Cupon' => $ID_Cupon, 'DUI' => $DUI,'ID_Oferta'=>$ID_Oferta,
            'ID_Estado_Cupon'=>$ID_Estado_Cupon]
        ]);
    }

    /*Para vista *Ver Cupones* */
    /*1-Canjeado*/
    /*2-Sin Canjear*/
    /*3- Vencido*/

    /*Comprados*/
    public function  getCupones($DUI){
        
        $sentencia = DB::table('cupon')
            ->join('cliente', 'cliente.DUI', '=', 'cupon.DUI')
            ->join('oferta', 'oferta.ID_Oferta', '=', 'cupon.ID_Oferta')            
            ->join('estado_cupon', 'estado_cupon.ID_Estado_Cupon', '=', 'cupon.ID_Estado_Cupon')
            ->where( 'cupon.DUI', '=', $DUI)
            //->where('cupon.ID_Estado_Cupon', '=', 2)
            ->select('*')
            ->get();
        return $sentencia;       
    }

   

    public function getCupon($ID_CUPON){

        $sentencia = DB::table('cupon')
        ->join('cliente', 'cliente.DUI', '=', 'cupon.DUI')
        ->join('oferta', 'oferta.ID_Oferta', '=', 'cupon.ID_Oferta')
        ->where( 'cupon.ID_Cupon', '=', $ID_CUPON)
        ->select('*')
        ->get();
        return $sentencia;
    }










}
