
    @extends('templates.header')

    <!-- Main -->
    <!--Funcional con php-->

   <main> 
    <?php
    // $model=new OfertaModel();
     //$listaCupones=$model->get_oferta(6);   
    ?>
      
      <div class="profile-area">
            <p class="Parrafo">LO MEJOR PARA TU SALUD</p>
            <div class="container">
              <div class="row">
    <?php

    foreach($ofertas as $oferta){?>
         <?php
           // $info = ['ID' => $cupones['ID_Oferta'], 'vista' => 4];
           // $info_carrito = implode("/", $info);
         ?>
         
         <div class="col-md-4">
          <div class="card">
            <div class="img1"><img src="<?php echo $oferta->Imagen ?>" alt=""></div><!--Fondo CARD-->
                              
            <div class="main-text">
              <h1><?php echo $oferta->Titulo ?></h1>
              <p>$<?php echo $oferta->PrecioOferta ?></p>
              <p><?php echo $oferta->Descripcion ?></p>
              <a href="" class="btn btn-primary">Agregar al carrito</a>
              </form>     
            </div>    
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


  <!--Pie de la pagina-->
        @extends('templates.footer')
  </body>

  <!--Pie de la pagina-->
 


</html>