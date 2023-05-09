<!DOCTYPE html>
<html lang="es">
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
    <title>Editar Informacion Empelado</title>
    <!--css-->
    <link rel="stylesheet" href="{{asset('css/style_editarempleado.css')}}">
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
                <form action="/Empleado/update/<?php echo $empleados[0]->ID_Empleado?>" method="post"> 
                                                       
                @csrf
                    @method('PUT')
                    <span class="login-form-title">Editar Empleado</span> 
                  
                    <div class="container_c">                                       
                        <div class="column_1">
                            <!-- Nombre --> 
                            <div class="wrap-input100"> 
                                <label>Nombre</label>
                                <input class="input100" type="text" name="nombre" placeholder="Nombre" value="{{@old('nombre',$empleados[0]->Nombres)}}" >	 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('nombre','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif   
                            </div>

                            <!-- Direccion --> 
                            <div class="wrap-input100"> 
                            <label>Apellido</label>
                                <input class="input100" type="text" name="apellido" placeholder="Apellido" value="{{@old('apellido',$empleados[0]->Apellidos)}}" >	 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('apellido','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif   
                            </div> 

                                <!-- Direccion --> 
                                <div class="wrap-input100"> 
                            <label>ID_Empleado</label>
                                <input class="input100" type="text" name="id_emp" placeholder="ID_Empleado" value="{{@old('id_empl',$empleados[0]->ID_Empleado)}}" >	 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('id_emp','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif   
                            </div> 

 
                            
                        </div>		

                        <div class="column_2">
                            <!-- Codigo Empresa --> 
                            <div class="wrap-input100"> 
                                <label>Correo</label>
                                <input class="input100" type="text" name="correo" placeholder="Correo" value="{{@old('correo',$empleados[0]->Correo)}}" > 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('correo','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif   
                            </div>
                            <!--Representante empresa-->
                            <div class="wrap-input100"> 
                                <label>Tipo de Empleado</label>
                                <input class="input100" type="text" name="tipo" placeholder="Tipo" value="{{@old('tipo',$empleados[0]->Tipo)}}"> 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('tipo','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif   
                            </div>

                     
                        </div>
                    </div>                    
                    <button type="submit" name= "enviar" class="sesion_">
                        Editar Empleado
                    </button>
                </form> 
            </div> 
        </div>
    </main>


</body>
</html>