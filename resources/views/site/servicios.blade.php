@extends('layouts.site')
@section('titulo', 'Servicios')
@section('servicios', 'active')

@section('contenido')
    <section class="container-fluid bg_servicios position-relative p-0">
        <img src="img/Solapa_portada.svg" class="img_solapa_portada" alt="">
        <div class="row">
            <article class="col-12 col-lg-5 text-white text-center box_frase_top">
                <p class="frase_top">...La comunicación es una ventana de oportunidades...</p>
            </article>
        </div>
    </section>

    <section class="container padd_small_top padd_small_bottom mt-5">
        <div class="row justify-content-center">
            <article class="col-12 col-lg-8 text-center">
                <h1 class="tit_general">Tratamientos</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptate sapiente quidem quis harum ut voluptatibus sunt debitis esse distinctio, autem omnis repellendus accusamus totam quia? Architecto est sunt numquam!</p>
            </article>
        </div>
    </section>

    <section class="container-fluid">
        <div class="row align-items-center">
            <article class="col-12 col-md-6 col-lg-3 bg_amarillo text-white text-center p-5 box_tratamientos">
                <h1 class="tit_general">Lenguaje</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium ipsam quo odit exercitationem eaque.</p>
            </article>

            <article class="col-12 col-md-6 col-lg-3 bg_fucsia text-white text-center p-5 box_tratamientos">
                <h1 class="tit_general">Habla</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium ipsam quo odit exercitationem eaque.</p>
            </article>

            <article class="col-12 col-md-6 col-lg-3 bg_lila text-white text-center p-5 box_tratamientos">
                <h1 class="tit_general">Voz</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium ipsam quo odit exercitationem eaque.</p>
            </article>

            <article class="col-12 col-md-6 col-lg-3 bg_celeste text-white text-center p-5 box_tratamientos">
                <h1 class="tit_general">...</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium ipsam quo odit exercitationem eaque.</p>
            </article>
        </div>
    </section>

    <section class="container-fluid padd_small_top padd_small_bottom">
        <div class="row align-items-center justify-content-evenly">
            <article class="col-12 col-md-5 col-lg-4 py-5 text-center">
                <img src="img/img_perfil.png" class="img-fluid" alt="">
            </article>

            <article class="col-12 col-md-5 col-lg-6 py-5 text-center">
                <h1 class="tit_general pb-3">Señales de alerta</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quisquam modi veniam, porro recusandae incidunt voluptatum alias quod obcaecati ipsa perferendis <br><br>

                &rarr; Lorem ipsum dolor sit, amet <br>
                &rarr; Lorem ipsum dolor sit, amet <br>
                &rarr; Lorem ipsum dolor sit, amet <br>
                </p>
            </article>
        </div>
    </section>

    <div class="container p-5 bg_convenios marg_content_bottom">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 text-center border_convenios">
                <h1 class="tit_general pb-5">Convenios</h1>
                <p>
                    &rarr; Convenio con Jardines Infantiles. <br>
                    &rarr; Reembolso con seguro complementario. <br> 
                    &rarr; Valor preferencial Fonasa. <br> 
                </p>
            </div>

            <div class="col-12 col-lg-7 text-center pt-5 pt-lg-0">
                <h1 class="tit_general">Boleta reembolsable en Isapres</h1>
                <img src="img/isapre1.png" class="img_isapres" alt="">
                <img src="img/isapre2.png" class="img_isapres" alt="">
                <img src="img/isapre3.png" class="img_isapres" alt="">
                <img src="img/isapre4.png" class="img_isapres" alt="">
            </div>
        </div>
    </div>

    <div class=" position-relative">
        <section class="container-fluid bg_fucsia padd_small_top padd_small_bottom">
            <div class="row align-items-center justify-content-center pb-5">
                <article class="col-12 col-lg-8 color_azul text-center text-white">
                    <h1 class="tit_general">Comenzar tu terapia es fácil</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi iusto reiciendis voluptas iure, beatae ipsam eaque deserunt similique at tempore.</p>
                </article>
            </div>
            <section class="row align-items-center justify-content-evenly">
                <article class="col-11 col-lg-3 text-center color_amarillo box_terapias border_box_amarillo position-relative">
                    <img src="img/num_1.svg" class="box_terapias_numero" height="100" alt="">
                    <h1 class="tit_general">Conversemos</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, voluptatum. Odio qui aliquam veritatis eaque!</p>
                </article>
            
                <article class="col-11 col-lg-3 text-center color_celeste box_terapias border_box_celeste position-relative">
                    <img src="img/num_2.svg" class="box_terapias_numero" height="100" alt="">
                    <h1 class="tit_general">Evaluación</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, voluptatum. Odio qui aliquam veritatis eaque!</p>
                </article>
            
                <article class="col-11 col-lg-3 text-center color_am_claro box_terapias border_box_am_claro position-relative">
                    <img src="img/num_3.svg" class="box_terapias_numero" height="100" alt="">
                    <h1 class="tit_general">Comienzo</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, voluptatum. Odio qui aliquam veritatis eaque!</p>
                </article>

                <article class="text-center mb-5">
                    <a href="https://api.whatsapp.com/send?phone=56993301174" tarjet="blank"><button class="btn_gral my-5">Conversemos</button></a>
                </article>
            </section>
        </section>
        <article class="container-fluid p-0 solapa_inferior">
            <img src="img/solapa_inferior.svg" alt="">
        </article>
    </div>
@endsection