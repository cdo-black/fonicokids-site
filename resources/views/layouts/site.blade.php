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

        <div id="Contacto" class="container-fluid marg_content_top p-0">
            <img src="img/solapa_contacto.svg" alt="">
        </div>
        <div class="container-fluid bg_azul">
            <div class="row justify-content-center align-items-center">
                <div class="col-11 col-lg-3 text-white text-center mx-0 mx-lg-3 py-5">
                    <img src="img/Logo_fonico_color2.svg" class="pb-5" height="160" alt="">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptatibus nesciunt, soluta voluptatum eligendi nisi esse exercitationem?</p>

                    <div class="info_footer mt-4">
                        <div class="pb-3"><a href="mailto:contacto@fonicokids.cl"><i class="fas fa-envelope"></i>&nbsp;&nbsp; contacto@fonicokids.cl</a></div>
                        <div class="pb-3"><a href="https://api.whatsapp.com/send?phone=56993301174" target="blank"><i class="fab fa-whatsapp"></i>&nbsp;&nbsp; +569 9330 1174</a></div>
                    </div>

                    <div class="rrss_footer d-inline-flex">
                        <a href="/" target="blank">
                            <div class=""><i class="fab fa-facebook-f"></i></div>
                        </a>
                        <a href="/" target="blank">
                            <div class=""><i class="fab fa-instagram"></i></div>
                        </a>
                        <a href="tel:+56993301174">
                            <div class=""><i class="fas fa-phone-alt"></i></div>
                        </a> 
                        <a href="mailto:contacto@bigbang.cl.cl"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <div class="col-11 col-lg-5 mx-0 mx-lg-3 py-5">
                    <form action="">
                        <div class="row justify-content-evenly">
                            <div class="col-12 col-md-6 form-floating mb-4">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Nombres">
                                <label for="floatingInput">Nombres</label>
                            </div>

                            <div class="col-12 col-md-6 form-floating mb-4">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Apellidos">
                                <label for="floatingInput">Apellidos</label>
                            </div>
                            
                            <div class="col-12 col-md-6 form-floating mb-4">
                                <input type="number" class="form-control" id="floatingInput" placeholder="Teléfono">
                                <label for="floatingInput">Teléfono</label>
                            </div>

                            <div class="col-12 col-md-6 form-floating mb-4">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                                <label for="floatingInput">Email</label>
                            </div>

                            <div class="col-12 form-floating mb-4">
                                <textarea  rows="10" class="form-control" id="floatingInput" placeholder="Mensaje" style="resize: none"></textarea>
                                <label for="floatingInput">Mensaje</label>
                            </div>
                        </div>

                        <button type="submit" class="btn_gral mt-4">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ ('js/menu.js') }}"></script>
        <script src="{{ asset('js/index.bundle.min.js') }}"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script> -->
    </body>
</html>
