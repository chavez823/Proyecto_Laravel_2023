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
        <!--OJO-->
        <div class="container-login"> 
            
            <!--OJO-->
            <div class="wrap-login"> 
                <form action="/Oferta/update/<?php echo $ofertas[0]->ID_Oferta?>" method="post"> 
                    @csrf
                    @method('PUT')
                                                        

                    <span class="login-form-title">Actualizar Oferta</span> 
                          		
                    <div class="container_c">                                       
                        <div class="column_1">
                            <!-- Nombre --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="name" placeholder="Nombre Oferta" value="{{@old('name', $ofertas[0]->Titulo)}}" >	 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('name','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif    
                            </div>

                            <!-- Direccion --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="descripcion" placeholder="Descripcion" value="{{@old('descripcion',$ofertas[0]->Descripcion )}}" >	 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('descripcion','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif    
                            </div> 

                            <!--Telefono del Representante-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="detalles" placeholder="Detalles" value="{{@old('detalles', $ofertas[0]->Detalles)}}" >	 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('detalles','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif    
                            </div>
                            
                            <!--Rubro-->
                            <div class="wrap-input100"> 
                                <!--<input class="input100" type="text" name="rubro" placeholder="Rubro" value="<?php //Aqui ira el isset para los valores?>"> 
                                <span class="focus-efecto"></span>-->
                                <select class="input100 s_ele"  name="categ" >
                                    @foreach ($categoria as $cate)
                                    <option class="input100"   value="{{$ofertas[0]->Categoria}} ">{{$cate->Nombre}}</option>
                                    <span class="focus-efecto"></span>
                                 @endforeach
                                </select>
                                @if($errors->any())
                      
                     
                      {!!$errors->first('categ','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif    

                            </div>
                             <!--Porcentaje Comision-->
                             <div class="wrap-input100"> 
                                <input class="input100" type="text" name="precio_o" placeholder="Precio Original" value="{{@old('precio_o',$ofertas[0]->PrecioOriginal)}}"> 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('precio_o','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif    
                            </div>
                            
                        </div>		

                        <div class="column_2">
                            <!-- Codigo Empresa --> 
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="justificacion" placeholder="Codigo Oferta"  disabled value="{{@old('justificacion', $ofertas[0]->Justificacion)}}" > 
                                <span class="focus-efecto"></span> 
                           
                            </div>

                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="cod_o" placeholder="Codigo Oferta" value="{{@old('cod_o', $ofertas[0]->ID_Oferta)}}" > 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('cod_o','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif    
                            </div>
                            <!--Representante empresa-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="date" name="fecha_i" placeholder="Fecha Inicio" value="{{@old('fecha_i', $ofertas[0]->FechaInicio)}}"> 
                                <span class="focus-efecto"></span>
                                @if($errors->any())
                      
                     
                      {!!$errors->first('fecha_i','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif     
                            </div>

                            <!--Correo representante-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="date" name="fecha_f" placeholder="Fecha Fin" value="{{@old('fecha_f' , $ofertas[0]->FechaFin)}}"> 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('fecha_f','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif    
                            </div>
                            
                            <!--Porcentaje Comision-->
                            <div class="wrap-input100"> 
                                <input class="input100" type="text" name="precio_ofer" placeholder="Precio Oferta" value="{{@old('precio_ofer' , $ofertas[0]->PrecioOferta)}}"> 
                                <span class="focus-efecto"></span> 
                                @if($errors->any())
                      
                     
                      {!!$errors->first('precio_ofer','<p class="alert alert-danger" role="role">:message</p>' )!!}
                      
                        @endif    
                            </div>

                        </div>
                    </div>
                                      
                    <button type="submit" name="enviar" class="sesion">
                        Actualizar oferta
                    </button>

                    
                </form> 
                <button type="submit" name="enviar" class="btn_descartar">
                        <a class="btn_des_a" href="/Oferta/delete/<?php echo $ofertas[0]->ID_Oferta?>">
                        <span>Descartar</span> 

                        </a>
                    </button>

            </div> 
        </div>
    </main>


</body>
</html>
