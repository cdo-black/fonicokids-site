@extends('layouts.site')
@section('titulo', 'Bienvenidos')
@section('inicio', 'active')

@section('contenido')
    <section class="container-fluid bg_inicio d-flex align-items-center justify-content-center padd_content_top padd_small_bottom">
        <div class="row align-items-center justify-content-center">
            <article class="col-12 col-md-5 col-lg-4 text-white text-center text-md-start order-1 pb-5 ">
                <h1 class="tit_top">Jugando </h1>
                <h2 class="tit_top2 pb-3">nos comunicamos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium explicabo odio repellendus repudiandae odit fugiat minus nihil at consequuntur earum.</p>
                <article>
                    <a href="https://api.whatsapp.com/send?phone=56993301174" tarjet="blank"><button class="btn_gral mt-3">Conversemos</button></a>
                </article>

                <article class="redes_sociales d-inline-flex pt-5">
                    <a href="/" target="_blank">
                        <div class=""><i class="fab fa-facebook-f"></i></div>
                    </a>
                    <a href="/" target="_blank">
                        <div class=""><i class="fab fa-instagram"></i></div>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=56993301174" target="_blank">
                        <div class=""><i class="fab fa-whatsapp"></i></div>
                    </a> 
                    <a href="mailto:contacto@bfonicokids.cl"><i class="fas fa-envelope"></i></a>
                </article>
            </article>

            <article class="col-12 col-md-6 col-lg-5 order-md-1 pb-5 position-relative">
                <img src="img/top_nina1.png" class="img-fluid img_nina1" alt="Niña Fonicokids">
                <img src="img/top_nina2.png" class="img-fluid img_nina2" alt="Niña Fonicokids">
            </article>
        </div>
    </section>

    <section class="container padd_small_bottom">
        <div class="row justify-content-evenly align-items-center pt-5">
            <article class="col-12 col-md-5 col-lg-3 text-center text-md-start">
                <img src="img/Logo_fonico_color.svg" height="200" alt="">
            </article>

            <article class="col-12 col-md-6 col-lg-6 pt-5 text-center">
                <h1 class="tit_general pb-3">Fonicokids</h1>
                <p>Las profesionales de Fonicokids fundamentamos nuestra terapia en el juego ya que sabemos que es necesario estar contento para aprender mejor. Esto se explica debido a que mientras los niños juegan y se entretienen liberan un neurotransmisor llamado serotonina, comúnmente llamada “hormona de la felicidad”, participando activamente en los procesos de adquisición de nuevo aprendizaje. <br><br>
                Es por esto que en nuestras sesiones de trabajo, jugamos con tu hijo guiando este juego hacia un objetivo terapéutico, combinando los contenidos de tratamiento con actividades de juego de roles, imaginación, motricidad gruesa/fina, canciones, y un largo etcétera que de seguro te interesará conocer.
                </p>
            </article>
        </div>
    </section>

    <section class="container-fluid bg_am_claro py-5">
        <div class="row align-items-center justify-content-evenly">
            <article class="col-12 col-md-5 col-lg-4 py-5 text-center">
                <img src="img/img_fono.png" class="img-fluid" alt="">
            </article>

            <article class="col-11 col-lg-6 py-5">
                <h1 class="tit_general pb-3 text-center">¿Cuándo ver a un Fonoaudiólogo?</h1>
                <p class="text-center">Claro está que cada niño es distinto y cada uno tiene sus propios tiempos y ritmos de aprendizaje, sin embargo estos hitos tienen flexibilidad en cuanto al tiempo de aparición, por lo que resulta necesario estar alerta ante ciertas señales de alarma que sobrepasen en demasía los rangos normales, para estimular tempranamente si es que fuera necesario. <br><br>
                </p>

                <p class="text-center text-lg-start">
                    <span class="fw-bold"> Solicita una evaluación si :</span> <br> <br> 
                    &rarr;  Tu hijo tiene 2 años y dice menos de 50 palabras. <br> 
                    &rarr;  Tu hijo tiene 3 años o más y pide las cosas apuntando. <br>
                    &rarr;  Tu hijo tiene 3 años o más y solo la familia cercana le entiende. <br>
                    &rarr;  Tu hijo tiene 3 años o más y no comprende preguntas como: ¿Quién está en el sillón? O ¿Qué está comiendo el gato?. <br>
                    &rarr;  Tu hijo tiene más de 4 y cambia algún fonema por otro. Ej: /Tasa/ por /Casa/, /Topa/ por /Sopa/ o cualquier cambio de fonema por otro que provoque poca comprensión de lo que dice.<br>
                    &rarr;  Tu hijo tiene 5 años o más y no produce palabras con /r/ como /peRa, coRazón) y dífonos con /r/ como: PRima, DRama, FRuta. <br>
                    &rarr;  Tu hijo tiene más de 5 años y no produce palabras con /rr/ como: Ratón, Roberto, peRRo. <br>
                    &rarr;  Tu hijo tiene 5 años o más y no produce palabras con dífonos con /L/ como: PLátano, FLaca.<br>
                    &rarr;  Tu hijo tiene 6 años y ves dificultades en la iniciación de la lectura y la escritura. <br>
                </p>

                <div class="text-center">
                    <a href="https://api.whatsapp.com/send?phone=56993301174" target="blank"><button class="btn_gral mt-3">Conversemos</button></a>
                </div>
            </article>
        </div>
    </section>

    <main class="container-fluid padd_content_top padd_content_bottom mt-4">
        <div class="row justify-content-center">
            <section class="col-10 col-sm-5 col-md-5 col-lg-2 bg_azul text-white text-center px-0 border_main sombra">
                <article class="box_icon">
                    <img src="img/main_info_top1.svg" class="" alt="">
                    <img src="img/icon_1.svg" height="90" class="icon_info_main" alt="">
                </article>

                <h1 class="tit_info_main py-3 px-3">aprende con <br>Nosotros</h1>
                <p class="px-3 pb-5">Adquiere herramientas de estimulación del lenguaje para aplicar con tus hij@s en todo momento</p>
            </section>

            <section class="col-10 col-sm-5 col-md-5 col-lg-2 bg_azul text-white text-center px-0 border_main sombra">
                <article class="box_icon">
                    <img src="img/main_info_top2.svg" class="" alt="">
                    <img src="img/icon_2.svg" height="90" class="icon_info_main" alt="">
                </article>

                <h1 class="tit_info_main py-3 px-3">Diversión <br>Garantizada</h1>
                <p class="px-3 pb-5">Con nuestras fonoaudiólogas tu pequeño se olvidará de que está aprendiendo, disfrutará y querrá volver a jugar y divertirse</p>
            </section>

            <section class="col-10 col-sm-5 col-md-5 col-lg-2 bg_azul text-white text-center px-0 border_main sombra">
                <article class="box_icon">
                    <img src="img/main_info_top3.svg" class="" alt="">
                    <img src="img/icon_3.svg" height="90" class="icon_info_main" alt="">
                </article>

                <h1 class="tit_info_main py-3 px-3">Seguridad y <br>Protección</h1>
                <p class="px-3 pb-5">Contamos con profesionales con vocación, formadas en crianza respetuosa y manejo de conductas disruptivas que aseguran la integridad de su hij@</p>
            </section>

            <section class="col-10 col-sm-5 col-md-5 col-lg-2 bg_azul text-white text-center px-0 border_main sombra">
                <article class="box_icon">
                    <img src="img/main_info_top4.svg" class="" alt="">
                    <img src="img/icon_4.svg" height="90" class="icon_info_main" alt="">
                </article>

                <h1 class="tit_info_main py-3 px-3">Comunicación <br>Directa</h1>
                <p class="px-3 pb-5">Te ofrecemos trabajar en conjunto con tu terapeuta y tener un feedback diario a través de Whatsapp sin costo adicional<p>
            </section>
        </div>
    </main>

    <section class="marg_content_bottom position-relative">
        <div class="container-fluid bg_ninos d-flex justify-content-center align-items-center">
            <div class="row p-4 my-5 justify-content-center">
                <article class="col-11 col-lg-8 box_ninos text-center">
                    <h1 class="tit_general">Lo mejor para nuestros Hijos</h1>
                    <p class="fw-bolder m-0">Como profesionales de la salud y educación queremos ayudarte a mejorar la calidad de vida de tu hijo o hija, minimizando las barreras que tiene en relación al lenguaje, habla, comunicación y/o cognición. Queremos ayudar a tu hijo a adquirir herramientas para sentirse más seguro de sí mismo, disminuir la frustración y a disfrutar plenamente este período tan valioso de la vida que es la infancia. Entendemos que para la familia es necesario tener una red de apoyo sólida en relación a la estimulación de su hijo, y queremos ser parte de ese círculo entregándote la confianza y cercanía para que te sientas a gusto con tu terapeuta.</p>
                </article>
            </div>
        </div>
        <div class="container-fluid p-0 solapa_inferior">
            <img src="img/solapa_inferior.svg" alt="">
        </div>
    </section>
    
@endsection