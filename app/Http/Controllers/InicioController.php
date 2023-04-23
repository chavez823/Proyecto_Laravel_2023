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
                redirect()->to('Categoria/belleza')->send();
            }else if($vista=='3'){
                redirect()->to('Categoria/restaurante')->send();
            }else if($vista=='4'){
                redirect()->to('Categoria/salud')->send();
            }else if($vista=='5'){
                redirect()->to('Categoria/super')->send();
            }
            else{
                redirect()->to('carrito')->send();
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
                if($vista==1){
                    redirect()->to('/')->send();
                }else if($vista=='2'){
                    redirect()->to('Categoria/belleza')->send();
                }else if($vista=='3'){
                    redirect()->to('Categoria/restaurante')->send();
                }else if($vista=='4'){
                    redirect()->to('Categoria/salud')->send();
                }else if($vista=='5'){
                    redirect()->to('Categoria/super')->send();
                }
                else{
                    redirect()->to('carrito')->send();
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
            if($vista==1){
                redirect()->to('/')->send();
            }else if($vista=='2'){
                redirect()->to('Categoria/belleza')->send();
            }else if($vista=='3'){
                redirect()->to('Categoria/restaurante')->send();
            }else if($vista=='4'){
                redirect()->to('Categoria/salud')->send();
            }else if($vista=='5'){
                redirect()->to('Categoria/super')->send();
            }
            else{
                redirect()->to('carrito')->send();
            }
            }
            
        }


    }
    public function delete($ID){
                //Aqui se define cada objeto del carrito mediante del indice
                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                    if($producto['ID']==$ID){//cuando el indice en el arreglo del carrito coicide con el que se paso por parametro se procede a la eliminacion
                        //un vaciado dependiendo el id de oferta 
                        unset($_SESSION['CARRITO'][$indice]);
                        //echo "<script>alert('Elemento borrado...');</script>";
                    }
                }
                redirect()->to('carrito')->send();
        }
        public function restar($ID, $CANTIDAD=1){
            
            $carro=$_SESSION['CARRITO'];//almacenamos el arreglo del carrito en la variable carro para poder comparar los elementos
            foreach ($carro as $indice => $producto) {
            if($producto['ID']==$ID){//cuando el ID coicida con el indice pasado por parametro 
                $identificador=$indice;//se guarda el indice 
                $cantidadActual=$producto['CANTIDAD'];//se guarda la cantidad actual
                }
            }
            if($cantidadActual==1){
                unset($_SESSION['CARRITO'][$identificador]);//si la cantidad corresponde a 1 se elimina el elemento
            }
            else{
                $carro[$identificador]['CANTIDAD'] -= $CANTIDAD;//si es mayor a uno solo se resta un elementos
                $_SESSION['CARRITO']=$carro; //el arreglo carro se alamcena en la variable de sesion del carrito
            }
            redirect()->to('carrito')->send();
}
  

    public function ver_carrito(){

        return view('Menu/pages/mostrarCarrito' );
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
