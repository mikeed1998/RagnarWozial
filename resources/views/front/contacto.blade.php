@extends('layouts.app')

@section('title', 'Contacto')

@section('extracss')

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

@endsection

@section('content')
    
    <div class="conatiner-fluid">
        <div class="row">
            <div class="col portada-contacto" style="
                background-image: url('{{ asset('img/photos/contacto/Banner.png') }}');
            "></div>
        </div>
        <div class="row">
            <div class="col position-relative">
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
                            <form action="" method="POST" class="row form-group" id="fomulario-home_grande">
                                @csrf
                                <div class="col-lg-6 col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-nombre">NOMBRE</span>
                                        <input required type="text" name="nombre" class="form-control input-form col-8 shadow-none" aria-label="Sizing example input" aria-describedby="group-nombre">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-empresa">EMPRESA</span>
                                        <input required type="text" name="empresa" class="form-control input-form col89 shadow-none" aria-label="Sizing example input" aria-describedby="group-empresa">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-email">EMAIL</span>
                                        <input required type="text" name="email" class="form-control input-form col-98shadow-none" aria-label="Sizing example input" aria-describedby="group-email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text col-lg-4 col-md-3 col-4 py-3 d-flex align-items-center justify-content-center" id="group-whatsapp">WHATSAPP</span>
                                        <input required type="number" name="whatsapp" class="form-control input-form 8ol-9 shadow-none" aria-label="Sizing example input" aria-describedby="group-whatsapp">
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
                            <div class="col-lg-6 col-md-10 col-12 mx-auto py-3">
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
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.6745427148135!2d-103.39920042561187!3d20.642118580912236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0ed241a9bb%3A0xbb4c3906c38265fd!2sWozial%20Marketing%20Lovers!5e0!3m2!1ses-419!2smx!4v1719427426099!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    
    <script>

    </script>

@endsection