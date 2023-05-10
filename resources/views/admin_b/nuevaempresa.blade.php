<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Icono-->
    <link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">
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
                <form action="/Empresa/create" method="post"> 
                    @csrf       
                    @if(Session::has('errorlo'))
                        <div class='alert alert-danger' role='role'>
                          {{session::get('errorlo')}}
                        </div>
                    @endif
                    @if($errors->all())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
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

                    <span class="login-form-title">Registrar Empresa</span> 
                          		
                    <div class="container_c">                                       
                        <div class="column_1">
                            <!-- Nombre --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="name" placeholder="Nombre Empresa" value="{{@old('name')}}" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!-- Direccion --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="direccion" placeholder="Direccion" value="{{@old('direccion')}}" >	 
                                <span class="focus-efecto"></span> 
                            </div> 

                            <!--Telefono del Representante-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="telefono" placeholder="Telefono" value="{{@old('telefono')}}" >	 
                                <span class="focus-efecto"></span> 
                            </div>
                            
                            <!--Rubro-->
                            <div class="wrap-input100"> 
                                <!--<input class="input100" type="text" name="rubro" placeholder="Rubro" value="<?php //Aqui ira el isset para los valores?>"> 
                                <span class="focus-efecto"></span>-->
                                <select class="input100 s_ele" name="rubro" >
                                    <option class="input100" value="Salud">Salud</option>
                                    <span class="focus-efecto"></span>
                                    @foreach ($rubros as $rubro)
                                        <option class="input100" value="{{$rubro->Nombre_Rubro}}" {{old('rubro')==$rubro->Nombre_Rubro?'selected':''}} >
                                        {{$rubro->Nombre_Rubro}}
                                        </option>
                                        <span class="focus-efecto"></span>   
                                    @endforeach  
                                </select>

                            </div>
                            
                        </div>		

                        <div class="column_2">
                            <!-- Codigo Empresa --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="cod_empo" placeholder="Codigo Empresa" value="{{@old('cod_empo')}}"> 
                                <span class="focus-efecto"></span> 
                            </div>
                            <!--Representante empresa-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="name_r" placeholder="Nombre Representante" value="{{@old('name_r')}}"> 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!--Correo representante-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="correo" placeholder="Correo" value="{{@old('correo')}}"> 
                                <span class="focus-efecto"></span> 
                            </div>
                            
                            <!--Porcentaje Comision-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="porcet" placeholder="Porcentaje Comision" value="{{@old('porcet')}}"> 
                                <span class="focus-efecto"></span> 
                            </div>

                        </div>
                    </div>                    
                    <button type="submit" name="enviar" class="sesion">
                        Registrar Empresa
                    </button>
                </form> 
            </div> 
        </div>
    </main>


</body>
</html>