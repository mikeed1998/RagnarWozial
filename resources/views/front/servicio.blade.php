@extends('layouts.app')

@section('title', 'Servicio')

@section('extracss')

    <style>

        .portada-servicio {
            background-position: center center;
            background-repeat: no-repeat; 
            background-size: 100%;
            width: 100%;
        }

        .descripcion-servicio {
            text-align: justify; 
            color:#0F0743; 
            font-size: 1.3rem; 
            line-height: 1.1;
        }
                
        @media(min-width: 992px) {
            .portada-servicio {
                height: 470px;
            }

            .barra-portada {
                margin-top: -5px;
            }
        }

        @media(min-width: 576px) and (max-width: 992px) {
            .portada-servicio {
                height: 250px;
            }

            .barra-portada {
                margin-top: -5px;
            }
        }

        @media(min-width: 0px) and (max-width: 576px) {
            .portada-servicio {
                height: 130px;
            }

            .barra-portada {
                margin-top: -10px;
            }
        }
    
        .romboide-cont_servicio {
            position: relative;
        }

        .romboide_servicio {
            position: relative;
            height: 5rem;
            transform: skewX(-50deg);
            background-color: #008AE2;
        }

        .romboide_servicio:hover {
            background-color: #0F0743;
        }

    </style>

@endsection

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col w-100 position-relative portada-servicio" style="
                        background-image: url('{{ asset('img/photos/servicio/Banner.png') }}');
                    ">
                        <div class="col-12 text-center position-absolute top-100 start-0 barra-portada">
                            <img src="{{ asset('img/photos/servicio/barra2.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-9 col-md-11 col-11 mt-5 mb-5 py-5 mx-auto descripcion-servicio">
                <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum fuga, debitis eos neque repudiandae ab dolores quibusdam alias voluptate non soluta aliquam ipsam adipisci et animi id, quas sint cumque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero aliquam aliquid dolorum omnis ut debitis voluptate velit autem, ea eos, dicta assumenda a placeat possimus quam sequi dolor incidunt sunt!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro earum, repudiandae obcaecati perferendis deleniti dolore?. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, deserunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia id ea beatae perspiciatis velit facere.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-4 col-md-6 col-9 mx-auto mt-5 mb-5">
                <a href="{{ route('front.contacto') }}" class="col-3 romboide-cont_servicio">
                    <div class="romboide_servicio"></div>
                    <div class="texto-menu fs-3 text-white fw-bolder">COTIZAR</div>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    
@endsection