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

    body {
        overflow-x: hidden;
    }

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

        .barra-contacto {
            margin-top: 10px;
        }
    }

    @media(min-width: 576px) and (max-width: 992px) {
        .fondo-nosotros {
            background-color: #0287DA;
        }

        .valores-grande { display: block; }
        .valores-chico { display: none; }

        .barra-contacto {
            margin-top: 10px;
        }
    }

    @media(min-width: 0px) and (max-width: 576px) {
        .fondo-nosotros {
            background-color: #0287DA;
        }

        .valores-grande { display: none; }
        .valores-chico { display: block; }

        .barra-contacto {
            margin-top: 14px;
        }
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
    .galeria_c {
        position: relative;
    }

    .oculto_d {
        display: none;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5); /* Ajusta el color de fondo según necesites */
        z-index: 3; /* Ajusta el z-index según sea necesario para que esté sobre el contenido */
        filter: 100%;
    }

    .galeria_c:hover .oculto_d {
        display: block; /* Muestra el elemento oculto al hacer hover sobre .slider_c */
    }
</style>

<style>
    .contacto_d {
        position: relative;
    }

    .oculto_d {
        display: none;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5); /* Ajusta el color de fondo según necesites */
        z-index: 3; /* Ajusta el z-index según sea necesario para que esté sobre el contenido */
        filter: 100%;
    }

    .contacto_d:hover .oculto_d {
        display: block; /* Muestra el elemento oculto al hacer hover sobre .slider_c */
    }
</style>


@endsection

@section('content')

    <div class="row mt-5 mb-4 px-2">
        <a href="{{ route('front.admin') }}" class="mt-5 col col-md-2 btn btn-sm btn-dark mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>

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
                                    <div class="col-lg-6 col-12 mt-5 position-relative">
                                        <img src="{{ asset('img/photos/imagenes_estaticas/'.$elem_general[6]->imagen) }}" alt="" class="img-fluid">
                                        <div class="col-9 position-absolute top-50 start-50 translate-middle">
                                            <form id="form_img_perfil" action="{{ route('ajax.cambiar_imagen') }}" method="POST" class="file-upload" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id_imagen" value="{{ $elem_general[6]->id }}">
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
                                    <div class="col-lg-6 col-12">
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
                                                <textarea type="text" cols="30" rows="12" class="form-control editarajax bg-transparent descripcion-nosotros" data-model="Elemento" data-field="texto" data-id="{{ $elem_general[8]->id }}">
                                                    {{ $elem_general[8]->texto }}
                                                </textarea>
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
                                        <textarea type="text" cols="30" rows="12" class="form-control editarajax" data-model="Elemento" data-field="texto" data-id="{{ $elem_general[9]->id }}">
                                            {{ $elem_general[9]->texto }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-9 mx-auto descripcion-nosotros2">
                                        <textarea type="text" cols="30" rows="12" class="form-control editarajax" data-model="Elemento" data-field="texto" data-id="{{ $elem_general[10]->id }}">
                                            {{ $elem_general[10]->texto }}
                                        </textarea>
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
            <div class="col-11 mx-auto mt-5 mb-5 galeria_c position-relative">
                <div class="col-12 position-absolute top-0 bottom-0 start-0 oculto_d z-3">
                    <div class="row h-100">
                        <div class="col-8 mx-auto d-flex align-items-center justify-content-center">
                            <a href="{{ route('seccion.show', ['slug' => 'galeria']) }}" class="btn btn-light fs-1 p-2 w-100">Editar en Galeria</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for ($i = 0; $i < 6; $i++) 
                        <div class="col-lg-4 col-6 px-1 py-1">
                            <div class="card rounded-0">
                                <img src="{{ asset('img/photos/galerias/27002.jpg') }}" alt="imagen-galeria" class="img-fluid">
                            </div>
                        </div>
                    @endfor
                </div>
            </div>    
        </div> 
    </div>    

    <div class="container-fluid contacto_d px-0 py-5" style="background-color: #028AE8;">
        <div class="row  px-0">
            <div class="col position-relative">
                <div class="col-12 position-absolute top-0 bottom-0 start-0 oculto_d z-3">
                    <div class="row h-100">
                        <div class="col-8 mx-auto d-flex align-items-center justify-content-center">
                            <a href="{{ route('seccion.show', ['slug' => 'capacitacion']) }}" class="btn btn-light fs-1 p-2 w-100">Editar en capacitación</a>
                        </div>
                    </div>
                </div>
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
        </div>
    </div>

 
@endsection

@section('extraJS')
    
    

@endsection

