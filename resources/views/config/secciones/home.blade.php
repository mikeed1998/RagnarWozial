@extends('layouts.admin')

@section('extraCSS')
    
    <style>

        body { background-color: #e5e8eb  !important; }

        .card-header { background-color: #b0c1d1  !important; }

        .black-skin
        .btn-primary { background-color: #b0c1d1  !important; }

        .btn {
            box-shadow: none;
            border-radius: 15px;
        }

    </style>

<style>
    /* Estilos para el carrusel */
    .slider-nav {
        position: relative;
    }

    /* Estilos para los dots */
    .slider-nav .slick-dots {
        display: flex; /* Mostrar los dots en línea */
        justify-content: center; /* Centrar los dots horizontalmente */
        list-style: none; /* Eliminar estilos de lista */
        padding: 0; /* Eliminar padding de la lista */
        margin-top: 30px; /* Espacio superior para separar del contenido */
        cursor: pointer;
    }

    .slider-nav .slick-dots li {
        margin: 0 5px; /* Espacio entre cada dot */
    }

    /* Estilos para las flechas */
    .slider-nav .slick-prev,
    .slider-nav .slick-next {
        position: absolute; /* Posición absoluta para las flechas */
        top: 94.5%; /* Alinear verticalmente al centro */
        transform: translateY(-50%); /* Ajuste para centrar verticalmente */
        z-index: 1000; /* Z-index alto para que estén encima de los dots */
        background-color: rgba(255, 255, 255, 0.5); /* Fondo semi-transparente */
        padding: 0 20px; /* Espaciado interno */
        /* border-radius: 50%; */
        border: 0;
        cursor: pointer; /* Cambiar cursor */
    }

    .slider-nav .slick-prev {
        left: -30px; /* Posicionar flecha izquierda */
    }

    .slider-nav .slick-next {
        right: -30px; /* Posicionar flecha derecha */
    }


    .alto-slider_servicios--texto {
        writing-mode: vertical-lr; 
        transform: rotate(180deg);
    }

    .link-slider_servicio {
        text-decoration: none;
        color: #0F0743;
    }

    .link-slider_servicio:hover {
        color: #028AE8;
    }

    .alto-slider_servicios: {
        color: #0F0743;
    }

    .alto-slider_servicios:hover {
        color: #028AE8;
    }

    .imagen-media {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        width: 100%;
        filter: brightness(0.4);
    }

    .imagen-contacto {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        width: 100%;
    }

    .cont-formulario {
        background-color: #FFFFFF;
        border-radius: 1rem;
        box-shadow: 0 0 3re m rgba(0, 0, 0, 0.2);
    }

    .input-group-text {
        font-size: 0.75rem;
        background-color: #0F0743; 
        color: #FFFFFF;
        border: 1px solid #0F0743;
    }

    .input-form {
        color:#0F0743;
        font-weight: 500;
        border: 1px solid #0F0743;
        outline: none;
    }

    .boton-form {
        background-color:#028AE8; 
        color:#FFFFFF;
    }

    .boton-form:hover {
        background-color:#0F0743; 
        color:#FFFFFF;
    }

    .boton-form:focus {
        background-color:#FFFFFF; 
        color:#000000;
    }

    @media(min-width: 992px) {
        .slider-container {
            height: 34rem;
        }

        .img-slider_principal {
            width: 1800px;
            height: 37rem;
        }

        .tarjeta-nosotros {
            height: 24rem; 
            margin-top: 3rem;
        }

        .texto-nosotros {
            color:#0F0743; 
            line-height: 1.2; 
            text-align: justify;
        }

        .alto-slider_servicios {
            height: 410px;
        }

        .imagen-media {
            height: 700px;
        }

        .imagen-contacto {
            height: 560px;
        }

        .contacto-grande {
            display: show;
        }

        .contacto-chico {
            display: none;
        }

        .container-servicios {
            margin-top: 4rem;
        }
    } 

    @media(min-width: 576px) and (max-width: 992px) {
        .slider-container {
            height: 35rem;
        }

        .img-slider_principal {
            width: 1800px;
            height: 28rem;
        }

        .tarjeta-nosotros {
            height: 18rem; 
            margin-top: 2rem;
        }

        .texto-nosotros {
            font-size: 0.9rem;
            color:#0F0743; 
            line-height: 1.1; 
            text-align: justify;
        }

        .alto-slider_servicios {
            height: 400px;
        }

        .imagen-media {
            height: 500px;
        }   

        .imagen-contacto {
            height: 400px;
        }

        .contacto-grande {
            display: none;
        }

        .contacto-chico {
            display: show;
        }

        .container-servicios {
            margin-top: 16rem;
        }
    }

    @media(min-width: 0px) and (max-width: 576px) {
        .slider-container {
            height: 23rem;
        }

        .img-slider_principal {
            width: 1800px;
            height: 16rem;
        }

        .tarjeta-nosotros {
            height: auto; 
            margin-top: 13rem;
        }

        .texto-nosotros {
            font-size: 0.9rem;
            color:#0F0743; 
            line-height: 1.1; 
            text-align: justify;
        }

        .alto-slider_servicios {
            height: 400px;
        }

        .imagen-media {
            height: 300px;
        }

        .contacto-grande {
            display: none;
        }

        .contacto-chico {
            display: show;
        }

        .container-servicios {
            margin-top: 40rem;
        }
    }

</style>

<style>
    .file-upload input[type="file"], .file-upload2 input[type="file"] {
        position: absolute;
        left: -9999px;
    }

    .file-upload label, .file-upload2 label {
        display: inline-block;
        background-color:#028AE8;
        color: #fff;
        padding: 6px 12px;
        cursor: pointer;
        border-radius: 4px;
        font-weight: normal;
        opacity: 0%;
    }

    .file-upload input[type="file"] + label:before, .file-upload2 input[type="file"] + label:before {
        content: "\f07b";
        font-family: "Font Awesome 5 Free";
        font-size: 16px;
        margin-right: 5px;
        transition: all 0.5s;
    }

    .file-upload input[type="file"] + label, .file-upload2 input[type="file"] + label {
        transition: all 0.5s;
    }

    .file-upload input[type="file"]:focus + label, .file-upload2 input[type="file"]:focus + label,
    .file-upload input[type="file"] + label:hover, .file-upload2 input[type="file"] + label:hover {
        backdrop-filter: blur(5px);
        background-color: #53D0F0;
        opacity: 100%;
        transition: all 0.5s;
    }
</style>

@endsection

@section('content')

    <div class="row mt-5 mb-4 px-2">
        <a href="{{ route('front.admin') }}" class="mt-5 col col-md-2 btn btn-sm btn-dark mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col px-0 position-relative slider-container">
                <div class="row">
                    <div class="slider_imagenes px-0">
                        @forelse ($sliders as $sp)
                            <div class="col-12"> 
                                <img src="{{ asset('img/photos/sliders/'.$sp->imagen) }}" alt="slider" class="img-fluid img-slider_principal">
                            </div>
                        @empty
                            <div class="col-12"> 
                                <img src="{{ asset('img/photos/home/Slider.png') }}" alt="slider" class="img-fluid img-slider_principal">
                            </div>
                        @endforelse
                    </div>
                </div>
               
            </div>
        </div>

        <div class="row">
            <div class="col-lg-11 mx-auto tarjeta-nosotros col-md-11 col-11 bg-white shadow-lg position-relative" style="border-radius: 16px;">
                <div class="col-12 mx-auto position-absolute top-100 start-0 " style="margin-top: -6px; text-align: center;">
                    <div class="row">
                        <div class="col-8 mx-auto">
                            <img src="{{ asset('img/photos/home/Barra.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col position-relative">
                        
                        <div class="row mt-5 ms-lg-4 ms-md-0 ms-0">
                            <div class="col-11 mx-auto">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-12 mt-lg-0 mt-md-0 mt-0">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12" style="color: #028AE8; line-height: 1; font-size: 2.6rem;">
                                                <input type="text" class="form-control editarajax" data-model="Elemento" data-field="texto" data-id="{{ $elem_general[0]->id }}" value="{{ $elem_general[0]->texto }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 py-2 texto-nosotros">
                                                <textarea class="form-control text-start editarajax" name="" id="" cols="30" rows="6"  data-model="Elemento" data-field="texto" data-id="{{ $elem_general[1]->id }}">
                                                    {{ $elem_general[1]->texto }}
                                                </textarea>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-9 col-12 mt-4">
                                                <a href="" class="btn border w-100 py-2" style="background-color: #0F0743; color: #FFFFFF;">VER MÁS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="row mt-md-0 mt-4 mb-lg-0 mb-md-0 mb-5">
                                            <div class="col-md-11 col-12 mx-auto position-relative">
                                                <img src="{{ asset('img/photos/imagenes_estaticas/'.$elem_general[2]->imagen) }}" alt="quienes_somos" class="img-fluid w-100" style="border-radius: 16px;">
                                                <div class="col-9 position-absolute top-50 start-50 translate-middle">
                                                    <form id="form_img_perfil" action="{{ route('ajax.cambiar_imagen') }}" method="POST" class="file-upload" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id_imagen" value="{{ $elem_general[2]->id }}">
                                                        <input type="hidden" name="tipo_imagen" value="contacto_home">
                                                        <input id="img_perfil" class="m-0 p-0" type="file" name="archivo">
                                                        <label class="col-12 m-0 px-2 d-flex justify-content-center align-items-center" for="img_perfil" style=" height: 30px; opacity: 100%; border-radius: 20px;">Actualizar Imagen</label>
                                                    </form>
                                                    <script>
                                                        $('#img_perfil').change(function(e) {
                                                            $('#form_img_perfil').trigger('submit');
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <div class="container-fluid container-servicios mb-5">
        <div class="row mb-5">
            <div class="col">
                <div class="row">
                    <div class="col text-center py-lg-3 py-2 display-2 fw-bolder" style="color: #0F0743;">
                        SERVICIOS
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-9 mx-auto" style="border-bottom: 3px solid #0287DA;"> </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-1 col-md-2 col-4 mx-auto" style="border-bottom: 3px solid #0287DA;"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-lg-9 col-md-11 col-11 mx-auto">
                <div class="row">
                    <div class="slider-nav col-lg-3 col-12">
                        @php
                            $cont = 1;
                        @endphp
                        @foreach ($servicios as $s_nav)
                        <a href="#/" class="col-4 border-start border-info border-3 alto-slider_servicios link-slider_servicio" data-target="slider-01">
                            <div class="row">
                                <div class="col text-center fs-3 fw-bolder">
                                    {{ $cont++ }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col position-relative text-center d-flex aling-items-center justify-content-center alto-slider_servicios--texto">
                                    <div style="height: 400px; text-transform: uppercase; margin-top: -160px; margin-left: 5px;" 
                                         class="col-4 fs-5 fw-bolder position-absolute top-0 start-50 translate-middle">
                                        {{ $s_nav->titulo }}
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        
                        
                    </div>
                    <div class="slider-for col-lg-8 col-12">
                        
                        @foreach ($servicios as $serv)
                        <div class="col-8 py-5 alto-slider_servicios position-relative slider-content" id="slider-01">
                            <div class="col-12 position-absolute top-0 start-0 alto-slider_servicios" style="
                                background-image: url('{{ asset('img/photos/servicios/'.$serv->portada) }}');
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: cover;
                                border-top-right-radius: 32px; 
                                border-bottom-right-radius: 32px;
                                filter: brightness(0.4);
                            "></div>
                            <div class="col-12 position-absolute top-50 start-50 translate-middle z-3">
                                <div class="row">
                                    <div class="col-10 mx-auto">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-12 col-12 ms-auto">
                                                <div class="row">
                                                    <div class="col text-white fs-1 text-end" style="line-height: 1.1;">
                                                        {{ $serv->titulo }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-end text-white py-3" style="line-height: 1;">
                                                        {!! $serv->descripcion !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-8"></div>
                                                    <div class="col-lg-6 col-12">
                                                        <a href="{{ route('front.servicio', ['id' => $serv->id]) }}" class="btn btn-outline text-white py-2 w-100" style="background-color: #028AE8;">VER MÁS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col mt-5 px-0">
                <div class="row">
                    <div class="col position-relative imagen-media" style="
                        background-image: url('{{ asset('img/photos/imagenes_estaticas/'.$elem_general[3]->imagen) }}');
                    ">
                        <div class="col-6 position-absolute top-100 start-50 translate-middle" style="margin-top: -10px;">
                            <img src="{{ asset('img/photos/home/barra_invertida.png') }}" alt="">
                        </div>
                        <div class="col-9 position-absolute top-50 start-50 translate-middle">
                            <form id="form_img_perfil2" action="{{ route('ajax.cambiar_imagen') }}" method="POST" class="file-upload" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_imagen" value="{{ $elem_general[3]->id }}">
                                <input type="hidden" name="tipo_imagen" value="contacto_home">
                                <input id="img_perfil2" class="m-0 p-0" type="file" name="archivo">
                                <label class="col-12 m-0 px-2 d-flex justify-content-center align-items-center" for="img_perfil2" style=" height: 30px; opacity: 100%; border-radius: 20px;">Actualizar Imagen</label>
                            </form>
                            <script>
                                $('#img_perfil2').change(function(e) {
                                    $('#form_img_perfil2').trigger('submit');
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #028AE8;">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-6 py-lg-0 py-md-3 py-3">
                <div class="row">
                    <div class="col position-relative text-center">
                        <img src="{{ asset('img/photos/home/Marco.png') }}" alt="" class="img-fluid">
                        <div class="col-12 position-absolute top-50 start-50 translate-middle">
                            <img src="{{ asset('img/photos/home/Icono_01.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col py-2 text-center">
                        <div class="row">
                            <div class="col-7 mx-auto" style="color:#0F0743; font-weight:700;">
                                Capacitados para la seguridad privada
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6 py-lg-0 py-md-3 py-3">
                <div class="row">
                    <div class="col position-relative text-center">
                        <img src="{{ asset('img/photos/home/Marco.png') }}" alt="" class="img-fluid">
                        <div class="col-12 position-absolute top-50 start-50 translate-middle">
                            <img src="{{ asset('img/photos/home/Icono_02.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col py-2 text-center">
                        <div class="row">
                            <div class="col-7 mx-auto" style="color:#0F0743; font-weight:700;">
                                Capacitados para la seguridad privada
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6 py-lg-0 py-md-3 py-3">
                <div class="row">
                    <div class="col position-relative text-center">
                        <img src="{{ asset('img/photos/home/Marco.png') }}" alt="" class="img-fluid">
                        <div class="col-12 position-absolute top-50 start-50 translate-middle">
                            <img src="{{ asset('img/photos/home/Icono_03.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col py-2 text-center">
                        <div class="row">
                            <div class="col-7 mx-auto" style="color:#0F0743; font-weight:700;">
                                Capacitados para la seguridad privada
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6 py-lg-0 py-md-3 py-3">
                <div class="row">
                    <div class="col position-relative text-center">
                        <img src="{{ asset('img/photos/home/Marco.png') }}" alt="" class="img-fluid">
                        <div class="col-12 position-absolute top-50 start-50 translate-middle">
                            <img src="{{ asset('img/photos/home/Icono_04.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col py-2 text-center">
                        <div class="row">
                            <div class="col-7 mx-auto" style="color:#0F0743; font-weight:700;">
                                Capacitados para la seguridad privada
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid contacto-grande">
        <div class="row">
            <div class="col px-0">
                <div class="row">
                    <div class="col position-relative imagen-contacto" style="
                        background-image: url('{{ asset('img/photos/imagenes_estaticas/'.$elem_general[4]->imagen) }}');
                    ">
                        <div class="col-4 position-absolute top-50 start-0">
                            <form id="form_img_perfil3" action="{{ route('ajax.cambiar_imagen') }}" method="POST" class="file-upload" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_imagen" value="{{ $elem_general[4]->id }}">
                                <input type="hidden" name="tipo_imagen" value="contacto_home">
                                <input id="img_perfil3" class="m-0 p-0" type="file" name="archivo">
                                <label class="col-12 m-0 px-2 d-flex justify-content-center align-items-center" for="img_perfil3" style=" height: 30px; opacity: 100%; border-radius: 20px;">Actualizar Imagen</label>
                            </form>
                            <script>
                                $('#img_perfil3').change(function(e) {
                                    $('#form_img_perfil3').trigger('submit');
                                });
                            </script>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-3 col-md-12 col-12 py-5"></div>
                            <div class="col-lg-9 col-md-9 col-11 mx-auto">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 col-11 cont-formulario py-3 mx-auto">
                                        <div class="row">
                                            <div class="col-10 px-0 py-3 mx-auto">
                                                <div class="row">
                                                    <div class="col fs-1 py-2" style="color: #0F0743;">
                                                        PONTE EN CONTACTO
                                                    </div>
                                                </div>
                                                <form action="{{ route('formularioContact') }}" method="POST" class="row form-group" id="fomulario-home_grande">
                                                    @csrf
                                                    <input type="hidden" name="tipoForm" value="home">
                                                    <div class="col-lg-6 col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-nombre">NOMBRE</span>
                                                            <input required type="text" name="nombre" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-nombre">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-empresa">EMPRESA</span>
                                                            <input required type="text" name="empresa" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-empresa">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-email">EMAIL</span>
                                                            <input required type="text" name="email" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">WHATSAPP</span>
                                                            <input required type="number" name="whatsapp" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-2 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">MENSAJE</span>
                                                            <input required type="text" name="mensaje" class="form-control input-form col-10 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-12 text-center mx-auto">
                                                                <input type="submit" class="btn btn-outline w-100 boton-form py-3" value="ENVIAR">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid contacto-chico">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col px-0">
                        <img src="{{ asset('img/photos/home/Contacto.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-12 mx-auto">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-11 cont-formulario py-5 mx-auto shadow">
                                <div class="row">
                                    <div class="col-10 px-0 py-5 mx-auto">
                                        <div class="row">
                                            <div class="col fs-2 py-2" style="color: #0F0743;">
                                                PONTE EN CONTACTO
                                            </div>
                                        </div>
                                        <form action="{{ route('formularioContact') }}" method="POST" class="row form-group" id="fomulario-home_chico">
                                            @csrf
                                            <div class="col-md-6 col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-4 col-4 py-3 d-flex align-items-center justify-content-center" id="group-nombre">NOMBRE</span>
                                                    <input required type="text" name="nombre" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-nombre">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-4 col-4 py-3 d-flex align-items-center justify-content-center" id="group-empresa">EMPRESA</span>
                                                    <input required type="text" name="empresa" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-empresa">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-4 col-4 py-3 d-flex align-items-center justify-content-center" id="group-email">EMAIL</span>
                                                    <input required type="text" name="email" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-email">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-4 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">WHATSAPP</span>
                                                    <input required type="number" name="whatsapp" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-2 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">MENSAJE</span>
                                                    <input required type="text" name="mensaje" class="form-control input-form col-10 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-3 col-12 text-center mx-auto">
                                                        <input type="submit" class="btn btn-outline w-100 boton-form py-3" value="ENVIAR">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extraJS')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slider_imagenes > div');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const dotContainer = document.querySelector('.dot-container');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.style.display = 'block';
                } else {
                    slide.style.display = 'none';
                }
            });
        }

        showSlide(currentSlide);

        function nextSlide() {
            currentSlide++;
            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide--;
            if (currentSlide < 0) {
                currentSlide = slides.length - 1;
            }
            showSlide(currentSlide);
        }

        slides.forEach((slide, i) => {
            const dotBtn = document.createElement('img');
            dotBtn.src = "{{ asset('img/photos/home/RomboW.png') }}";
            dotBtn.alt = "Dot " + (i + 1);
            dotBtn.classList.add('dot-btn');
            dotBtn.classList.add('px-1');
            dotBtn.addEventListener('click', () => {
                currentSlide = i;
                showSlide(currentSlide);
            });
            dotContainer.appendChild(dotBtn);
        });

        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);
    });
</script>

<script>
    $(document).ready(function(){
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });

        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><img src="{{ asset('img/photos/home/Flecha.png') }}"></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="{{ asset('img/photos/home/Flecha2.png') }}"></button>',
            dots: true,
            focusOnSelect: true,
            customPaging: function(slider, i) {
                var imgNormal = '{{ asset('img/photos/home/Rombo2.png') }}';
                var imgActive = '{{ asset('img/photos/home/Rombo3.png') }}';
                return '<img src="' + imgNormal + '" class="dot-img" />';
            }, 
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
                }
            ]
        });

        $('.slider-for').on('afterChange', function(event, slick, currentSlide, nextSlide){
            $('.slider-nav .slick-dots li').removeClass('slick-active');
            $('.slider-nav .slick-dots li:nth-child(' + (currentSlide + 1) + ')').addClass('slick-active');
            updateDotsImages();
        });

        function updateDotsImages() {
            var imgNormal = '{{ asset('img/photos/home/Rombo2.png') }}';
            var imgActive = '{{ asset('img/photos/home/Rombo3.png') }}';

            $('.slider-nav .slick-dots li').each(function(index){
                var dotImg = $(this).find('.dot-img');
                if ($(this).hasClass('slick-active')) {
                    dotImg.attr('src', imgActive);
                } else {
                    dotImg.attr('src', imgNormal);
                }
            });
        }
    });
</script>

@endsection

