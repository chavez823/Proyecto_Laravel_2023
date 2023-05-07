<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <!--Icono-->
    <link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUYIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--Propio-->
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" href="css/drop.css">
    
    <!--Slider-->
    <link rel="stylesheet" href="{{asset('css/style_2_s.css')}}">
    
  </head>

<body>

<header>
    <!--Ingresando el nuevo menu-->
    <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #86A3B8;">
      <div class="container-fluid">
        <!--Logo-->
        <a class="navbar-brand" href="buyit">
          <img class="logotipo" src="img/Logo_sin_slogan_t.png" alt="">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
                <a class="nav-link" href="/Empresa">menuadmin  buyit</a>
              </li>
          <li class="nav-item">
                <a class="nav-link" href="/Empresa/menuadmin">menuadmin e</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Categoria">Categorias</a>
              </li>
              
          
             <li class="nav-item">
                 <a class="nav-link" href="carrito"><i class="fa-solid fa-cart-shopping"></i> (<?php echo (empty($_SESSION['CARRITO'])?0:array_sum(array_column($_SESSION['CARRITO'],"CANTIDAD")));?>)</a>			  
              </li>
              

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo  isset($_SESSION['session'])?$_SESSION['session']['nombre']:"Login" ?> <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                  <?php if(!isset($_SESSION['session']))  { ?>

                  <li> <a class="dropdown-item " href="form"> Login</a></li>
                  <li><hr class="dropdown-divider"></li>

                  <?php  } else { ?>                  

                  <li><a class="dropdown-item " href="/cupones">Ver Cupones</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li> <a class="dropdown-item " href="form/cambio/contraseña">Ajustes</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li> <form action="logout" method="post">
                    @csrf
                   
                    <a href="#" onclick="this.closest('form' ).submit()">Logout</a>
                 
                  </form>
                    
                  

                  <?php } ?>
                </ul>
              </li> 
          </ul>
      </div>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class=" forma carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.pixabay.com/photo/2017/12/09/08/18/pizza-3007395_1280.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://cdn.pixabay.com/photo/2017/12/09/08/18/pizza-3007395_1280.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



    
    <Main>
    <!--BUIYT - CARDS -->
   <div class="profile-area">
            <p class="Parrafo">NUESTRAS MEJORES OFERTAS</p>
            <div class="container">
              <div class="row">
    <?php
             
               foreach($ofertas as $oferta){?>
        
          
                <div class="col-md-4">
                  <div class="card">
                    <div class="img1"><img src="<?php echo $oferta->Imagen ?>" alt=""></div><!--Fondo CARD-->
                                      
                    <div class="main-text">
                      <h1><?php echo $oferta->Titulo ?></h1>
                      <p>$<?php echo $oferta->PrecioOferta ?></p>
                      <p><?php echo $oferta->Descripcion ?></p>
                      <a href="/carrito/<?=$oferta->ID_Oferta?>&1" class="btn btn-primary">Agregar al carrito</a>
                      </form>     
                    </div>    
                  </div>
                </div> 
    <?php
   }
    ?>
    <!-- Ofrecemos -->
        <div class="altura-a-b"></div>
        </div>
      </div>
    </div>
</Main>  -->
<!--End Main-->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--SLIDER-->
    <script src="https://kit.fontawesome.com/5c72b9dab8.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/Slider.js')}}"></script>
    

    <footer>
          <img class="logotipo-footer" src="img/Logo_sin_slogan_t.png" alt="logotipo">
          <br>    
          <p>
          © Copyright  2023 BUYIT <br>
            Pagina Creada por JAM<br>
            <i class="nav-link fa-brands fa-facebook "></i>
          <i class="nav-link fa-brands fa-instagram"></i>
          <i class="nav-link fa-brands fa-twitter"></i>
          <?php 
            //@echo var_dump($_SESSION['CARRITO']);
          ?>
          </p>
  </footer>
</body>
</html>