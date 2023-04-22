<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Registro</title>
    <link rel="stylesheet" href="css/style_signup.css">
    <!--link rel="stylesheet" href="../css/style_error.css"-->
    <!--Google Fonst-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Poiret+One&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

 <!--nose de que son link-->
 <!--alertas-->
 <script src="js/alertify.js" type="text/javascript"></script>

	  <!--ICONO-->
	  <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUYIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--Propio-->
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" href="css/categories.css">


</head>
<body>
<header>
    <!--Ingresando el nuevo menu-->
    <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #86A3B8;">
      <div class="container-fluid">
         <!--Logo-->
        <a class="navbar-brand" href="index.php?c=inicio">
          <img class="logotipo" src="img/Logo_sin_slogan_t.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php?c=inicio">Inicio</a>
            </li>
          </ul> 
        </div>
      </div>
    </nav>
  </header>


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
        
				
				<span class="login-form-title">Crear Cuenta</span> 		
                <div class="container_c">
                    <div class="column_1">
                        <!-- Nombre --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="name" placeholder="Nombres" value="<?php if(isset($Nombres)) echo $Nombres?>" >	 
                            <span class="focus-efecto"></span> 
                        </div> 
                        <!--DUI-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="dui" placeholder="DUI" value="<?php if(isset($Dui)) echo $Dui ?>" > 
                            <span class="focus-efecto"></span> 
                        </div> 
                        <!--Direccion-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="direccion" placeholder="Direccion" value="<?php  if(isset($Direccion)) echo $Direccion ?>"> 
                            <span class="focus-efecto"></span> 
                        </div> 
                        <!--contraseña-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="password" name="password" placeholder="Contraseña" value="<?php if(isset($Contrasenia)) echo $Contrasenia ?>"> 
                            <span class="focus-efecto"></span> 
                        </div> 
                    </div>		

                    <div class="column_2">
                        <!-- Apellidos --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="apellido" placeholder="Apellidos" value="<?php if(isset($Apellidos)) echo $Apellidos ?>"> 
                            <span class="focus-efecto"></span> 
                        </div> 	
                         <!--Telefono-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="telefono" placeholder="Telefono" value="<?php if(isset($Telefono)) echo $Telefono  ?>"> 
                            <span class="focus-efecto"></span> 
                        </div>
                         <!--email-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="email" placeholder="Email" value="<?php if(isset($Correo)) echo  $Correo ?>"> 
                            <span class="focus-efecto"></span> 
                        </div> 

                    </div>
                </div>
                <h7>Ya tienes una cuenta</h7><br>
                <h7>Inicia Sesion <a href="index.php?c=usuario">Aqui</a> </h7>	
                <br>
                <button type="submit" name="enviar" class="sesion">
                    Crear Cuenta
                </button>
			</form> 
		</div> 
	</div> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
	<script>
		$(document).ready(function(){
			$(".info .close").click(function(){
				$(this).closest(".info").remove();
			})
		})
	</script>

<?php
    include 'templates/footer.php'
    /*if(preg_match('/^[76][0-9]{7}$/',$Telefono)==true){
      return var_dump(true);
    }
    else{
      var_dump("false");
    }*/
    
  ?>
 
</body>
</html>