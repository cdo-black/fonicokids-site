<!doctype html>
<html lang="es">
  <head>

    @include('layouts.component.head')

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