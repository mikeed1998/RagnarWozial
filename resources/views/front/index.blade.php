@extends('layouts.app')

@section('title', 'Home')

@section('extracss')
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

    .boton-link {
        background-color: #0F0743;
        color: #FFFFFF;
    }

    .boton-link:hover {
        background-color: #0287DA;
        color: #FFFFFF;
    }

    .boton-servicio {
        background-color: #0F0743;
        color: #FFFFFF;
    }

    .boton-servicio:hover {
        background-color: #FFFFFF;
        font-weight: 700;
        color: #0F0743;
    }

    @media(min-width: 992px) {
        .slider-container {
            height: 51.5rem;
        }

        .img-slider_principal {
            width: 1800px;
            height: 47rem;
        }

        .tarjeta-nosotros {
            z-index: 9998; 
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
            margin-top: 20rem;
        }

        .barra-home {
            margin-top: 1px;
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
            z-index: 9998; 
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

        .barra-home {
            margin-top: 5px;
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
            z-index: 9998; 
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

        .barra-home {
            margin-top: 10px;
        }
    }

</style>

<style>
    .dot-btn {
        width: 16px; /* Ajusta el tamaño según sea necesario */
        height: 16px;
        cursor: pointer;
    }

    .dot-btn.active {
        content: url('{{ asset('img/photos/home/RomboW.png') }}');
    }
</style>
@endsection

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0 position-relative slider-container">
                <div class="row">
                    <div class="slider_imagenes px-0">
                        @forelse ($slider_principal as $sp)
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
                <div class="col-lg-8 tarjeta-nosotros col-md-11 col-11 bg-white shadow-lg position-absolute top-100 start-50 translate-middle" style="border-radius: 16px;">
                    <div class="row">
                        <div class="col position-relative">
                            <div class="row mt-5 ms-lg-4 ms-md-0 ms-0">
                                <div class="col-11 mx-auto">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-7 col-12 mt-lg-4 mt-md-0 mt-0">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-12" style="color: #028AE8; line-height: 1; font-size: 2.6rem;">
                                                    QUIÉNES SOMOS...
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 py-2 texto-nosotros">
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum necessitatibus aspernatur sunt sequi. Saepe voluptas pariatur a at blanditiis ex!
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-9 col-12 mt-4">
                                                    <a href="#/" class="btn border w-100 py-2 boton-link">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-5 col-12">
                                            <div class="row mt-md-0 mt-4 mb-lg-0 mb-md-0 mb-5">
                                                <div class="col-md-9 col-12 ms-auto">
                                                    <img src="{{ asset('img/photos/home/Quienes_somos.png') }}" alt="quienes_somos" class="img-fluid w-100" style="border-radius: 16px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 position-absolute top-0 start-50 translate-middle" style="margin-top: -2rem;">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="row">
                                            <div class="col text-end">
                                                <img src="{{ asset('img/photos/home/Flecha.png') }}" alt="" class="prev-btn" style="cursor: pointer;">
                                            </div>
                                            <div class="col dot-container"></div>
                                            <div class="col text-start">
                                                <img src="{{ asset('img/photos/home/Flecha2.png') }}" alt="" class="next-btn" style="cursor: pointer;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                   
                    <div class="col-12 mx-auto position-absolute top-100 start-0 " style="margin-top: -6px; text-align: center;">
                        <div class="row">
                            <div class="col-8 mx-auto">
                                <img src="{{ asset('img/photos/home/Barra.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container-servicios mb-5" data-aos="zoom-in">
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
                        @forelse ($servicios as $s_nav)
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
                        @empty
                            <div class="row">
                                <div class="col">
                                    No hay servicios
                                </div>
                            </div>
                        @endforelse
                        
                        
                    </div>
                        
                   
                    <div class="slider-for col-lg-8 col-12">
                        
                        @forelse ($servicios as $serv)
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
                                                    <div class="col-8"></div>
                                                    <div class="col-lg-4 col-12">
                                                        <a href="{{ route('front.servicio', ['id' => $serv->id]) }}" class="btn btn-outline boton-servicio py-2 w-100">VER MÁS</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="row">
                                <div class="col">
                                   
                                </div>
                            </div>
                        @endforelse
                        
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
                        background-image: url('{{ asset('img/photos/home/Banner.png') }}');
                    ">
                        <div class="col-lg-6 col-md-9 col-11 position-absolute top-100 start-50 translate-middle" style="margin-top: -10px;">
                            <img src="{{ asset('img/photos/home/barra_invertida.png') }}" alt="" class="img-fluid barra-home">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" style="background-color: #028AE8;">
        <div class="row">
            @foreach ($capacitaciones as $cap)
                <div class="col-xl-3 col-md-6 col-6 py-lg-0 py-md-3 py-3">
                    <div class="row">
                        <div class="col position-relative text-center">
                            <img src="{{ asset('img/photos/home/Marco.png') }}" alt="" class="img-fluid">
                            <div class="col-12 position-absolute top-50 start-50 translate-middle">
                                <img src="{{ asset('img/photos/capacitaciones/'.$cap->icono) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-2 text-center">
                            <div class="row">
                                <div class="col-7 mx-auto" style="color:#0F0743; font-weight:700;">
                                    {{ $cap->texto }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid contacto-grande">
        <div class="row">
            <div class="col px-0">
                <div class="row">
                    <div class="col position-relative imagen-contacto" style="
                        background-image: url('{{ asset('img/photos/home/Contacto.png') }}');
                    ">
                        <div class="row mt-5">
                            <div class="col-lg-3 col-md-12 col-12 py-5"></div>
                            <div class="col-lg-9 col-md-9 col-11 mx-auto" >
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 col-11 cont-formulario py-3 mx-auto">
                                        <div class="row">
                                            <div class="col-10 px-0 py-3 mx-auto">
                                                <div class="row">
                                                    <div class="col fs-1 py-2" style="color: #0F0743;">
                                                        PONTE EN CONTACTO
                                                    </div>
                                                </div>
                                                <form action="{{ route('formularioContact') }}" method="POST" class="row form-group needs-validation" id="fomulario-home_grande" novalidate>
                                                    @csrf
                                                    <input type="hidden" name="tipoForm" value="home">
                                                    <div class="col-lg-6 col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-nombre">NOMBRE</span>
                                                            <input required type="text" name="nombre" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-nombre">
                                                            <div class="invalid-feedback">
                                                                No valido o vacio
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-empresa">EMPRESA</span>
                                                            <input required type="text" name="empresa" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-empresa">
                                                            <div class="invalid-feedback">
                                                                No valido o vacio
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-email">EMAIL</span>
                                                            <input required type="email" name="email" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-email">
                                                            <div class="invalid-feedback">
                                                                ejemplo@dominio.com
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">WHATSAPP</span>
                                                            <input required type="number" name="whatsapp" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                                            <div class="invalid-feedback">
                                                                Formato no válido
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text col-lg-2 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">MENSAJE</span>
                                                            <input required type="text" name="mensaje" class="form-control input-form col-10 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                                            <div class="invalid-feedback">
                                                                No valido o vacio
                                                            </div>
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
                                        <form action="{{ route('formularioContact') }}" method="POST" class="row form-group needs-validation" id="fomulario-home_chico" novalidate>
                                            @csrf
                                            <div class="col-md-6 col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-4 col-4 py-3 d-flex align-items-center justify-content-center" id="group-nombre">NOMBRE</span>
                                                    <input required type="text" name="nombre" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-nombre">
                                                    <div class="invalid-feedback">
                                                        Formato no válido
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-4 col-4 py-3 d-flex align-items-center justify-content-center" id="group-empresa">EMPRESA</span>
                                                    <input required type="text" name="empresa" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-empresa">
                                                    <div class="invalid-feedback">
                                                        Formato no válido
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-4 col-4 py-3 d-flex align-items-center justify-content-center" id="group-email">EMAIL</span>
                                                    <input required type="email" name="email" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-email">
                                                    <div class="invalid-feedback">
                                                        ejemplo@dominio.com
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-4 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">WHATSAPP</span>
                                                    <input required type="number" name="whatsapp" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                                    <div class="invalid-feedback">
                                                        Formato no válido
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text col-md-2 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">MENSAJE</span>
                                                    <input required type="text" name="mensaje" class="form-control input-form col-10 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                                    <div class="invalid-feedback">
                                                        Formato no válido
                                                    </div>
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

@section('scripts')
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
            updateDots();
        }

        function updateDots() {
            const dots = dotContainer.querySelectorAll('.dot-btn');
            dots.forEach((dot, i) => {
                if (i === currentSlide) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

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
            dotBtn.src = "{{ asset('img/photos/home/Rombo.png') }}";
            dotBtn.alt = "Dot " + (i + 1);
            dotBtn.classList.add('dot-btn');
            dotBtn.classList.add('mx-2');
            dotBtn.addEventListener('click', () => {
                currentSlide = i;
                showSlide(currentSlide);
            });
            dotContainer.appendChild(dotBtn);
        });

        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        // Initialize dots
        showSlide(currentSlide);
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





