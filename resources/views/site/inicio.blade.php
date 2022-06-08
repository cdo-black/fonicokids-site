@extends('layouts.site')
@section('titulo', 'Bienvenidos')
@section('inicio', 'active')

@section('contenido')
    <div class="container-fluid bg_inicio d-flex align-items-center justify-content-center padd_content_top padd_small_bottom">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-5 col-lg-4 text-white text-center text-md-start order-1 pb-5 ">
                <h1 class="tit_top">Jugando </h1>
                <h2 class="tit_top2 pb-3">nos comunicamos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium explicabo odio repellendus repudiandae odit fugiat minus nihil at consequuntur earum.</p>
                <div>
                    <a href="https://api.whatsapp.com/send?phone=56993301174" tarjet="blank"><button class="btn_gral mt-3">Conversemos</button></a>
                </div>

                <div class="redes_sociales d-inline-flex pt-5">
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
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 order-md-1 pb-5 position-relative">
                <img src="img/top_nina1.png" class="img-fluid img_nina1" alt="">
                <img src="img/top_nina2.png" class="img-fluid img_nina2" alt="">
            </div>
        </div>
    </div>

    <div class="container padd_small_bottom">
        <div class="row justify-content-evenly align-items-center pt-5">
            <div class="col-12 col-md-5 col-lg-3 text-center text-md-start">
                <img src="img/Logo_fonico_color.svg" height="200" alt="">
            </div>

            <div class="col-12 col-md-6 col-lg-6 pt-5 text-center">
                <h1 class="tit_general pb-3">Fonicokids</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero cupiditate similique quis nobis, ipsam autem culpa? Perferendis, dolore, expedita, sit quasi beatae ipsam ab earum corrupti culpa esse nam pariatur ipsa autem quidem. Delectus perspiciatis commodi enim praesentium error provident.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg_am_claro py-5">
        <div class="row align-items-center justify-content-evenly">
            <div class="col-12 col-md-5 col-lg-4 py-5 text-center">
                <img src="img/img_fono.png" class="img-fluid" alt="">
            </div>

            <div class="col-12 col-md-5 col-lg-6 py-5 text-center">
                <h1 class="tit_general pb-3">¿Cuándo ver a un Fonoaudiólogo?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quisquam modi veniam, porro recusandae incidunt voluptatum alias quod obcaecati ipsa perferendis 

                - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore sint ipsam eos non, alias ex! <br><br> 
                - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore sint ipsam eos non, alias ex! <br><br> 
                - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore sint ipsam eos non, alias ex! <br><br> 
                </p>

                <div>
                    <a href="https://api.whatsapp.com/send?phone=56993301174" target="blank"><button class="btn_gral mt-3">Conversemos</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid padd_content_top padd_content_bottom mt-4">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-5 col-md-5 col-lg-2 bg_azul text-white text-center px-0 border_main sombra">
                <div class="box_icon">
                    <img src="img/main_info_top1.svg" class="" alt="">
                    <img src="img/icon_1.svg" height="90" class="icon_info_main" alt="">
                </div>

                <h1 class="tit_info_main py-3 px-3">aprende con <br>Nosotros</h1>
                <p class="px-3 pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores velit, debitis soluta numquam vero?</p>
            </div>

            <div class="col-10 col-sm-5 col-md-5 col-lg-2 bg_azul text-white text-center px-0 border_main sombra">
                <div class="box_icon">
                    <img src="img/main_info_top2.svg" class="" alt="">
                    <img src="img/icon_2.svg" height="90" class="icon_info_main" alt="">
                </div>

                <h1 class="tit_info_main py-3 px-3">Diversión <br>Garantizada</h1>
                <p class="px-3 pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores velit, debitis soluta numquam vero?</p>
            </div>

            <div class="col-10 col-sm-5 col-md-5 col-lg-2 bg_azul text-white text-center px-0 border_main sombra">
                <div class="box_icon">
                    <img src="img/main_info_top3.svg" class="" alt="">
                    <img src="img/icon_3.svg" height="90" class="icon_info_main" alt="">
                </div>

                <h1 class="tit_info_main py-3 px-3">Seguridad y <br>Protección</h1>
                <p class="px-3 pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores velit, debitis soluta numquam vero?</p>
            </div>

            <div class="col-10 col-sm-5 col-md-5 col-lg-2 bg_azul text-white text-center px-0 border_main sombra">
                <div class="box_icon">
                    <img src="img/main_info_top4.svg" class="" alt="">
                    <img src="img/icon_4.svg" height="90" class="icon_info_main" alt="">
                </div>

                <h1 class="tit_info_main py-3 px-3">Comunicación <br>Directa</h1>
                <p class="px-3 pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores velit, debitis soluta numquam vero?</p>
            </div>
        </div>
    </div>

    <div class="marg_content_bottom position-relative">
        <div class="container-fluid bg_ninos  d-flex">
            <div class="row p-4 justify-content-center align-items-center">
                <div class="col-11 col-lg-8 box_ninos me-0 me-lg-5 text-center">
                    <h1 class="tit_general">Lo mejor para nuestros Hijos</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam doloribus, maioret, consectetur adipisicing elit. Numquam doloribus, maioret, consectetur adipisicing elit. Numquam doloribus, maiores saepe nemo impedit magnam.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 solapa_inferior">
            <img src="img/solapa_inferior.svg" alt="">
        </div>
    </div>
    
@endsection