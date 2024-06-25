@extends('layouts.app')

@section('title', 'Contacto')

@section('extracss')

    <style>

        .portada-contacto {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 100%;
        }

        @media(min-width: 992px) {
            .portada-contacto {
                height: 758px;
            }
        }

        @media(min-width: 576px) and (max-width: 992px) {
            .portada-contacto {
                height: 410px;
            }
        }

        @media(min-width: 0px) and (max-width: 576px) {
            .portada-contacto {
                height: 218px;
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
            <div class="col position-relative py-5">
                <div class="col-9 position-absolute top-0 start-50 translate-middle py-5 border border-danger" style="height: 20rem;">

                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    
    <script>

    </script>

@endsection