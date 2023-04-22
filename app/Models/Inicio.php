<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    use HasFactory;

    protected $table="Oferta";
    protected $primaryKey="ID_Oferta";
     protected $autoincrementing = false;


    

    

public function inicio()
{
    
    $sentencia=$this->prepare("SELECT * FROM `oferta` LIMIT 3");
    $sentencia->execute();
    $producto =$tablprepare("select * from users where votes > 100 or (name = 'Abigail' and votes > 50)");
    
    
    
    return $sentencia;
}

    








}
