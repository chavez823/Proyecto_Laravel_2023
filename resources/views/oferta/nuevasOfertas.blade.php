@extends('oferta.templateOferta')

@section('content')

<div class="data">
    <h2><strong>Empresas</strong></h2>
    
    <center>
    <div class="col-sm-11 col-sm-offset-1">
    <table class="uk-table uk-table-divider uk-table-hover">
        <tbody>
            <tr>
                <th width="15%" class="text-center"><strong>Titulo</strong></th>
                <th width="5%" class="text-center"><strong>Detalles</strong></th>
                <th width="5%" class="text-center"><strong>Categoria</strong></th>
                <th width="5%" class="text-center"><strong>Precio Oferta</strong></th>
                <th width="15%" class="text-center"><strong>Precio Original</strong></th>
                <th width="1%"></th>
            </tr>
           
            <?php 
                foreach ($ofertas as $oferta) { 
            ?>
               
            <tr>
                <td width="15%" class="text-center"><?php echo $oferta->Titulo?></td>
                <td width="5%" class="text-center"><?php echo $oferta->Detalles?></td>
                <td width="5%" class="text-center"><?php echo $oferta->Categoria?></td>
                <td width="5%" class="text-center"> <?php echo $oferta->PrecioOferta?></td>
                <td width="15%" class="text-center"> <?php echo $oferta->PrecioOriginal?></td>
                <td width="1%"><a  data-toggle="modal" href="/Empresa/Oferta/<?=$oferta->ID_Oferta?>" class="btn btn-primary"><i class="fa-solid fa-binoculars"></i></a></td>
            </tr>  
            <?php 
                }   
            ?>
        </tbody>
    </table>
    </div>
</center>
@endsection