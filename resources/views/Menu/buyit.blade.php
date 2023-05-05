<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <!--ICONO-->
    <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
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
</header>
	 <!--luego puede ir el resto de la pagina -->
    <!--Slider-->
    
    <div class="wrapper altura-a-b">
        
        <i id="left" class="fa-solid fa-angle-left"></i>
        <div class="carousel">
            <img src="img/slider/IMAGEN-1.jpg" alt="">
            <img src="img/slider/IMAGEN-2.jpg" alt="">
            <img src="img/slider/IMAGEN-3.jpg" alt="">
            <img src="img/slider/IMAGEN-4.jpg" alt="">
            <img src="img/slider/IMAGEN-5.jpg" alt="">
            <img src="img/slider/IMAGEN-6.jpg" alt="">
            <img src="img/slider/IMAGEN-7.jpg" alt="">
            <img src="img/slider/IMAGEN-8.jpg" alt="">
            <img src="img/slider/IMAGEN-9.jpg" alt="">                 
        </div>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    <!--End Slider-->
    </header>
    
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