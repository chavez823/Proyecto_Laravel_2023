<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Poiret+One&display=swap" rel="stylesheet">
    <!--Bootstrap--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Registrar Nueva Empresa</title>
    <!--css-->
    <link rel="stylesheet" href="css/style_ofer.css">
</head>
<body>
    <header>
        <!--Menu con las plantillas-->
    </header>
    

    <main>
        <!--OJO-->
        <div class="container-login"> 
            
            <!--OJO-->
            <div class="wrap-login"> 
                <form action="index.php?c=cliente&a=nuevo" method="post"> 
                            <?php
                            if(isset($errores)){
                                if(count($errores)>0){
                                    echo "<div class='alert alert-danger'><ul>";
                                    foreach ($errores as $error) {
                                        echo "<li>$error</li>";
                                    }
                                    echo "</ul></div>";
                                }
                            }                        
                        ?>                                

                    <span class="login-form-title">Registrar Nuevo Cupon</span> 
                          		
                    <div class="container_c">                                       
                        <div class="column_1">
                            <!-- ID-oferta -->
                            <!--Puede ser aleatorio--> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="id_oferta" placeholder="Codigo Oferta" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>
                            <!-- Cantidad --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="cantidad" placeholder="Cantidad" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>                               
                            

                            <!-- Fecha Inicio --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="fecha_i" placeholder="Fecha Inicio (dd/mm/yyyy)" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!-- Precio Original --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="precio_inicial" placeholder="Precio Original" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            
                            
                            <!-- Estado oferta -->
                            <!-- Llenado a partir de un modelo -->                             
                            <div class="wrap-input100">                                
                                <select class="input100 s_ele"  >
                                    <option class="input100" value="" disabled>Estado de la oferta</option>
                                    <span class="focus-efecto"></span>
                                    <option class="input100" value="1">En espera</option>
                                    <span class="focus-efecto"></span>
                                    <option class="input100" value="2">Aprobado</option>
                                    <span class="focus-efecto"></span>
                                    <option class="input100" value="3">Descartado</option>
                                    <span class="focus-efecto"></span>
                                    
                                </select>

                            </div>                                             
                        </div>                     	

                        <div class="column_2">
                            <!-- Titulo --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="titulo" placeholder="Titulo Oferta" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!-- Descripcion --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="descrip" placeholder="Descripcion" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!-- Fecha Final --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="fecha_f" placeholder="Fecha Final (dd/mm/yyyy)" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>
                            <!-- Precio oferta --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="precio_o" placeholder="Precio Oferta" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!-- imagen --> 
                            <div class="wrap-input100"> 
                                <input class="input100" name="imagen" type="file"> 
                                <span class="focus-efecto"></span>
                            </div>
                            

                        </div>

                        <div class="column_3">

                            <!-- Detalles --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="detalles" placeholder="Detalles de Oferta" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!-- ID-Empresa --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="id_empresa" placeholder="Codigo Empresa" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>
                            

                            <!-- Fecha Limite --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="fecha_limite" placeholder="Fecha Limite (dd/mm/yyyy)" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            
                            

                            <!--Rubro - Categoria -->
                            <div class="wrap-input100"> 
                                <select class="input100 s_ele"  >
                                    <option class="input100" value="" disabled>Rubro</option>
                                    <span class="focus-efecto"></span>
                                    <option class="input100" value="Salud">Salud</option>
                                    <span class="focus-efecto"></span>
                                    <option class="input100" value="Belleza">Belleza</option>
                                    <span class="focus-efecto"></span>
                                    <option class="input100" value="Mecanica">Mecanica</option>
                                    <span class="focus-efecto"></span>
                                    
                                </select>

                            </div>

                            

                            <!-- Justificacion --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="justifica" placeholder="Justificacion" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>
                            
                            


                        </div>
                    </div>                    
                    <button type="submit" name="enviar" class="sesion">
                        Registrar Cupon
                    </button>
                </form> 
            </div> 
        </div>
    </main>


</body>
</html>