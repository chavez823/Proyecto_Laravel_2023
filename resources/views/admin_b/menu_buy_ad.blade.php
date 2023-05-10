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
<link rel="stylesheet" type="text/css" href="{{asset('css/style_m_buyit.css')}}">
</head>
<body>
<div class="btn_back">
        <a href="/buyit"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-left" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="12" x2="14" y2="12" />
            <line x1="4" y1="12" x2="8" y2="16" />
            <line x1="4" y1="12" x2="8" y2="8" />
            <line x1="20" y1="4" x2="20" y2="20" />
          </svg></a>
    </div>
<section class="main-content">
  <div class="container">  
    <div class="row">
      <h1 class="text-uppercase text-center">Menu Administrativo (BUYIT)</h1>
      <br>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="payment-card rounded-lg shadow bg-white text-center h-100">
          <div class="payment-card__type px-4 py-3 d-flex justify-content-center align-items-center"> 
            <img src="{{asset('img/pngwing.com (11).png')}}" alt="Card"> 
          </div>
          <div class="payment-card__info p-4">
            <h5>GESTION DE EMPRESAS</h5>
            
            <button class="btn_add">
              <a href="/Empresa/create">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Agregar
              </span>
              </a>
            </button>
            <br>
            <button class="btn_edit2">
              <a href="/Empresa/show">
              <span>
                 Empresas
              </span>
              </a>
            </button>
            <br>
            <button class="btn_delete">
              <a href="/Empresa/Ofertas">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Ofertas
              </span>
              </a>
            </button>                        
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <div class="payment-card rounded-lg shadow bg-white text-center h-100">
          <div class="payment-card__type px-4 py-3 d-flex justify-content-center align-items-center"> 
            <img src="{{asset('img/carpetas.png')}}" alt="Bank"> 
          </div>
          <div class="payment-card__info p-4">
            <h5>GESTION DE RUBROS</h5>
            <button class="btn_add">
              <a href="/rubro">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Agregar
              </span>
              </a>
            </button>
            <br>
            <button class="btn_edit">
              <a href="/rubro/editar">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Editar
              </span>
              </a>
            </button>
                              
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <div class="payment-card rounded-lg shadow bg-white text-center h-100">
          <div class="payment-card__type px-4 py-3 d-flex justify-content-center align-items-center"> 
            <img src="{{asset('img/cliente.png')}}" alt="Bank"> 
          </div>
          <div class="payment-card__info p-4">
            <h5>GESTION DE CLIENTES</h5>


            <button class="btn_edit">
              <a href="/Empresa/vercliente">
              <span>
                 Ver Clientes
              </span>
              </a>
            </button>
            
                                    
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