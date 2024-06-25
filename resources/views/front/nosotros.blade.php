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

        @media(min-width: 992px) {
            .fondo-nosotros {
                height: 860px;
                background-color: #0287DA;
            }
        }

        @media(min-width: 576px) and (max-width: 992px) {
            .fondo-nosotros {
                background-color: #0287DA;
            }
        }

        @media(min-width: 0px) and (max-width: 576px) {
            .fondo-nosotros {
                background-color: #0287DA;
            }
        }

        
        .col-left {
            transform: skewX(-30deg); /* Ajusta el ángulo de inclinación */
            border-right: 3px solid #FFFFFF;
            left: 0;
            background-color: #0F0743;
        }
        .col-right {
            transform: skewX(-30deg); /* Ajusta el ángulo de inclinación */
            border-left: 3px solid #FFFFFF;
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
                        <div class="col-12 position-absolute border top-0 start-0">
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
                            <div class="col-11 border border-warning mx-auto py-5">
                                <div class="row">
                                    <div class="col-lg-7 col-12 border border-danger">
                                        <img src="{{ asset('img/photos/nosotros/Imagen.png') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-5 col-12 border border-danger">
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
                        <div class="col-12 position-absolute border bottom-0 end-0">
                            <div class="row mt-5">
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
    
    <div class="container-fluid">
        <div class="row">
            <div class="col border-top border-white  border-3">
                <div class="row" style="background: linear-gradient(90deg, #0F0743 50%, #0287DA 50%);">
                    <div class="col-12 position-relative">
                        <div class="col-12 position-absolute top-0 start-0 py-3 border border-danger text-white z-3">
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
                            <div class="col py-5 col-left text-white text-center display-5 fw-bolder">
                            </div>
                            <div class="col py-5 col-right text-white text-center display-5 fw-bolder">
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