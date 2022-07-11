@extends('layouts.site')
@section('titulo', 'Nosotros')
@section('nosotros', 'active')

@section('contenido')
    <section class="container-fluid bg_nosotros position-relative p-0">
        <img src="img/Solapa_portada.svg" class="img_solapa_portada" alt="">
        <div class="row">
            <article class="col-12 col-lg-5 text-white text-center box_frase_top">
                <p class="frase_top">...De pequeños comienzos <br> provienen grandes cosas...</p>
            </article>
        </div>
    </section>

    <!-- <div class="container padd_small_top mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="tit_general">Tratamientos</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptate sapiente quidem quis harum ut voluptatibus sunt debitis esse distinctio, autem omnis repellendus accusamus totam quia? Architecto est sunt numquam!</p>
            </div>
        </div>
    </div> -->

    <section class="container-fluid padd_small_top padd_content_bottom">
        <div class="row">
            <article class="col-12 col-lg-4 bg_am_claro text-center p-5 align-content-center d-grid borde_am">
                <h1 class="tit_general pb-3">Nosotros</h1>
                <p>Somos un grupo de fonoaudiólogas con vocación y experiencia en la habilitación y rehabilitación del lenguaje y habla, inicio tardío del lenguaje, y trastornos del lenguaje en edades infantiles. 
            </article>

            <article class="col-12 col-lg-4 bg_fucsia text-center p-5 text-white">
                <h1 class="tit_general">Visión</h1>
                <p>Nuestro objetivo es entregarle a tus hij@s herramientas para expresar sus necesidades y deseos y superar desafíos lingüístico-comunicativos que se presenten durante su infancia. Nuestro trabajo se sustenta en la enseñanza de habilidades comunicativas a través del juego, complementándolo con amor y respeto para propiciar un contexto amigable, cercano y cómodo para los niños y sus cuidadores.</p>

                <h1 class="tit_general pt-5">misión</h1>
                <p>Nuestra misión es mejorar la producción de los sonidos del habla y optimizar la forma en que los niños y niñas se comunican con su entorno, con el fin de mejorar la calidad de vida de nuestros niños.</p>
            </article>

            <article class="col-12 col-lg-4 bg_lila text-center p-5 text-white align-content-center d-grid borde_lila">
                <h1 class="tit_general">Nuestro Trabajo</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quo corrupti suscipit reiciendis qui repudiandae inventore iste quisquam incidunt odit, harum consequuntur, quidem, ipsum possimus aliquid similique explicabo beatae ad?</p>
            </article>
        </div>
    </section>

    <div class="image-grid">
        <section class="container padd_content_bottom">
            <div class="row g-2">
                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_celeste"></div>
                            <img src="img/1.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>

                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_amarillo"></div>
                            <img src="img/2.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>

                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_fucsia"></div>
                            <img src="img/3.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>

                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_celeste"></div>
                            <img src="img/4.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>

                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_amarillo"></div>
                            <img src="img/5.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>

                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_celeste"></div>
                            <img src="img/6.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>
                

                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_violeta"></div>
                            <img src="img/7.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>

                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_fucsia"></div>
                            <img src="img/8.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>

                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_violeta"></div>
                            <img src="img/9.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>

                <article class="col-12 col-md-4 col-lg-3">
                    <figure>
                        <a class="cont_img" href="">
                            <div class="fondo_color bg_fucsia"></div>
                            <img src="img/10.jpg" class="aspect-ratio-1-1" alt="Imagen FonicoKids ejeriendo funciones con niños">
                        </a>
                    </figure>
                </article>
            </div>
        </section>
    </div>

    <div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="container-fluid p-0">
                   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="marg_content_bottom position-relative">
        <div class="container-fluid bg_trabajo_equipo d-flex justify-content-center align-items-center">
            <div class="row p-4 justify-content-center">
                <article class="col-11 col-lg-8 box_ninos text-center">
                    <h1 class="tit_general">Trabajo en Equipo</h1>
                    <p class="fw-bolder m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam doloribus, maioret, consectetur adipisicing elit. Numquam doloribus, maioret, consectetur adipisicing elit. Numquam doloribus, maiores saepe nemo impedit magnam.</p>
                </article>
            </div>
        </div>
        <div class="container-fluid p-0 solapa_inferior">
            <img src="img/solapa_inferior.svg" alt="">
        </div>
    </section>
    <!-- <section class="container-fluid bg_trabajo_equipo position-relative p-0 padd_small_bottom padd_small_top">
        <img src="img/solapa_inferior.svg" class="solapa_inferior" alt="">
        <div class="row">
            <article class="col-11 col-lg-7 text-center box_trabajo_equipo">
                <h1 class="tit_general">Trabajo en Equipo</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam doloribus, maioret, consectetur adipisicing elit. Numquam doloribus, maioret, consectetur adipisicing elit. Numquam doloribus, maiores saepe nemo impedit magnam.</p>
            </article>
        </div>
    </section> -->
@endsection

