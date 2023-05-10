@extends('templates.header')
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Icono-->
  <link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">
  </head>
<header>
</header>
<!-- Main -->
    <!--Funcional con php-->

   <main> 
   <div class="profile-area">
            <p class="Parrafo">LAS MEJORES OFERTAS SOLO PARA TI</p>
            <div class="container">
              <div class="row">
    <?php

    foreach($ofertas as $oferta){
                $FechaInicio = strtotime($oferta->FechaInicio);
                $FechaFin = strtotime($oferta->FechaFin);
                $FechaActual = date('d-m-Y');
                if($FechaFin > strtotime($FechaActual))
            { 
      ?>                     
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
          }else {
                DB::table('oferta')
                ->where('ID_Oferta','=',$oferta->ID_Oferta)
                ->update(['ID_EstadoOferta' => '4']);
          }
        ?>
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

  <!--Pie de la pagina-->
 


</html>