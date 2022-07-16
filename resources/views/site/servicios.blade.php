@extends('layouts.site')
@section('titulo', 'Servicios')
@section('servicios', 'active')

@section('contenido')
    <section class="container-fluid bg_servicios position-relative p-0">
        <img src="img/Solapa_portada.svg" class="img_solapa_portada" alt="">
        <div class="row">
            <article class="col-12 col-lg-5 text-white text-center box_frase_top">
                <p class="frase_top" data-aos="fade-up" data-aos-delay="400">...La comunicación es una ventana de oportunidades...</p>
            </article>
        </div>
    </section>

    <section class="container padd_small_top padd_small_bottom mt-5">
        <div class="row justify-content-center">
            <article class="col-12 col-lg-8 text-center" data-aos="fade-right" data-aos-delay="800">
                <h1 class="tit_general">Tratamientos</h1>
                <p>Utilizamos diversos estímulos para abordar el habla, lenguaje y la comunicación de nuestros niños con el fin de entregar todas las ayudas posibles para obtener resultados positivos.</p>
            </article>
        </div>
    </section>

    <section class="container-fluid">
        <div class="row align-items-center">
            <article class="col-12 col-md-6 col-lg-3 bg_amarillo text-white text-center p-5 box_tratamientos" data-aos="fade-up" data-aos-delay="400">
                <h1 class="tit_general">Estimulo visual</h1>
                <p>Utilizamos mascarillas inclusivas que benefician la visibilidad de los órganos fonoarticulatorios como la boca, los dientes y la lengua.</p>
            </article>

            <article class="col-12 col-md-6 col-lg-3 bg_fucsia text-white text-center p-5 box_tratamientos" data-aos="fade-up" data-aos-delay="800">
                <h1 class="tit_general">Estimulo táctil</h1>
                <p>Hacemos uso, si es necesario, de estrategias de estimulación táctil de los órganos fonoarticulatorios para lograr el fonema objetivo.</p>
            </article>

            <article class="col-12 col-md-6 col-lg-3 bg_lila text-white text-center p-5 box_tratamientos" data-aos="fade-up" data-aos-delay="1000">
                <h1 class="tit_general">Estimulo auditivo</h1>
                <p>Utilizamos entonación lúdica que llama la atención de los niños. Enfatizamos con el tono de voz las palabras objetivo que se trabajan.</p>
            </article>

            <article class="col-12 col-md-6 col-lg-3 bg_celeste text-white text-center p-5 box_tratamientos" data-aos="fade-up" data-aos-delay="1200">
                <h1 class="tit_general">Estimulo cognitivo</h1>
                <p>Entregamos claves informativas que potencian las habilidades comprensivas dentro del contexto comunicativo.</p>
            </article>
        </div>
    </section>

    <section class="container-fluid padd_small_top padd_small_bottom">
        <div class="row align-items-center justify-content-evenly">
            <article class="col-12 col-md-5 col-lg-4 py-5 text-center" data-aos="fade-right" data-aos-delay="400">
                <img src="img/img_perfil.png" class="img-fluid" alt="">
            </article>

            <article class="col-12 col-md-5 col-lg-6 py-5 text-center">
                <h1 class="tit_general pb-3">Diagnósticos a abordar</h1>
                <p>Aplicamos estrategias de intervención en diversos diagnósticos relacionados con el lenguaje, <br> entre ellos: <br><br>

                    &rarr; Trastorno del desarrollo del lenguaje (ex TEL expresivo o mixto). <br> 
                    &rarr; Hablantes tardíos (antes de los 3 años). <br>
                    &rarr; Trastorno de los sonidos del habla TSH. (ex dislalias) <br>
                    &rarr; Apraxia del habla Infantil. <br>
                    &rarr; Trastorno del lenguaje asociado a Trastorno del Espectro Autista. <br>
                    &rarr; Trastorno del lenguaje asociado a Déficit Intelectual. <br>
                    &rarr; Otros trastornos del lenguaje asociados a diagnósticos de base.
                </p>
            </article>
        </div>
    </section>

    <section class="container p-5 bg_convenios marg_content_bottom" data-aos="fade-left" data-aos-delay="400">
        <div class="row justify-content-center">
            <article class="col-12 col-lg-5 text-center border_convenios">
                <h1 class="tit_general pb-5">Convenios</h1>
                <p>
                    &rarr; Convenio con Jardines Infantiles. <br>
                    &rarr; Reembolso con seguro complementario. <br> 
                    &rarr; Valor preferencial Fonasa. <br> 
                </p>
            </article>

            <article class="col-12 col-lg-7 text-center pt-5 pt-lg-0">
                <h1 class="tit_general">Boleta reembolsable en Isapres</h1>
                <img src="img/isapre1.png" class="img_isapres" alt="">
                <img src="img/isapre2.png" class="img_isapres" alt="">
                <img src="img/isapre3.png" class="img_isapres" alt="">
                <img src="img/isapre4.png" class="img_isapres" alt="">
            </article>
        </div>
    </section>

    <div class=" position-relative">
        <section class="container-fluid bg_fucsia padd_small_top padd_small_bottom">
            <div class="row align-items-center justify-content-center pb-5">
                <article class="col-12 col-lg-8 color_azul text-center text-white">
                    <h1 class="tit_general">Comenzar tu terapia es fácil</h1>
                    <p>Si tienes dudas sobre el lenguaje de tu pequeño estos son los pasos a seguir:</p>
                </article>
            </div>
            <section class="row justify-content-evenly">
                <article class="col-11 col-lg-3 text-center color_amarillo box_terapias border_box_amarillo position-relative" data-aos="fade-down">
                    <img src="img/num_1.svg" class="box_terapias_numero" height="100" alt="">
                    <h1 class="tit_general">Evaluación</h1>
                    <p>Se hace una evaluación profunda del lenguaje, habla, comunicación y cognición, en donde se determinarán las fortalezas y barreras del niño. </p>
                </article>
            
                <article class="col-11 col-lg-3 text-center color_celeste box_terapias border_box_celeste position-relative" data-aos="fade-down" data-aos-delay="400">
                    <img src="img/num_2.svg" class="box_terapias_numero" height="100" alt="">
                    <h1 class="tit_general">Plan</h1>
                    <p>Se realiza un plan de tratamiento específico para su hijo o hija según lo observado en la evaluación. Se estima la cantidad de sesiones que se necesitarán. </p>
                </article>
            
                <article class="col-11 col-lg-3 text-center color_am_claro box_terapias border_box_am_claro position-relative" data-aos="fade-down" data-aos-delay="800">
                    <img src="img/num_3.svg" class="box_terapias_numero" height="100" alt="">
                    <h1 class="tit_general">Tratamiento</h1>
                    <p>Se inicia el tratamiento conforme a lo acordado previamente.</p>
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