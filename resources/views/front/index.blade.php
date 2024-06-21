@extends('layouts.app')

@section('title', 'Home')

@section('extracss')
    <style>

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

        @media(min-width: 992px) {
            .slider-container {
                height: 51.5rem;
            }

            .img-slider_principal {
                width: 1800px;
                height: 47rem;
            }

            .tarjeta-nosotros {
                z-index: 9999; 
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
                z-index: 9999; 
                height: 18rem; 
                margin-top: 2rem;
            }

            .texto-nosotros {
                font-size: 0.9rem;
                color:#0F0743; 
                line-height: 1.1; 
                text-align: justify;
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
                z-index: 9999; 
                height: auto; 
                margin-top: 13rem;
            }

            .texto-nosotros {
                font-size: 0.9rem;
                color:#0F0743; 
                line-height: 1.1; 
                text-align: justify;
            }
        }

        

    </style>
@endsection

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0 position-relative slider-container">
                <div class="row">
                    <div class="slider_imagenes px-0">
                        <div class="col-12"> 
                            <img src="{{ asset('img/photos/home/Slider.png') }}" alt="slider" class="img-fluid img-slider_principal">
                        </div>
                        <div class="col-12">
                            <img src="{{ asset('img/photos/backgrounds/bg-1.jpg') }}" alt="slider" class="img-fluid img-slider_principal">
                        </div>
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
                                                    <a href="#/" class="btn border w-100 py-2" style="background-color: #0F0743; color: #FFFFFF;">VER MÁS</a>
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

    <div class="container-fluid mb-5" style="margin-top: 20rem;">
        <div class="row">
            <div class="col text-center display-2 fw-bolder" style="color: #0F0743;">
                SERVICIOS
            </div>
        </div>
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-11 mx-auto" style="border-bottom: 3px solid #53D0F0;"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-1 col-md-2 col-4 px-5 mx-auto" style="border-bottom: 3px solid #53D0F0;"></div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <a href="#/" class="col-4 border-start border-info border-3 alto-slider_servicios link-slider_servicio" data-target="slider-01">
                                <div class="row">
                                    <div class="col text-center fs-3 fw-bolder">
                                        01
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col position-relative text-center d-flex aling-items-center justify-content-center alto-slider_servicios--texto">
                                        <div style="height: 400px; text-transform: uppercase; margin-top: -160px; margin-left: 5px;" 
                                             class="col-4 fs-5 fw-bolder position-absolute top-0 start-50 translate-middle">
                                            Vigilancia y patrullaje
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#/" class="col-4 border-start border-info border-3 alto-slider_servicios link-slider_servicio" data-target="slider-02">
                                <div class="row">
                                    <div class="col text-center fs-3 fw-bolder">
                                        02
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col position-relative text-center d-flex aling-items-center justify-content-center alto-slider_servicios--texto">
                                        <div style="height: 400px; text-transform: uppercase; margin-top: -160px; margin-left: 5px;" 
                                             class="col-4 fs-5 fw-bolder position-absolute top-0 start-50 translate-middle">
                                            Monitoreo de alarmas
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#/" class="col-4 border-start border-info border-3 alto-slider_servicios link-slider_servicio" data-target="slider-03">
                                <div class="row">
                                    <div class="col text-center fs-3 fw-bolder">
                                        03
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col position-relative text-center d-flex aling-items-center justify-content-center alto-slider_servicios--texto">
                                        <div style="height: 400px; text-transform: uppercase; margin-top: -160px; margin-left: 5px;" 
                                             class="col-4 fs-5 fw-bolder position-absolute top-0 start-50 translate-middle">
                                            Protección personal
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 py-5 alto-slider_servicios position-relative slider-content" id="slider-01">
                        <div class="col-12 position-absolute top-0 start-0 alto-slider_servicios" style="
                            background-image: url('{{ asset('img/photos/home/Vigilancia.png') }}');
                            background-position: center center;
                            background-repeat: no-repeat;
                            background-size: 100%;
                            border-top-right-radius: 32px; 
                            border-bottom-right-radius: 32px;
                            filter: brightness(0.4);
                        "></div>
                        <div class="col-12 position-absolute top-50 start-50 translate-middle z-3">
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <div class="row">
                                        <div class="col-9 ms-auto">
                                            <div class="row">
                                                <div class="col text-white fs-1 text-end" style="line-height: 1.1;">
                                                    VIGILANCIA Y PATRULLAJE
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-end text-white py-3" style="line-height: 1;">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, natus! Lorem ipsum dolor sit amet. Quia est explicabo corporis maiores molestias? Ad nostrum blanditiis odit tempore labore.
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8"></div>
                                                <div class="col-4 px-0">
                                                    <a href="#/" class="btn btn-outline text-white py-2 w-100" style="background-color: #028AE8;">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 py-5 alto-slider_servicios position-relative slider-content d-none" id="slider-02">
                        <div class="col-12 position-absolute top-0 start-0 alto-slider_servicios" style="
                            background-image: url('{{ asset('img/photos/home/Quienes_somos.png') }}');
                            background-position: center center;
                            background-repeat: no-repeat;
                            background-size: 100%;
                            border-top-right-radius: 32px; 
                            border-bottom-right-radius: 32px;
                            filter: brightness(0.4);
                        "></div>
                        <div class="col-12 position-absolute top-50 start-50 translate-middle z-3">
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <div class="row">
                                        <div class="col-9 ms-auto">
                                            <div class="row">
                                                <div class="col text-white fs-1 text-end" style="line-height: 1.1;">
                                                    MONITOREO DE ALARMAS
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-end text-white py-3" style="line-height: 1;">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, natus! Lorem ipsum dolor sit amet. Quia est explicabo corporis maiores molestias? Ad nostrum blanditiis odit tempore labore.
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8"></div>
                                                <div class="col-4 px-0">
                                                    <a href="#/" class="btn btn-outline text-white py-2 w-100" style="background-color: #028AE8;">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 py-5 alto-slider_servicios position-relative slider-content d-none" id="slider-03">
                        <div class="col-12 position-absolute top-0 start-0 alto-slider_servicios" style="
                            background-image: url('{{ asset('img/photos/home/Quienes_somos.png') }}');
                            background-position: center center;
                            background-repeat: no-repeat;
                            background-size: 100%;
                            border-top-right-radius: 32px; 
                            border-bottom-right-radius: 32px;
                            filter: brightness(0.4);
                        "></div>
                        <div class="col-12 position-absolute top-50 start-50 translate-middle z-3">
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <div class="row">
                                        <div class="col-9 ms-auto">
                                            <div class="row">
                                                <div class="col text-white fs-1 text-end" style="line-height: 1.1;">
                                                    PROTECCIÓN PERSONAL
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-end text-white py-3" style="line-height: 1;">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, natus! Lorem ipsum dolor sit amet. Quia est explicabo corporis maiores molestias? Ad nostrum blanditiis odit tempore labore.
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8"></div>
                                                <div class="col-4 px-0">
                                                    <a href="#/" class="btn btn-outline text-white py-2 w-100" style="background-color: #028AE8;">VER MÁS</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center d-flex align-items-center justify-content-between py-3 border">
                        <img src="{{ asset('img/photos/home/Flecha.png') }}" alt="">
                        <img src="{{ asset('img/photos/home/Rombo.png') }}" alt="">
                        <img src="{{ asset('img/photos/home/Rombo.png') }}" alt="">
                        <img src="{{ asset('img/photos/home/Rombo.png') }}" alt="">
                        <img src="{{ asset('img/photos/home/Flecha2.png') }}" alt="">
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
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('.link-slider_servicio');
            const sliders = document.querySelectorAll('.slider-content');
        
            links.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetId = this.getAttribute('data-target');
        
                    sliders.forEach(slider => {
                        if (slider.id === targetId) {
                            slider.classList.remove('d-none');
                        } else {
                            slider.classList.add('d-none');
                        }
                    });
                });
            });
        });
    </script>
        
@endsection





