
  @extends('templates.header')
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!--Fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Poiret+One&display=swap" rel="stylesheet">
  <!--Icono-->
  <link rel="stylesheet" href="css/style_ofer.css">
  <link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">
  </head>
  <header>
</header>
    <!-- Main -->
    <!--Funcional con php-->
    
<div class="select_f">
  <form action="" method="post">
    <div class="wrap-input100"> 
        <select class="input100 s_ele" name="categ" >
          @foreach ($categoria as $cate)
          <option class="input100"   value="" >Todas</option>
          <option class="input100"   value="">{{$cate->Nombre}}</option>
          <span class="focus-efecto"></span>   
          @endforeach                                    
        </select>        
    </div>
    <button class="btn_buscar sesion">Buscar</button>
  </form>
</div>
   <main> 
    
   <div class="altura-a-b"></div>
   <div class="profile-area">
            <p class="Parrafo">LO MEJOR PARA TU CUIDADO PERSONAL</p>
            <div class="container">
              <div class="row">
    <?php

    foreach($ofertas as $oferta){?>                     
      <div class="col-md-4">

          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?php echo $oferta->Imagen ?>">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><?php echo $oferta->Titulo ?><i class="material-icons right">+</i></span>
              <!--AQUI CAMBIAR EL ID-->
              <p> <a href="/carrito/<?=$oferta->ID_Oferta?>&2" class="btn btn-primary">Agregar al carrito</a>      </p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><?php echo $oferta->Titulo ?><i class="material-icons right">-</i></span>
              <p><?php echo $oferta->Descripcion ?></p>
              <p>Precio Original: $<?php echo $oferta->PrecioOriginal ?></p>
              <p>Precio Oferta: $<?php echo $oferta->PrecioOferta ?></p>
              <p>Fecha de inicio: <?php echo $oferta->FechaInicio ?></p>
              <p>Fecha de Final: <?php echo $oferta->FechaFin ?></p>
            </div>
          </div>

            <br>
        </div>
    <?php
    }
    ?>
    <!-- Ofrecemos -->
      <div class="altura-a-b"></div>
      </div>
    </div>
  </div>
    
  </main>
  
  
                                   
                             
  
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--SLIDER-->
    <script src="https://kit.fontawesome.com/5c72b9dab8.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/slider.js')}}"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!--Pie de la pagina-->
 
       @extends('templates.footer')
  
  </body>
</html>