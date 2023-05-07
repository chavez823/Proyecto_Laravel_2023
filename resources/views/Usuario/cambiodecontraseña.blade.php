<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Contraseña</title>
    
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Poiret+One&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
	  <!--ICONO-->
	  <link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUYIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--Propio-->
    <link rel="stylesheet" href="{{asset('css/style_1.css')}}">
    <link rel="stylesheet" href="{{asset('css/categories.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_login.css')}}">

</head>
<body>
<header>
    <!--Ingresando el nuevo menu-->
    <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #86A3B8;">
      <div class="container-fluid">
         <!--Logo-->
        <a class="navbar-brand" href="buyit">
          <img class="logotipo" src="img/Logo_sin_slogan_t.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/buyit">Inicio</a>
            </li>
          
          </ul> 
        </div>
      </div>
    </nav>
  </header>

  
    <div class="container-login"> 
		<div class="wrap-login"> 
			<form action="/actualizacion" method="post"> 
      @csrf   @method('PATCH')
    
                     
				<!-- LOGO --> 
				<span class="login-form-title">Cambio de contraseña</span> 
				<!--<img class="avatar"src="img/user.svg" alt="" align="center"> -->
                <img class="avatar"src="https://cdn-icons-png.flaticon.com/512/3135/3135789.png" alt="" align="center">
              

					<!-- USUARIO --> 
				<!--<div class="wrap-input100"> 
					<input class="input100" type="text" name="anterior" placeholder="Contraseña Anterior" >	 
					<span class="focus-efecto"></span> 
				</div>-->
				<!-- CONTRASEÑA -->
        @if($errors->any())
                      
                     
                      {!!$errors->first('password','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif
				<div class="wrap-input100"> 
					<input class="input100" type="password" name="password" placeholder="Contraseña nueva" value="{{old('password')}}"> 
					<span class="focus-efecto"></span> 
				</div>
               
                <button class="sesion">
                    Cambiar
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

@extends('templates/footer')


    
</body>
</html>
