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

    .portada-contacto {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
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
        color:#028AE8;
        text-decoration: none;
    }

    .boton-link:hover {
        color: #FFFFFF;
    }

    .col-left {
        transform: skewX(-30deg); /* Ajusta el ángulo de inclinación */
        border-right: 5px solid #0F0743;
        left: 0;
        background-color: #0287DA;
        padding: 2.5rem 0;
    }
    .col-right {
        transform: skewX(-30deg); /* Ajusta el ángulo de inclinación */
        border-left: 5px solid #0F0743;
        right: 0;
        background-color: #0287DA;
        padding: 2.5rem 0;
    }

    .letras-center {
        padding: 1.65rem 0;
    }

    @media(min-width: 992px) {
        .portada-contacto {
            height: 758px;
        }

        .contenedor-form_contacto {
            height: 26rem;
            border-radius: 2rem;
        }

        .barra-pos {
            margin-top: -14px;
        }

        .contenedor-dos {
            padding-top: 18rem; 
            padding-bottom: 3rem;
        }

        .contacto-grande { display: block; }
        .contacto-chico { display: none; }

        iframe {
            height: 50rem;
            width: 100%;
        }
    }

    @media(min-width: 576px) and (max-width: 992px) {
        .portada-contacto {
            height: 410px;
        }

        .contenedor-form_contacto {
            height: 34rem;
            border-radius: 2rem;
            margin-top: 12rem;
        }

        .barra-pos {
            margin-top: -14px;
        }

        .contenedor-dos {
            padding-top: 32rem; 
            padding-bottom: 3rem;
        }

        .contacto-grande { display: block; }
        .contacto-chico { display: none; }

        iframe {
            height: 40rem;
            width: 100%;
        }
    }

    @media(min-width: 0px) and (max-width: 576px) {
        .portada-contacto {
            height: 218px;
        }

        .contenedor-form_contacto {
            height: 34rem;
            border-radius: 0rem;
            margin-top: 16rem;
        }

        .barra-pos {
            margin-top: -20px;
        }

        .contenedor-dos {
            padding-top: 36rem; 
            padding-bottom: 3rem;
        }

        .contacto-grande { display: none; }
        .contacto-chico { display: block; }

        iframe {
            height: 30rem;
            width: 100%;
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
        background-color:#fff700;
        color: #000000;
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
        background-color: #FFFFFF;
        opacity: 100%;
        transition: all 0.5s;
    }
</style>


<style>
    .contacto_c {
        position: relative;
    }

    .oculto_e {
        display: none;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5); /* Ajusta el color de fondo según necesites */
        z-index: 9999; /* Ajusta el z-index según sea necesario para que esté sobre el contenido */
        filter: 100%;
    }

    .contacto_c:hover .oculto_e {
        display: block; /* Muestra el elemento oculto al hacer hover sobre .slider_c */
    }
</style>

@endsection

