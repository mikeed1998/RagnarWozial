@extends('layouts.app')

@section('title', 'Home')

@section('extracss')
    <style>

        @media(min-width: 992px) {
            .slider-container {
                height: 51.5rem;
            }

            .tarjeta-nosotros {
                z-index: 9999; 
                height: 25rem; 
                margin-top: 3rem;
            }
        } 

        @media(min-width: 576px) and (max-width: 992px) {
            .slider-container {
                height: 35rem;
            }

            .tarjeta-nosotros {
                z-index: 9999; 
                height: 25rem; 
                margin-top: 3rem;
            }
        }

        @media(min-width: 0px) and (max-width: 576px) {
            .slider-container {
                height: 23rem;
            }

            .tarjeta-nosotros {
                z-index: 9999; 
                height: 25rem; 
                margin-top: 3rem;
            }
        }

    </style>
@endsection

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0 position-relative slider-container">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('img/photos/home/Slider.png') }}" alt="slider" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-9 tarjeta-nosotros col-md-11 col-11 bg-white rounded shadow-lg position-absolute top-100 start-50 translate-middle border border-primary">
                    <div class="col position-relative">
                        <div class="row mt-5">
                            <div class="col-11 border border-dark mx-auto">
                                <div class="row">
                                    <div class="col-md-6 col-12 mt-3">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-12 fs-1" style="color: #028AE8; line-height: 1;">
                                                QUIENES SOMOS...
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col py-2">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum necessitatibus aspernatur sunt sequi. Saepe voluptas pariatur a at blanditiis ex!
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-9 col-12 mt-3">
                                                <a href="#/" class="btn border w-100 py-2" style="background-color: #0F0743; color: #FFFFFF;">VER MÁS</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="row mt-md-0 mt-5">
                                            <div class="col-md-9 col-12 ms-auto">
                                                <img src="{{ asset('img/photos/home/Quienes_somos.png') }}" alt="quienes_somos" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 position-absolute top-0 start-50 translate-middle py-3 border border-secondary" style="margin-top: -5rem;">
                            
                        </div>
                        <div class="col-9 position-absolute top-100 start-50 translate-middle py-2" style="
                            margin-top: 4.25rem;    
                            z-index: 0; 
                            background-color: #0078C1;
                            width: 100%;
                            height: 0;
                            border: 40px solid red;
                            border-top: 0;
                            border-bottom: 30px solid transparent;
                        "></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection

@section('scripts')
   
@endsection





