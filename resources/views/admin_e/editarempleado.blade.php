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
    <link rel="stylesheet" href="{{asset('css/style_ofer.css')}}">
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
                                <label>Codigo Empresa</label>
                                <input class="input100" type="text" name="id_e" placeholder="Nombre Empresa" value="{{@old('id_e',$empleados[0]->ID_Empresa)}}" >	 
                                <span class="focus-efecto"></span> 
                            </div>

                            <!-- Direccion --> 
                            <div class="wrap-input100"> 
                            <label>ID Empleado</label>
                                <input class="input100" type="text" name="id_emp" placeholder="Direccion" value="{{@old('id_emple',$empleados[0]->ID_Empleado)}}" >	 
                                <span class="focus-efecto"></span> 
                            </div> 

                            
                        </div>		

                        <div class="column_2">
                            <!-- Codigo Empresa --> 
                            <div class="wrap-input100"> 
                                <label>ID USUARIO</label>
                                <input class="input100" type="text" name="id_u" placeholder="Codigo Empresa" value="{{@old('id_u',$empleados[0]->ID_Usuario)}}" disabled> 
                                <span class="focus-efecto"></span> 
                            </div>
                            <!--Representante empresa-->
                            <div class="wrap-input100"> 
                                <label>Tipo de Empleado</label>
                                <input class="input100" type="text" name="tipo" placeholder="Nombre Representante" value="{{@old('tipo',$empleados[0]->Tipo)}}"> 
                                <span class="focus-efecto"></span> 
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