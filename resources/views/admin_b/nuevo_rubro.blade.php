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
    <div class="btn_back">
        <a href="http://127.0.0.1:8000/Empresa"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-left" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="12" x2="14" y2="12" />
            <line x1="4" y1="12" x2="8" y2="16" />
            <line x1="4" y1="12" x2="8" y2="8" />
            <line x1="20" y1="4" x2="20" y2="20" />
          </svg></a>
</div>
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