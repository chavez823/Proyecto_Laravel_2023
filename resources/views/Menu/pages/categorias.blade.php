
@extends('templates.header')

<!-- Main -->
<!--Funcional con php-->
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Icono-->
<link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">
<link rel="stylesheet"  href="{{asset('css/n_categorias.css')}}">
</head>

<main> 

        <p class="Parrafo">LO MEJOR PARA TU SALUD</p>
          <div class="row">
<?php

foreach($categoria as $oferta){?>                     
      <div class="col-md-4">                
        <div class="courses-container">
          <div class="course">
            <div class="course-preview">
              <img class="imagen_" src="{{asset('img/Logo_sin_slogan_t.png')}}" >
            </div>
            <div class="course-info">			
              <h6>Categoria: </h6>
              <h2><?php echo $oferta->Nombre_Rubro  ?></h2>
              <a class="btn" href="Categoria/ofertas/<?php echo $oferta->Nombre_Rubro?>">Compra ya</a>
            </div>
          </div>
        </div>
      </div>
<?php
}
?>
<!-- Ofrecemos -->
  <div class="altura-a-b"></div>
  </div>


</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!--SLIDER-->
<script src="https://kit.fontawesome.com/5c72b9dab8.js" crossorigin="anonymous"></script>
<script src="{{asset('js/slider.js')}} "></script>


<!--Pie de la pagina-->
    @extends('templates.footer')
</body>

<!--Pie de la pagina-->
</html>