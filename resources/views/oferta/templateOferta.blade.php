<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--ICONO-->
    <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUYIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel='stylesheet' href='https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=2479'>
    <!--Propio-->
    <link rel="stylesheet" href="{{asset('css/style_1.css')}} ">
    <link rel="stylesheet" href="{{asset('css/drop.css')}}">
    <!--Slider-->
    <link rel="stylesheet" href="{{asset('css/style_2_s.css')}}">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Empresa/Ofertas">Nuevas Ofertas</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Empresa/POfertas">Ofertas Pasadas</a>
                    </li>
                </ul>
        </nav> 
    </header>
    @yield('content');
    </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--SLIDER-->
    <script src="https://kit.fontawesome.com/5c72b9dab8.js" crossorigin="anonymous"></script>
</html>
