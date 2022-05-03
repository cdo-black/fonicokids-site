<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Acuario Valparaíso | Colegios</title>
      
    <meta name="author" content="ASD Informáticos - Adrián Ríos Sánchez" />
    <meta name="Description" content="El primer Acuario interactivo de Valparaíso, donde podrás encontrar variados tipos de especies marinas del Océano Pacífico. Ven a conocernos."/>
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" /> 
    <meta content="Acuario Valparaíso - Un Mundo a Explorar" property="og:title"/>
    <meta content="img/_AcuarioValparaiso_og.jpg" property="og:image"/>
    <meta content="El primer Acuario interactivo de Valparaíso, donde podrás encontrar variados tipos de especies marinas del Océano Pacífico. Ven a conocernos." property="og:description"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
      
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/Sitio_Acuario.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Nunito:wght@300;600;700&family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">

	<script src="js/fontawesome.js"></script>

  </head>
  <body>
      
        <header>
            <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo_acuario_horizontal.svg" height="40" alt="Logo Acuario valparaíso" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="icono"></div>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                    <ul class="navbar-nav text-end nav-pills bot">
                        <li><a href="{{ route('inicio') }}" class="@yield('inicio') bot">INICIO</a></li>
                        <li><a href="{{ route('nosotros') }}" class="@yield('nosotros') bot">NOSOTROS</a></li>
                        <li><a href="{{ route('colegios') }}" class="@yield('colegios') bot">COLEGIOS</a></li>
                        <li><a href="{{ route('contacto') }}" class="@yield('contacto') bot">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>

           @include('layouts.component.slide')
        </header>
      
        @yield('contenido')
       

       @include('layouts.component.footer')


        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script type="text/javascript">
            new WOW().init();
        </script>

  </body>
</html>