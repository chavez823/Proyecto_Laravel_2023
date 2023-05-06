@extends('oferta.templateOferta')

@section('content')
<?php
	$fechaActual = date('Y-m-d');
?>
<br>
<br>
<br>
<br>
<div class="container">
<form>
	<fieldset disabled>
	  <legend>Oferta Enviada</legend>
	  <div class="mb-3">
		<label for="disabledTextInput" class="form-label">Titulo</label>
		<input type="text" id="disabledTextInput" class="form-control" value="{{$oferta[0]->Titulo}}">
	  </div>
	  <div class="mb-3">
		<label for="disabledTextInput" class="form-label">Descripcion</label>
		<input type="text" id="disabledTextInput" class="form-control" value="{{$oferta[0]->Descripcion}}">
	  </div>
	  <div class="mb-3">
		<label for="disabledTextInput" class="form-label">Categoria</label>
		<input type="text" id="disabledTextInput" class="form-control" value="{{$oferta[0]->Categoria}}">
	  </div>
	  <div class="mb-3">
		<label for="disabledTextInput" class="form-label">Fecha Inicio: </label>
		<input type="text" id="disabledTextInput" class="form-control" value="{{$oferta[0]->FechaInicio}}">
	  </div>
	  <div class="mb-3">
		<label for="disabledTextInput" class="form-label">Fecha Fin</label>
		<input type="text" id="disabledTextInput" class="form-control" value="{{$oferta[0]->FechaFin}}">
	  </div>
	 </form>
		</fieldset>
		<form action="/Empresa/Estado/<?=$oferta[0]->ID_Oferta?>&<?php echo (strtotime($fechaActual)<strtotime($oferta[0]->FechaInicio)?2:3) ?>" method="post">
			@csrf
			@method('PUT')
	  	<button type="submit" class="btn btn-success">
	   		Aceptar
	  	</button>
		</form>
		<a href="#delete<?=$oferta[0]->ID_Oferta?>" data-toggle="modal" class="btn btn-danger">Rechazar</a>
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