@section('content')

    <div class="row mt-5 mb-4 px-2">
        <a href="{{ route('front.admin') }}" class="mt-5 col col-md-2 btn btn-sm btn-dark mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>

    <div class="conatiner-fluid">
        <div class="row">
            <div class="col portada-contacto position-relative" style="
                background-image: url('{{ asset('img/photos/imagenes_estaticas/'.$elem_general[11]->imagen) }}');
            ">
            <div class="col-9 position-absolute top-50 start-50 translate-middle">
                <form id="form_img_perfil" action="{{ route('ajax.cambiar_imagen') }}" method="POST" class="file-upload" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_imagen" value="{{ $elem_general[11]->id }}">
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
        <div class="row contacto_c">
            <div class="col position-relative ">
                <div class="col-lg-8 col-md-11 col-12 bg-white position-absolute top-0 start-50 translate-middle py-3 contenedor-form_contacto">
                    <div class="col-12 text-center position-absolute top-100 start-0">
                        <div class="row">
                            <div class="col-lg-7 col-md-9 col-9 mx-auto">
                                <img src="{{ asset('img/photos/home/Barra.png') }}" alt="" class="img-fluid barra-pos">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center fs-2 py-4" style="color:#0F0743;">
                            ENVÍA UN MENSAJE
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <form action="{{ route('formularioContact') }}" method="POST" class="row form-group" id="fomulario-home_grande">
                                @csrf
                                <div class="col-lg-6 col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-nombre">NOMBRE</span>
                                        <input disabled type="text" name="nombre" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-nombre">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-empresa">EMPRESA</span>
                                        <input disabled type="text" name="empresa" class="form-control input-form col89 shadow-none" aria-label="Sizing example input" aria-describedby="group-empresa">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-email">EMAIL</span>
                                        <input disabled type="text" name="email" class="form-control input-form col-98shadow-none" aria-label="Sizing example input" aria-describedby="group-email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">WHATSAPP</span>
                                        <input disabled type="number" name="whatsapp" class="form-control input-form 8ol-9 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text col-lg-2 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">MENSAJE</span>
                                        <input disabled type="text" name="mensaje" class="form-control input-form col-10 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-12 text-center mx-auto">
                                            <input disabled type="submit" class="btn btn-outline w-100 boton-form py-3" value="ENVIAR">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color:#0F0743;">
            <div class="col contenedor-dos">
                <div class="row">
                    <div class="col text-white text-center">
                        <div class="row">
                            <div class="col-12 text-center py-3">
                                <a href="#/" class="boton-link">
                                    <i class="bi bi-whatsapp fs-2 px-1"></i>
                                </a>
                                <a href="#/" class="boton-link">
                                    <i class="bi bi-facebook fs-2 px-1"></i>
                                </a>
                                <a href="#/" class="boton-link">
                                    <i class="bi bi-instagram fs-2 px-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row contacto-grande">
                            <div class="col-lg-9 col-md-10 col-12 mx-auto py-3">
                                <div class="row">
                                    <div class="col-12 position-relative">
                                        <div class="col-12 position-absolute top-0 start-0 text-white z-3 letras-center">
                                            <div class="row">
                                                <div class="col-6 text-center fs-5 fw-bolder d-flex align-items-center justify-content-center" style="color: #0F0743;">
                                                    CONTACTO@RAGNAR.COM
                                                </div>
                                                <div class="col-6 text-center fs-5 fw-bolder d-flex align-items-center justify-content-center" style="color: #0F0743;">
                                                    TEL. 3322332233
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-left text-white text-center fs-5 fw-bolder"></div>
                                            <div class="col col-right text-white text-center fs-5 fw-bolder"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row contacto-chico">
                            <div class="col-12 mx-auto py-3">
                                <div class="row">
                                    <div class="col-12 position-relative">
                                        <div class="col-12 position-absolute top-0 start-0 text-white z-3 letras-center">
                                            <div class="row">
                                                <div class="col-12 text-center fw-bolder d-flex align-items-center justify-content-center" style="color: #0F0743;">
                                                    CONTACTO@RAGNAR.COM
                                                </div>
                                                <div class="col-12 mt-5 text-center fw-bolder d-flex align-items-center justify-content-center" style="color: #0F0743;">
                                                    <div class="col-12 mt-4">
                                                        TEL. 3322332233
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9 mx-auto col-left text-white text-center fs-5 fw-bolder"></div>
                                            <div class="col-9 mx-auto col-right text-white text-center fs-5 fw-bolder mt-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-9 col-9 mx-auto py-3 fs-bolder">
                                <div class="row">
                                    <div class="col-2 text-end">
                                        <img src="{{ asset('img/photos/contacto/gps.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-10 text-start">
                                        Av. Lapizlazuli 2074, 44560 Guadalajara, Jal.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col position-relative contacto_c">
                <div class="col-12 position-absolute top-0 bottom-0 start-0 oculto_e z-3">
                    <div class="row h-100">
                        <div class="col-8 mx-auto d-flex align-items-center justify-content-center">
                            <a href="{{ route('seccion.show', ['slug' => 'configuracion']) }}" class="btn btn-light fs-1 p-2 w-100">Editar en Configuración</a>
                        </div>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.6745427148135!2d-103.39920042561187!3d20.642118580912236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0ed241a9bb%3A0xbb4c3906c38265fd!2sWozial%20Marketing%20Lovers!5e0!3m2!1ses-419!2smx!4v1719427426099!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

@endsection

@section('extraJS')

@endsection

