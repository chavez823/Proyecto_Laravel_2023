<?php
  include 'templates/header.php'
?>
    <!-- Main -->
    <!--Funcional con php-->

   <main> 
    <?php
  // $model=new OfertaModel();
   //$listaCupones=$model->get_oferta(1); 

    ?>
      
      <div class="profile-area">
            <p class="Parrafo">LO MEJOR PARA TU CUIDADO PERSONAL</p>
            <div class="container">
              <div class="row">
    <?php

    foreach($ofertas as $cupones){?>
    <?php
     //se crea un arreglo asociativo  y se almacena el id de oferta y se le asigna ala variable vista un numero 2, para manejarlo en el carrito y  para renderizar la misma  vista de belleza y se repite con las de mas  categorías
    $info = ['ID' => $cupones['ID_Oferta'], 'vista' => 2];
   //con implode se hizo una conversion de array a string y le asignamos el separador de /
    $info_carrito = implode("/", $info);
    ?>
        
         
                <div class="col-md-4">
                  <div class="card">
                    <div class="img1"><img src="<?php echo $cupones['Imagen'] ?>" alt=""></div>
                    <!--Fondo CARD-->
                    <!--<div class="img2"><img src="img/ramen_3.jpg" alt=""></div>-->         
                    <div class="main-text">
                      <h1><?php echo $cupones['Titulo'] ?></h1>
                      <p>$<?php echo $cupones['PrecioOferta'] ?></p>
                      <p><?php echo $cupones['Descripcion'] ?></p>
                      <!-- aqui pasamos el array asociativo convertido en string osea el id oferta y la vista -->
                      <a href="index.php?c=Inicio&a=carrito&id=<?=$info_carrito?>" class="btn btn-primary">Agregar al carrito</a>                   
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
    <script src="./js/slider.js"></script>

  <!--Pie de la pagina-->
    <?php
      include 'templates/footer.php'
    ?>
  </body>
</html>