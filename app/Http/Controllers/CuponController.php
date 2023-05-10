<?php

namespace App\Http\Controllers;

use App\Models\Cupon;
use Illuminate\Http\Request;

use Hamcrest\Core\HasToString;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class CuponController extends Controller
{
	
    /**
     * Display a listing of the resource.
     */
	public $correo;
	public  $archivo;

    public function index()
    {
        return view('carrito.Pago_tarjeta');
    }
    public function gracias()
    {
        return view('carrito.Gracias');
    }
    public function compra_completa(Request $request){

        $request->validate([

			'Nombre'=>['required'],
            'Numero'=>['required'],
            'fecha'=>['required'],
            'cvv'=>['required'],
		],
		[
	'Nombre.required'=> 'revisa los datos de tu tarjeta',
	'Numero.required'=> 'revisa los datos de tu tarjeta',
	'fecha.required'=> 'revisa los datos de tu tarjeta',
	'cvv.required'=> 'revisa los datos de tu tarjeta',]
	
	
	);

        

		
                    $model = new Cupon();
                    $productos=$_SESSION['CARRITO'];
                    //echo var_dump($DUI=$model->getDUI(1)[0]->DUI);
                    ob_start(); 
					echo "<!DOCTYPE html>";
					echo "<html lang=\"en\">";
					echo "<head>";
					echo " <meta charset=\"UTF-8\">";
					echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
					echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
					echo "<title>PDF</title>";
					echo "<style>";
					echo ".img1{";
					echo "width: 200px;";
					echo "height: 100px;";
					echo "}";
					echo ".tdb{";
					echo "border: none;";
					echo "}";
					echo ".center {";
					echo "text-align: center;";
					echo "border: 3px solid green;";
					echo "}";
					echo "h1{";
					echo "text-align: center;";
					echo "font-family: \"Lucida Console\, \"Courier New\", monospace;";
					echo "text-decoration: underline;";
					echo "}";
					echo "table {";
					echo "width: 100%;";
					echo "border: none;";
					echo "}";
					echo "th, td {";
					echo "font-family: \"Lucida Console\", \"Courier New\", monospace;";
					echo "width: 25%;";
					echo "text-align: center;";
					echo "vertical-align: top;";
					echo "border: 1px solid #000;";
					echo " border-collapse: collapse;";
					echo "padding: 0.3em;";
					echo "caption-side: bottom;";
					echo "}";
					echo "th {";
					echo "background: #D1F2EB;";
					echo "font-size: 20px;";
					echo "}";
					echo "</style>";
					echo "</head>";
					echo "<body>";
					$nombreImagen = "img/Logo_1.png";//ubicacion de la imagen del logo
					$imagenBase64 =  "data:image/png;base64," .base64_encode(file_get_contents($nombreImagen));//se convierte la imagen del logo a base 64 para que se vea en el detalle
					echo "<img src=".$imagenBase64." class=\"img1\">";
					echo "<h1>Detalle de compra</h1>";
					echo "<br/>";
					echo "<table>";
					echo "<thead>";
					echo "<th>Código</th>";
					echo "<th>Nombre</th>";
					echo "<th>Descripción</th>";
					echo "<th>Precio</th>";
					echo "<th>Codigo Cupon</th>";
					echo "</thead>";
                    $total=0;
					foreach ($_SESSION['CARRITO'] as $cupon) {
						for ($j=0; $j < $cupon['CANTIDAD']; $j++) { 
							echo "<tr>";
							echo "<td>".$cupon['ID']."</td>";
							echo "<td>".$cupon['NOMBRE']."</td>";
							echo "<td>".$cupon['DESCRIPCION']."</td>";
							echo "<td>$ ".$cupon['PRECIO']."</td>";
							$total=$total+$cupon['PRECIO'];
							$num_aleatorio=rand(0,9);
                            $codigo_empresa =$model->getNombreEmpresa($cupon['ID'])[0]->ID_Empresa;
							for ($i=0; $i < 6; $i++) { 
								$num_aleatorio .= rand(0,9);
							}
							$codigo_cupon=$codigo_empresa.$num_aleatorio; 
							echo "<td>".$codigo_cupon."</td>";
							$DUI=$model->getDUI($_SESSION['session']["correo"])[0]->DUI;
							$model->insertar_cupon($codigo_cupon,$DUI,$cupon['ID'], 2);
							echo "</tr>";
						}
					}
                    echo "<tr>";
					echo "<td class=\"tdb\"></td>";
					echo "<td class=\"tdb\"></td>";
					echo "<td class=\"tdb\"></td>";
					echo "<th>Total</th>";
					echo "<td>$".$total."</td>";//para la factura 
					echo "</tr>";
					echo "</table>";
					echo "</body>";
					echo "</html>";
                    $html = ob_get_clean();
                    $pdf = App::make('dompdf.wrapper');
                    srand (time());
                    $rutaGuardado = "pdfs/";
					$nombre_pdf=rand(1,100);
					for ($i=0; $i < 5; $i++) { 
						$nombre_pdf .= rand(1,100);
					}
                    $pdf->loadHTML($html)->save('pdfs/'.$nombre_pdf.'.pdf');
                    //Envio de correo
				
                    $this->archivo = $rutaGuardado.$nombre_pdf.'.pdf';
					$data='Envio del detalle de la compra';
					$this->correo=$_SESSION['session']["correo"];
                    Mail::raw($data, function ($message) {
                        $message->from('yam182141@gmail.com', 'BuyIt');
                        $message->to($this->correo)->cc('bar@example.com');
                        $message->attach($this->archivo);
                    });
                    $_SESSION['CARRITO']=array();
                    redirect()->to('/gracias')->send();


    }


	//Para ver cupones en vista "Ver Cupones"
		public function ver_cupon(){
			//si esta definida 
			//if(!empty($_SESSION['session'])){
			$model = new Cupon();
			$DUI=$model->getDUI($_SESSION['session']["correo"])[0]->DUI;
			$data['cupones'] =$model->getCupones($DUI);
			//echo var_dump($model->getCupones($DUI));
            return view('Compras.compras',$data);
        //}
		}

		
		public function generar_cupon($id_cupon){
					$model = new Cupon();
					$cupon_detalle=$model->getCupon($id_cupon);//se obtiene el cupon mediante el id del cupon pasado por parametro
					//echo var_dump($cupon_detalle);
					ob_start(); 
					echo "<!DOCTYPE html>";
					echo "<html lang=\"en\">";
					echo "<head>";
					echo " <meta charset=\"UTF-8\">";
					echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
					echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
					echo "<title>PDF</title>";
					echo "<style>";
					echo ".img1{";
					echo "width: 200px;";
					echo "height: 100px;";
					echo "}";
					echo ".tdb{";
					echo "border: none;";
					echo "}";
					echo ".center {";
					echo "text-align: center;";
					echo "border: 3px solid green;";
					echo "}";
					echo "h1{";
					echo "text-align: center;";
					echo "font-family: \"Lucida Console\, \"Courier New\", monospace;";
					echo "text-decoration: underline;";
					echo "}";
					echo "table {";
					echo "width: 100%;";
					echo "border: none;";
					echo "}";
					echo "th, td {";
					echo "font-family: \"Lucida Console\", \"Courier New\", monospace;";
					echo "width: 25%;";
					echo "text-align: center;";
					echo "vertical-align: top;";
					echo "border: 1px solid #000;";
					echo " border-collapse: collapse;";
					echo "padding: 0.3em;";
					echo "caption-side: bottom;";
					echo "}";
					echo "th {";
					echo "background: #D1F2EB;";
					echo "font-size: 20px;";
					echo "}";
					echo "</style>";
					echo "</head>";
					echo "<body>";
					$nombreImagen = "img/Logo_1.png";
					$imagenBase64 =  "data:image/png;base64," .base64_encode(file_get_contents($nombreImagen));
					echo "<img src=".$imagenBase64." class=\"img1\">";
					echo "<h1>Cupón</h1>";
					echo "<br/>";
					echo "<table>";
					echo "<thead>";
					echo "<th>Código Cupon</th>";
					echo "<th>Nombre</th>";
					echo "<th>Descripción</th>";
					echo "</thead>";
					foreach ($cupon_detalle as $cupon) {	
							//se imprimen todos los detalles del cupon 
							echo "<tr>";
							echo "<td>".$cupon->ID_Cupon."</td>";
							echo "<td>".$cupon->Titulo."</td>";
							echo "<td>".$cupon->Descripcion."</td>";
					}
					echo "</table>";
					echo "</body>";
					echo "</html>";
					$html = ob_get_clean(); //ob_get_clean captura toda la información y lo amacenamos en una variable
					$pdf = App::make('dompdf.wrapper');
                    srand (time());
                    $rutaGuardado = "pdfs_cupones/";
					$nombre_pdf=rand(1,100);
					for ($i=0; $i < 5; $i++) { 
						$nombre_pdf .= rand(1,100);
					}
                    $pdf->loadHTML($html)->save('pdfs_cupon/'.$nombre_pdf.'.pdf');
					return $pdf->stream();		
		}




    /** PARA LA API *****/
    /* Display the specified resource.*/
    public function show(Cupon $cupon,$id)
    {
        $sentencia=DB::table('cupon')            
            ->join('estado_cupon','estado_cupon.ID_Estado_Cupon','=','cupon.ID_Estado_Cupon')     
            ->select('ID_Cupon','DUI','ID_Oferta','estado_cupon.Estado')
            ->where('ID_Cupon',$id)
            ->get();
            return $sentencia;
    }


    /**
     * Update the specified resource in storage.
     */
	public function update($id,$estado)
    {   
        $sentencia = DB::table('cupon')
                        ->where('ID_Cupon', $id)                                            
                        ->update(['ID_Estado_Cupon' => $estado]);
        return $sentencia;
        
    }


}
