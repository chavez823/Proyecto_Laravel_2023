<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--Icono-->
    <link rel="shortcut icon" href="{{asset('img/icono.ico')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUYIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel='stylesheet' href='https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=2479'>
    <!--Propio-->
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" href="css/drop.css">
    <!--Slider-->
    <link rel="stylesheet" href="css/style_2_s.css">

  </head>
  <body >
    <div class="data">
    <h2><strong>Empresas</strong></h2>
    <center>
    <div class="col-sm-11 col-sm-offset-1">
    <table class="uk-table uk-table-divider uk-table-hover">
        <tbody>
            <tr>
                <th width="15%" class="text-center"><strong>Código</strong></th>
                <th width="5%" class="text-center"><strong>Nombre</strong></th>
                <th width="5%" class="text-center"><strong>Contacto</strong></th>
                <th width="5%" class="text-center"><strong>Correo</strong></th>
                <th width="15%" class="text-center"><strong>Porcentaje</strong></th>
                <th width="1%"></th>
                <th width="1%"></th>
            </tr>
           
            <?php 
                foreach ($empresas as $empresa) { 
            ?>
               
            <tr>
                <td width="15%" class="text-center"><?php echo $empresa->ID_Empresa?></td>
                <td width="5%" class="text-center"><?php echo $empresa->Nombre?></td>
                <td width="5%" class="text-center"><?php echo $empresa->NombreContacto?></td>
                <td width="5%" class="text-center"> <?php echo $empresa->Correo?></td>
                <td width="15%" class="text-center"> <?php echo $empresa->PorcentajeComision?></td>
                <td width="1%"><a href="/Empresa/edit/<?php echo $empresa->ID_Empresa?>" class="btn btn-warning"><i class="fa-solid fa-file-pen"></i></a></td>
                <td width="1%"><a href="/Empresa/delete/<?php echo $empresa->ID_Empresa?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td> 
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
    </div>
    </center>
<?php
//include 'templates/footer.php';
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--SLIDER-->
    <script src="https://kit.fontawesome.com/5c72b9dab8.js" crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>  
</html>
