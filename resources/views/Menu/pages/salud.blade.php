
    @extends('templates.header')

    <!-- Main -->
    <!--Funcional con php-->
    <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Icono-->
    <link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">
    </head>

   <main> 
   <div class="profile-area">
            <p class="Parrafo">LO MEJOR PARA TU SALUD</p>
            <div class="container">
              <div class="row">
    <?php

    foreach($categoria as $oferta){?>                     
      <div class="col-md-4">
        
      <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Categoria</h5>
    <p class="card-text"><a href="Categoria/ofertas/<?php $oferta->ID_Empresa?>" ><?php echo $oferta->Nombre_Rubro  ?></a></p>
    
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
    <script src="{{asset('js/slider.js')}} "></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!--Pie de la pagina-->
        @extends('templates.footer')
  </body>

  <!--Pie de la pagina-->
</html>