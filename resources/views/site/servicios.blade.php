@extends('layouts.site')
@section('titulo', 'Servicios')
@section('servicios', 'active')

@section('contenido')
    <div class="container-fluid bg_servicios position-relative p-0">
        <img src="img/Solapa_portada.svg" class="img_solapa_portada" alt="">
        <div class="row">
            <div class="col-12 col-lg-5 text-white text-center box_frase_top">
                <p class="frase_top">...La comunicación es una ventana de oportunidades...</p>
            </div>
        </div>
    </div>

    <div class="container padd_small_top padd_small_bottom mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="tit_general">Tratamientos</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptate sapiente quidem quis harum ut voluptatibus sunt debitis esse distinctio, autem omnis repellendus accusamus totam quia? Architecto est sunt numquam!</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 bg_amarillo text-white text-center p-5">
                <h1 class="tit_general">Lenguaje</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium ipsam quo odit exercitationem eaque.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg_fucsia text-white text-center p-5">
                <h1 class="tit_general">Habla</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium ipsam quo odit exercitationem eaque.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg_lila text-white text-center p-5">
                <h1 class="tit_general">Voz</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium ipsam quo odit exercitationem eaque.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg_celeste text-white text-center p-5">
                <h1 class="tit_general">...</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, laudantium ipsam quo odit exercitationem eaque.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid padd_small_top padd_small_bottom">
        <div class="row align-items-center justify-content-evenly">
            <div class="col-12 col-md-5 col-lg-4 py-5 text-center">
                <img src="img/img_perfil.png" class="img-fluid" alt="">
            </div>

            <div class="col-12 col-md-5 col-lg-6 py-5 text-center">
                <h1 class="tit_general pb-3">Señales de alerta</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quisquam modi veniam, porro recusandae incidunt voluptatum alias quod obcaecati ipsa perferendis <br><br>

                - Lorem ipsum dolor sit, amet <br>
                - Lorem ipsum dolor sit, amet <br>
                - Lorem ipsum dolor sit, amet <br>
                </p>
            </div>
        </div>
    </div>

    <div class=" position-relative">
        <div class="container-fluid bg_fucsia padd_small_top padd_small_bottom">
            <div class="row align-items-center justify-content-center pb-5">
                <div class="col-12 col-lg-8 color_azul text-center text-white">
                    <h1 class="tit_general">Comenzar tu terapia es fácil</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi iusto reiciendis voluptas iure, beatae ipsam eaque deserunt similique at tempore.</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-evenly">
                <div class="col-11 col-lg-3 text-center color_amarillo box_terapias border_box_amarillo position-relative">
                    <img src="img/num_1.svg" class="box_terapias_numero" height="100" alt="">
                    <h1 class="tit_general">Conversemos</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, voluptatum. Odio qui aliquam veritatis eaque!</p>
                </div>
            
                <div class="col-11 col-lg-3 text-center color_celeste box_terapias border_box_celeste position-relative">
                    <img src="img/num_2.svg" class="box_terapias_numero" height="100" alt="">
                    <h1 class="tit_general">Evaluación</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, voluptatum. Odio qui aliquam veritatis eaque!</p>
                </div>
            
                <div class="col-11 col-lg-3 text-center color_am_claro box_terapias border_box_am_claro position-relative">
                    <img src="img/num_3.svg" class="box_terapias_numero" height="100" alt="">
                    <h1 class="tit_general">Comienzo</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, voluptatum. Odio qui aliquam veritatis eaque!</p>
                </div>

                <div class="text-center mb-5">
                    <a href="https://api.whatsapp.com/send?phone=56993301174" tarjet="blank"><button class="btn_gral mt-3">Conversemos</button></a>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 solapa_inferior">
            <img src="img/solapa_inferior.svg" alt="">
        </div>
    </div>
@endsection