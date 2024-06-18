@extends('layouts.app')

@section('title', 'Contacto')

@section('extracss')
<style>
    .romboide-cont {
        position: relative;
    }

    .romboide {
        position: relative;
        height: 5rem;
        transition: transform 0.3s, background-color 0.3s;
    }

    .romboide-cont:hover .romboide {
        transform: skewX(-50deg);
        background-color: #008AE2;
    }

    .texto-menu {
        font-size: 1rem;
        font-weight: 500;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }

    .lista-uno {
        margin-left: -50px;
        width: 300px;
        display: none;
    }

    .romboide-servicio:hover .lista-uno {
        display: block; /* Mostrar al hacer hover */
    }

</style>
@endsection

@section('content')
    <div class="container-fluid mt-5 mb-5" style="background-color: #100643;">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-md-3 col-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <a href="#/" class="col-9 mx-auto">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('img/photos/home/Logo_horizontal.png') }}" alt="logo" class="img-fluid">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 mx-auto">
                        <div class="row">
                            <a href="#/" class="col-3 romboide-cont">
                                <div class="romboide"></div>
                                <div class="texto-menu">INICIO</div>
                            </a>
                            <div class="col-3 romboide-cont romboide-servicio position-relative">
                                <div class="romboide"></div>
                                <div class="texto-menu">SERVICIOS</div>
                                <div class="bg-white position-absolute border lista-uno">
                                    <ul class="py-2">
                                        <li class="ps-3 py-3" style="font-size: 1rem; font-weight: 500;">
                                            <a href="#/" class="categoria-link"><i class="bi bi-chevron-right"></i> SEGURIDAD PRIVADA</a>
                                        </li>
                                        <li class="ps-3 py-3" style="font-size: 1rem; font-weight: 500;">
                                            <a href="#/" class="categoria-link"><i class="bi bi-chevron-right"></i> MONITOREO DE ALARMAS</a>
                                        </li>
                                        <li class="ps-3 py-3" style="font-size: 1rem; font-weight: 500;">
                                            <a href="#/" class="categoria-link"><i class="bi bi-chevron-right"></i> PROTECCIÓN PERSONAL</a>
                                        </li>
                                        <li class="ps-3 py-3" style="font-size: 1rem; font-weight: 500;">
                                            <a href="#/" class="categoria-link"><i class="bi bi-chevron-right"></i> SERVICIO 04</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#/" class="col-3 romboide-cont">
                                <div class="romboide"></div>
                                <div class="texto-menu">NOSOTROS</div>
                            </a>
                            <a href="#/" class="col-3 romboide-cont">
                                <div class="romboide"></div>
                                <div class="texto-menu">CONTACTO</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="col text-center">
                                <a href="#/" class="btn btn-outline border-none">
                                    <i class="bi bi-whatsapp text-white fs-5 px-0"></i>
                                </a>
                                <a href="#/" class="btn btn-outline border-none">
                                    <i class="bi bi-facebook text-white fs-5 px-0"></i>
                                </a>
                                <a href="#/" class="btn btn-outline border-none">
                                    <i class="bi bi-instagram text-white fs-5 px-0"></i>
                                </a>
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
