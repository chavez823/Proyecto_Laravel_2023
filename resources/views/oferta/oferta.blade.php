<header>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Poiret+One&display=swap" rel="stylesheet">
    
    
    <!--Propio-->       
    <link rel="stylesheet" href="{{asset('css/oferta_style.css')}}">

</header>
@extends('oferta.templateOferta')

@section('content')
<?php
	$fechaActual = date('Y-m-d');
?>

<div class="container-login">
    
        <form action="/Empresa/Estado/<?=$oferta[0]->ID_Oferta?>&<?php echo (strtotime($fechaActual)<strtotime($oferta[0]->FechaInicio)?2:3) ?>" method="post">
			@csrf
			@method('PUT')
            
    <div class="wrap-login">  
        <fieldset>  
        <span class="login-form-title">OFERTA ENVIADA</span>                                                                           
                <div class="container_c">                                                           
                    <div class="column_1">
                        <!-- Nombre --> 
                        <div class="wrap-input100"> 
                            <label>Titulo</label>
                            <input class="input100" type="text" name="titulo" placeholder="Titulo" value="{{$oferta[0]->Titulo}}" disabled>	 
                            <span class="focus-efecto"></span> 
                        </div>

                        <!-- Categoria --> 
                        <div class="wrap-input100">
                            <label>Categoria</label> 
                            <input class="input100" type="text" name="categoria" placeholder="categoria" value="{{$oferta[0]->Categoria}}" disabled>	 
                            <span class="focus-efecto"></span> 
                        </div> 
                                                            
                        <!--Fecha fin-->
                        <div class="wrap-input100"> 
                            <label>Fecha Fin</label>
                            <input class="input100" type="text" name="fechafin" placeholder="Fecha Fin" value="{{$oferta[0]->FechaFin}}" disabled>	 
                            <span class="focus-efecto"></span> 
                        </div>   
                        <button type="submit" class="btn btn-success">
	   		                Aceptar
	  	                </button>        
                          <a href="#delete<?=$oferta[0]->ID_Oferta?>" data-toggle="modal" class="btn btn-danger" aria-disabled="false">Rechazar</a>                                                                                    
                    </div>		

                    <div class="column_2">
                        <!-- Descripcion --> 
                        <div class="wrap-input100"> 
                            <label>Descripcion</label>
                            <textarea class="input100" type="text" name="descripcion" placeholder="Descripcion" value="" disabled>{{$oferta[0]->Descripcion}}</textarea> 
                            <span class="focus-efecto"></span> 
                        </div>

                        <!--Fecha inicio-->
                        <div class="wrap-input100"> 
                            <label>Fecha Inicio</label>
                            <input class="input100" type="text" name="fechainicio" placeholder="Fecha inicio" value="{{$oferta[0]->FechaInicio}}" disabled>	 
                            <span class="focus-efecto"></span> 
                        </div>
                         
                    </div>
                </div>  
            </fieldset>                 		                 
        </div>        
	</form>
		
		
	  	
	</div>
 <!-- Inicio modal -->
 <div class="modal" id="delete<?=$oferta[0]->ID_Oferta?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
			<center><h4 class="modal-title" id="myModalLabel">Escriba una justificación para el rechazo para la oferta: {{$oferta[0]->Titulo}}</h4></center>
            <center>
				<form action="/Empresa/Estado/<?=$oferta[0]->ID_Oferta?>&5" method="post">
				@csrf
				@method('PUT')
				<div class="modal-body">	
					<input classs="form-data"type="text" id="justificacion" name="justificacion">
				</div>
				</center>
				<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Confirmar</a>
			</form>
            </div>
        </div>
    </div>
</div>
<!-- Final modal -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection