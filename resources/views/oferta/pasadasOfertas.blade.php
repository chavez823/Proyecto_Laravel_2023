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
                <th width="5%" class="text-center"><strong>Estado</strong></th>
            </tr>
           
            <?php 
                foreach ($ofertas as $oferta) { 
            ?>
               
            <tr>
                <td width="15%" class="text-center"><?php echo $oferta->Titulo?></td>
                <td width="5%" class="text-center"><?php echo $oferta->Nombre?></td>
            </tr>  
            <?php 
                }   
            ?>
        </tbody>
    </table>
    </div>
    </center>
@endsection