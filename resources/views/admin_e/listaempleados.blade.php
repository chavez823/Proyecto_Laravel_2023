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
  <div class="btn_back">
        <a href="http://127.0.0.1:8000/Empresa/menuadmin"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-left" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="12" x2="14" y2="12" />
            <line x1="4" y1="12" x2="8" y2="16" />
            <line x1="4" y1="12" x2="8" y2="8" />
            <line x1="20" y1="4" x2="20" y2="20" />
          </svg></a>
    </div>
    <div class="data">
    <h2><strong>Empleados</strong></h2>
    <center>
    <div class="col-sm-11 col-sm-offset-1">
    <table class="uk-table uk-table-divider uk-table-hover">
        <tbody>
            <tr>
   
                <th width="10%" class="text-center"><strong>Nombres</strong></th>
                <th width="5%" class="text-center"><strong>Apellidos</strong></th>
                <th width="5%" class="text-center"><strong>Correo</strong></th>
                <th width="5%" class="text-center"><strong>ID_Empleado</strong></th>
                <th width="5%" class="text-center"><strong>Tipo</strong></th>
                <th width="5%" class="text-center"><strong>ID_Empresa</strong></th>
                <th width="2%">Acciones</th>
                
            </tr>
           
            <?php 
                foreach ($empleados as $empleado) { 
            ?>
               
            <tr>
                <td width="10%" class="text-center"><?php echo $empleado->Nombres?></td>
                <td width="5%" class="text-center"><?php echo $empleado->Apellidos?></td>
                <td width="5%" class="text-center"> <?php echo $empleado->Correo?></td>
                <td width="5%" class="text-center"> <?php echo $empleado->ID_Empleado?></td>
                <td width="5%" class="text-center"> <?php echo $empleado->Tipo?></td>
                <td width="5%" class="text-center"> <?php echo $empleado->ID_Empresa?></td>
                <td COLSPAN="2" width="1%"><a href="/Empleado/vereditar/<?php echo $empleado->ID_Empleado?>" class="btn btn-warning"><i class="fa-solid fa-file-pen"></i></a>
                <a href="/Empleado/delete/<?php echo $empleado->ID_Empleado?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td> 
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
