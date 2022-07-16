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
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<script src="{{ asset('js/fontawesome.js') }}"></script>
	@livewireStyles

  </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                <a class="navbar-brand" href="index.php" data-aos="fade-down" data-aos-delay="400">
                    <img src="img/Logo_fonico_blanco.svg" height="60" alt="Logo FonicoKids" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" data-aos="fade-left" data-aos-delay="400">
                    <div class="icono"></div>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01" data-aos="fade-left" data-aos-delay="400">
                    <ul class="navbar-nav text-end nav-pills bot py-3 py-lg-0 pe-3 pe-lg-0">
                        <li><a href="{{ route('inicio') }}" class="@yield('inicio') bot my-3 my-lg-0">INICIO</a></li>
                        <li><a href="{{ route('nosotros') }}" class="@yield('nosotros') bot">NOSOTROS</a></li>
                        <li><a href="{{ route('servicios') }}" class="@yield('servicios') bot">SERVICIOS</a></li>
                        <li><a href="#Contacto" class="@yield('contacto') bot">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>
        </header>
      
        @yield('contenido')

        
        
        <footer id="Contacto" class="container-fluid bg_azul pb-4 marg_content_top position-relative padd_small_top">
            <div class="">
                <img src="img/solapa_footer.svg" class="solapa_footer" alt="">
            </div>
            <div class="row justify-content-center align-items-center">
                <section class="col-11 col-lg-3 text-white text-center mx-0 mx-lg-3 py-5">
                    <img src="img/Logo_fonico_color2.svg" class="pb-5" height="160" alt="Logo Fonicokids">
                    <p>¿Tienes dudas?, ¿Consultas?<br>Ponte en contacto con nosotros en cualquier de nuestras plataformas de información y nos comunicaremos contigo a la brevedad.</p>

                    <article class="info_footer mt-4">
                        <div class="pb-3"><a href="mailto:contacto@fonicokids.cl"><i class="fas fa-envelope"></i>&nbsp;&nbsp; contacto@fonicokids.cl</a></div>
                        <div class="pb-3"><a href="https://api.whatsapp.com/send?phone=56993301174" target="blank"><i class="fab fa-whatsapp"></i>&nbsp;&nbsp; +569 9330 1174</a></div>
                    </article>

                    <article class="rrss_footer d-inline-flex">
                        <a href="/" target="blank">
                            <div class=""><i class="fab fa-facebook-f"></i></div>
                        </a>
                        <a href="/" target="blank">
                            <div class=""><i class="fab fa-instagram"></i></div>
                        </a>
                        <a href="tel:+56993301174">
                            <div class=""><i class="fas fa-phone-alt"></i></div>
                        </a> 
                        <a href="mailto:contacto@fonicokids.cl"><i class="fas fa-envelope"></i></a>
                    </article>
                </section>

                <div class="col-11 col-lg-5 mx-0 mx-lg-3 py-5">
                    @livewire('contact-form')
                </div>
            </div>
        </footer>

        <section class="container-fluid bg_piePagina py-3">
            <div class="row">
                <article class="col-12 color_celeste text-center d-block d-lg-flex  justify-content-center color_fucsia align-items-center">
                    <p class="m-0 piePagina"> <i class="far fa-copyright"></i> @php echo date('Y') @endphp Copyright: fonicokids.cl - Todos los Derechos Reservados -</p> <a href="" class="btn_piePagina px-2">ASD Informáticos</a>  -  <a href="https://www.adrianrios.cl" target="_blank" class="btn_piePagina ps-2">Diseño Adrián Ríos <span><img src="img/logo_ARios.svg" class="ps-2" height="30" alt=""></span></a>
                </article>
            </div>
        </section>




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/menu.js') }}"></script>
        <script src="{{ asset('js/index.bundle.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script type="text/javascript">
            new WOW().init();
        </script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({

  


  duration: 1200, // values from 0 to 3000, with step 50ms
  easing: 'ease-linear', // default easing for AOS animations
  once: true,
  mirror: false,


});
        </script>




        <!-- <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script> -->
        @livewireScripts
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<x-livewire-alert::scripts />
    </body>
</html>
