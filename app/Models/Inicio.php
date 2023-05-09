<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnCallback;

class Inicio extends Model
{
    use HasFactory;

    protected $table="Oferta";
    protected $primaryKey="ID_Oferta";
    // protected $autoincrementing = false;


public function inicio()
{
    $sentencia=DB::table('oferta')
            ->select('*')
            ->limit(3)
            ->get();
    return $sentencia;
    
    
}

public function get_promo($id='')
		{
            $sentencia=DB::table('oferta')
            ->select('*')
            ->where('ID_Oferta', $id)
            ->get();
            return $sentencia;

		}

public function estadoVencido(){

    return "Aqui estoy";
}

    








}
