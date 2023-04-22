<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
      //  $productos=::all();
      //;
		//$data["Ofertas"] = $productos->get_inicio();
       // $inicio= new Inicio();
       // $data = $inicio->get_inicio();
       $ofertas=new Inicio;
       $data=array();
       $data['ofertas']=$ofertas->inicio();
        return view('Menu.buyit',$data);
    }
    public function carrito($id,$vista='')
    {
        $inicio = new Inicio();
        $promo=$inicio->get_promo($id);
        
        
        $ID=$id;
		$NOMBRE=$promo[0]->Titulo;
	    $DESCRIPCION=$promo[0]->Descripcion;
		$IMAGEN=$promo[0]->Imagen;
		$PRECIO=$promo[0]->PrecioOferta;
        
        if(!isset($_SESSION['CARRITO'])){ //SI NO EXITE NADA EN EL CARRITO
            $elemento=array(//CAPTURAMOS LOS DATOS DEL FORMULARIO
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'DESCRIPCION'=>$DESCRIPCION,
                'CANTIDAD'=>1,
                'IMAGEN'=>$IMAGEN,
                'PRECIO'=>$PRECIO
            );
            $_SESSION['CARRITO'][0]=$elemento; //la oferta elegida se almacena en la primera posicion del arreglo
            //Dependiendo desde que categoria se agregue al carrito se direccionara a la vista correspondiente
            //array 
            if($vista=='1')
            {
                redirect()->to('/')->send();
            }else if($vista=='2'){
                echo "aqui estoy 2";
            }else if($vista=='3'){
                echo "aqui estoy 3";
            }else if($vista=='4'){
                echo "aqui estoy 4";
            }else if($vista=='5'){
                echo "aqui estoy 5";
            }
            else{
                echo "aqui estoy 6";
            }
        }else{ 
            
            $IdProductos=array_column($_SESSION['CARRITO'],"ID"); 
            //array column deposita todos los ids que estan en el carrito de compras
            //in array verifica que si el ID de la oferta elegida esta en el arreglo IdProductos 
            if(in_array($ID,$IdProductos)){
                $carro=$_SESSION['CARRITO'];
                $codigo_producto=$ID;
                foreach ($carro as $indice => $oferta) {
                if($oferta['ID']==$codigo_producto){//recorre todo el arreglo del carrito y cuando encuentra que los ID conciden modifica el valor de la cantidad en el indice que encontro la coincidencia
                    $carro[$indice]['CANTIDAD'] += 1;
                }
            }
                $_SESSION['CARRITO']=$carro;
                //cargando la vista de ofertas
                //echo var_dump($_SESSION['CARRITO']);
                if($vista==''){
                    echo "aqui estoy";
                }else if($vista=='2'){
                    echo "aqui estoy";
                }else if($vista=='3'){
                    echo "aqui estoy";
                }else if($vista=='4'){
                    echo "aqui estoy";
                }else if($vista=='5'){
                    echo "aqui estoy";
                }
                else{
                    echo "aqui estoy";
                }

            }else{
                //SI YA HAY 1 PRODUCTO EN EL CARRITO 
                //echo var_dump($_SESSION['CARRITO']);
            $numeroProductos=count($_SESSION['CARRITO']);//NUMERO DE ELEMENTOS EN CARRITO
            $elemento=array(//CAPTURAMOS LOS DATOS DEL FORMULARIO
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'DESCRIPCION'=>$DESCRIPCION,
                'CANTIDAD'=>1,
                'IMAGEN'=>$IMAGEN,
                'PRECIO'=>$PRECIO
            );
            //Se almacena la oferta segun el numero de ofertas que estan actualmente en el carrito
            $_SESSION['CARRITO'][$numeroProductos]=$elemento;
            //cargando la vista de ofertas
            if($vista==''){
                echo "aqui estoy";
            }else if($vista=='2'){
                echo "aqui estoy";
            }else if($vista=='3'){
                echo "aqui estoy";
            }else if($vista=='4'){
                echo "aqui estoy";
            }else if($vista=='5'){
                echo "aqui estoy";
            }
            else{
                echo "aqui estoy";
            }
            }
            
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inicio $inicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inicio $inicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inicio $inicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inicio $inicio)
    {
        //
    }
}
