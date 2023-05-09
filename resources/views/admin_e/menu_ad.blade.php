<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Menu Administrativo</title>
<!--Logo-->
<link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/style_empo.css')}}" >

</head>
<body>

<section class="main-content">
  <div class="container">  
    <div class="row">
      <h1 class="text-uppercase text-center">Menu Administrativo</h1>
      @csrf 
      <br>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="payment-card rounded-lg shadow bg-white text-center h-100">
          <div class="payment-card__type px-4 py-3 d-flex justify-content-center align-items-center"> 
            <img src="{{asset('img/CUPON.png')}}" alt="Card"> 
            
          </div>
          <div class="payment-card__info p-4">
            <h5>GESTION DE OFERTAS</h5>
            <button class="btn_add">
              <a href="/MenuEmpresa/create">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Agregar
              </span>
            </a>
            </button>
            <br>
            <button class="btn_edit">
              <a href="/Oferta">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Ver Ofertas
              </span>
              </a>
            </button>
            <br>
                                  
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <div class="payment-card rounded-lg shadow bg-white text-center h-100">
          <div class="payment-card__type px-4 py-3 d-flex justify-content-center align-items-center"> 
            <img src="{{asset('img/empleados.png')}}" alt="Bank">             
          </div>
          <div class="payment-card__info p-4">
            <h5>GESTION DE EMPLEADOS</h5>
            <button class="btn_add">
              <a href="/Empleado">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Agregar
              </span>
              </a>
            </button>  
            <br>
            <button class="btn_edit">
              <a href="/Empleado/ver">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Empleados
              </span>
              </a>
            </button>
            <br>
                                  
          </div>
        </div>
      </div>
      

    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</body>
</html>