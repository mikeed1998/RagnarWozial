@extends('layouts.app')

@section('title', 'Nosotros')

@section('extracss')
    <style>

        .descripcion-nosotros {
            text-align: justify; 
            color:#0F0743; 
            font-size: 1.3rem; 
            line-height: 1.1;
        }

        .descripcion-nosotros2 {
            text-align: justify; 
            color:#0F0743; 
            font-size: 1.3rem; 
            line-height: 1.1;
            hyphens: auto;
        }

        @media(min-width: 992px) {
            .fondo-nosotros {
                height: 860px;
                background-color: #0287DA;
            }

            .valores-grande { display: block; }
            .valores-chico { display: none; }
        }

        @media(min-width: 576px) and (max-width: 992px) {
            .fondo-nosotros {
                background-color: #0287DA;
            }

            .valores-grande { display: block; }
            .valores-chico { display: none; }
        }

        @media(min-width: 0px) and (max-width: 576px) {
            .fondo-nosotros {
                background-color: #0287DA;
            }

            .valores-grande { display: none; }
            .valores-chico { display: block; }
        }

        
        .col-left {
            transform: skewX(-30deg); /* Ajusta el ángulo de inclinación */
            border-right: 3px solid white;
            left: 0;
            background-color: #0F0743;
        }
        .col-right {
            transform: skewX(-30deg); /* Ajusta el ángulo de inclinación */
            border-left: 3px solid white;
            right: 0;
            background-color: #0287DA;
        }

    </style>
@endsection

@section('content')

    
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col position-relative fondo-nosotros">
                        <div class="col-12 position-absolute top-0 start-0">
                            <div class="row mt-5">
                                <div class="col-lg-11 col-md-9 col-12 mx-auto position-relative">
                                    <div class="row">
                                        <div class="col-7">
                                            <img src="{{ asset('img/photos/nosotros/ragnar.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11 mx-auto py-5">
                                <div class="row">
                                    <div class="col-lg-7 col-12">
                                        <img src="{{ asset('img/photos/nosotros/Imagen.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-5 col-12">
                                        <div class="row mt-lg-5 mt-3">
                                            <div class="col-11 mx-auto mt-lg-5 mt-1">
                                                <p class="display-4 text-white m-0 fw-bolder">QUIÉNES</p>
                                                <p class="display-4 m-0 fw-bolder" style="color:#0F0743;">SOMOS...</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 mb-3">
                                            <div class="col-10 px-0 mx-auto">
                                                <div class="row">
                                                    <div class="col-4 mt-1" style="border: 1px solid #0F0743;"></div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-2 mt-1" style="border: 1px solid #0F0743;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-11 mx-auto descripcion-nosotros">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa nam commodi exercitationem nostrum quisquam quia eius dolor perferendis nulla animi.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus distinctio dolore dolor eligendi, perferendis molestias accusamus nulla. Rerum reprehenderit cum sequi! Nostrum facere quas cum illo dolorem doloribus id enim.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 position-absolute bottom-0 end-0">
                            <div class="row mt-5 mb-4">
                                <div class="col-lg-11 col-md-9 col-12 mx-auto mt-5 position-relative text-end">
                                    <div class="row">
                                        <div class="col-5"></div>
                                        <div class="col-7">
                                            <img src="{{ asset('img/photos/nosotros/ragnar.png') }}" alt="" class="img-fluid">
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
    
    <div class="container-fluid valores-grande">
        <div class="row">
            <div class="col border-top border-white border-4">
                <div class="row" style="background: linear-gradient(90deg, #0F0743 50%, #0287DA 50%);">
                    <div class="col-12 position-relative">
                        <div class="col-12 position-absolute top-0 start-0 py-3 text-white z-3">
                            <div class="row">
                                <div class="col-6 text-center display-5 fw-bolder">
                                    MISIÓN
                                </div>
                                <div class="col-6 text-center display-5 fw-bolder">
                                    VISIÓN
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col py-5 col-left text-white text-center display-5 fw-bolder"></div>
                            <div class="col py-5 col-right text-white text-center display-5 fw-bolder"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row mt-5 mb-5">
                            <div class="col-6 border-end">
                                <div class="row">
                                    <div class="col-9 mx-auto descripcion-nosotros2">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, exercitationem!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem iure, alias neque illum veritatis, doloremque cupiditate vel id corrupti laudantium fugit, porro at quod harum vero dolor saepe pariatur voluptates!
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-9 mx-auto descripcion-nosotros2">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, odio.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur ad quasi ipsum tenetur non fuga. Cupiditate ad blanditiis recusandae consequatur soluta ex eveniet nobis aspernatur. Ad sunt repudiandae nemo pariatur.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid valores-chico">
        <div class="row">
            <div class="col border-top border-3 border-white">
                <div class="row py-4" style="background-color: #0F0743;">
                    <div class="col display-5 fw-bolder text-center text-white">
                        MISIÓN
                    </div>
                </div>
                <div class="row">
                    <div class="col-11 py-5 mx-auto descripcion-nosotros2">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, exercitationem!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem iure, alias neque illum veritatis, doloremque cupiditate vel id corrupti laudantium fugit, porro at quod harum vero dolor saepe pariatur voluptates!
                    </div>
                </div>
                <div class="row py-4" style="background-color: #0287DA;">
                    <div class="col display-5 fw-bolder text-center text-white">
                        VISIÓN
                    </div>
                </div>
                <div class="row">
                    <div class="col-11 py-5 mx-auto descripcion-nosotros2">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, odio.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur ad quasi ipsum tenetur non fuga. Cupiditate ad blanditiis recusandae consequatur soluta ex eveniet nobis aspernatur. Ad sunt repudiandae nemo pariatur.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col text-center py-lg-3 py-2 display-2 fw-bolder" style="color: #0F0743;">
                        GALERÍA
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
            <div class="col-11 mx-auto mt-5 mb-5">
                <div class="row">
                    <div class="col-lg-4 col-6 px-1 py-1">
                        <div class="card rounded-0">
                            <img src="{{ asset('img/photos/nosotros/Galeria_01.png') }}" alt="imagen-galeria" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 px-1 py-1">
                        <div class="card rounded-0">
                            <img src="{{ asset('img/photos/nosotros/Galeria_02.png') }}" alt="imagen-galeria" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 px-1 py-1">
                        <div class="card rounded-0">
                            <img src="{{ asset('img/photos/nosotros/Galeria_03.png') }}" alt="imagen-galeria" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 px-1 py-1">
                        <div class="card rounded-0">
                            <img src="{{ asset('img/photos/nosotros/Galeria_03.png') }}" alt="imagen-galeria" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 px-1 py-1">
                        <div class="card rounded-0">
                            <img src="{{ asset('img/photos/nosotros/Galeria_02.png') }}" alt="imagen-galeria" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 px-1 py-1">
                        <div class="card rounded-0">
                            <img src="{{ asset('img/photos/nosotros/Galeria_01.png') }}" alt="imagen-galeria" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>    
        </div> 
    </div>    

    <div class="container-fluid mt-5" style="background-color: #028AE8;">
        <div class="row">
            <div class="col position-relative">
                <div class="col-12 m-0 position-absolute bottom-100 start-0 text-center">
                    <img src="{{ asset('img/photos/home/Barra_invertida.png') }}" alt="" class="img-fluid" style="margin-top: 10px;">
                </div>
                <div class="row py-5">
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
        </div>
    </div>

@endsection

@section('scripts')
   
@endsection