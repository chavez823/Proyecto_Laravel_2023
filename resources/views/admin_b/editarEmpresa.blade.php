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
    <link rel="stylesheet" href="{{asset('css/style_emp.css')}}">
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
                <form action="/Empresa/update/<?php echo $empresa[0]->ID_Empresa?>" method="post"> 
                    @csrf
                    @method('PUT')
                            <?php
                            /*if(isset($errores)){
                                if(count($errores)>0){
                                    echo "<div class='alert alert-danger'><ul>";
                                    foreach ($errores as $error) {
                                        echo "<li>$error</li>";
                                    }
                                    echo "</ul></div>";
                                }
                            }      */                  
                        ?>                                

                    <span class="login-form-title">Actualizar Empresa</span> 
                          		
                    <div class="container_c">                                       
                        <div class="column_1">
                            <!-- Nombre --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="name" placeholder="Nombre Empresa" value="{{@old('name',$empresa[0]->Nombre)}}" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!-- Direccion --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="direccion" placeholder="Direccion" value="{{@old('direccion',$empresa[0]->Direccion)}}" >	 
                                <span class="focus-efecto"></span> 
                            </div> 

                            <!--Telefono del Representante-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="telefono" placeholder="Telefono" value="{{@old('telefono',$empresa[0]->Telefono)}}" >	 
                                <span class="focus-efecto"></span> 
                            </div>
                            
                            <!--Rubro-->
                            <div class="wrap-input100"> 
                                <!--<input class="input100" type="text" name="rubro" placeholder="Rubro" value="<?php //Aqui ira el isset para los valores?>"> 
                                <span class="focus-efecto"></span>-->
                                <select class="input100 s_ele"  >
                                    <option class="input100" value="Salud">Salud</option>
                                    <span class="focus-efecto"></span>
                                    <option class="input100" value="Belleza">Belleza</option>
                                    <span class="focus-efecto"></span>
                                    <option class="input100" value="Mecanica">Mecanica</option>
                                    <span class="focus-efecto"></span>
                                    
                                </select>

                            </div>
                            
                        </div>		

                        <div class="column_2">
                            <!-- Codigo Empresa --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="cod_empo" placeholder="Codigo Empresa" value="{{@old('cod_empo',$empresa[0]->ID_Empresa)}}" disabled> 
                                <span class="focus-efecto"></span> 
                            </div>
                            <!--Representante empresa-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="name_r" placeholder="Nombre Representante" value="{{@old('name_r',$empresa[0]->NombreContacto)}}"> 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!--Correo representante-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="correo" placeholder="Correo" value="{{@old('correo',$empresa[0]->Correo)}}"> 
                                <span class="focus-efecto"></span> 
                            </div>
                            
                            <!--Porcentaje Comision-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="porcet" placeholder="Porcentaje Comision" value="{{@old('porcet',$empresa[0]->PorcentajeComision)}}"> 
                                <span class="focus-efecto"></span> 
                            </div>

                        </div>
                    </div>                    
                    <button type="submit" name="enviar" class="sesion">
                        Actualizar Empresa
                    </button>
                </form> 
            </div> 
        </div>
    </main>


</body>
</html>