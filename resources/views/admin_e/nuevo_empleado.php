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
            <div class="wrap-login_"> 
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

                    <span class="login-form-title">Registrar Empleado</span> 
                          		
                    <div class="c_">
                        <div class="c_ol">
                         <!-- Nombre --> 
                         <div class="wrap-input100"> 
                                <input class="input100" type="text" name="name_em" placeholder="Nombre" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>                            
                            <!-- Correo --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="correo" placeholder="Correo" value="<?php //if(isset($Nombres)) echo $Nombres?>" >	 
                                <span class="focus-efecto"></span> 
                            </div>
                            <!-- Apellido --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="apellido" placeholder="Apellido" value="<?php //Aqui ira el isset para los valores?>"> 
                                <span class="focus-efecto"></span> 
                            </div>                                            
                        </div>

                    </div>                    
                    <button type="submit" name="enviar" class="sesion_">
                        Registrar Rubro
                    </button>
                </form> 
            </div> 
        </div>
    </main>


</body>
</html>