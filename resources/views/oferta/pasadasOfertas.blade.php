@extends('oferta.templateOferta')

@section('content')
<div class="data">
    <h2><strong>Empresas</strong></h2>
    <div class="http://127.0.0.1:8000/Empresa">
        <a href="http://127.0.0.1:8000/Empresa"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-left" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="12" x2="14" y2="12" />
            <line x1="4" y1="12" x2="8" y2="16" />
            <line x1="4" y1="12" x2="8" y2="8" />
            <line x1="20" y1="4" x2="20" y2="20" />
          </svg></a>
</div>
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