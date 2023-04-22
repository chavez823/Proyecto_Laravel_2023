<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Categoria extends Model
{
    use HasFactory;

    public function inicio($Categoria)
{
    $sentencia=DB::table('oferta')
            ->select('*')
            ->where('Categoria', $Categoria )
            ->get();
    return $sentencia;
    
    
}



}
