<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FonicoKids | @yield('titulo')</title>
      
    <meta name="author" content="ASD Informáticos - Adrián Ríos Sánchez" />
    <meta name="Description" content=""/>
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" /> 
    <meta content="FonicoKids - Jugando nos Comunicamos" property="og:title"/>
    <meta content="img/_fonicokids_og.jpg" property="og:image"/>
    <meta content="" property="og:description"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
      
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/site_fonicokids.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500;700&family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

	<script src="{{ asset('js/fontawesome.js') }}"></script>

  </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                <a class="navbar-brand" href="index.php">
                    <img src="img/Logo_fonico_blanco.svg" height="60" alt="Logo FonicoKids" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="icono"></div>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                    <ul class="navbar-nav text-end nav-pills bot">
                        <li><a href="{{ route('inicio') }}" class="@yield('inicio') bot">INICIO</a></li>
                        <li><a href="{{ route('nosotros') }}" class="@yield('nosotros') bot">NOSOTROS</a></li>
                        <li><a href="{{ route('servicios') }}" class="@yield('servicios') bot">SERVICIOS</a></li>
                        <li><a href="#Contacto" class="@yield('contacto') bot">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>
        </header>
      
        @yield('contenido')

        @include('layouts.component.footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/menu.js') }}"></script>
        <script src="{{ asset('js/index.bundle.min.js') }}"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script> -->
    </body>
</html>
