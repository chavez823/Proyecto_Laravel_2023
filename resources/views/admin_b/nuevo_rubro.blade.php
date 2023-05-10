<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Icono-->
    <link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Poiret+One&display=swap" rel="stylesheet">
    <!--Bootstrap--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Registrar Nueva Rubro</title>
    <!--css-->
    <link rel="stylesheet" href="{{asset('css/n_rubro.css')}}">
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
                <form action="/rubro/crear" method="post"> 
                @csrf
                    <span class="login-form-title">Registrar Rubro</span>                           		
                    <div class="container_c">                                       
                        <!-- Nombre Rubro --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="name_rubro" placeholder="Nombre Rubro" value="{{old('name_rubro')}}"> 
                            <span class="focus-efecto"></span> 
                            @if($errors->any())                                           
                            {!!$errors->first('name_rubro','<p class="alert alert-danger" role="role">:message</p>' )!!}                      
                            @endif  
                        </div>                                            
                        
                    </div>                    
                    <button type="submit" name="enviar" class="sesion">
                        Registrar Rubro
                    </button>
                </form> 
            </div> 
        </div>
    </main>


</body>
</html>