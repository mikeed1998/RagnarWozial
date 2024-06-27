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
   
@endsection

@section('content')

    <div class="row mt-5 mb-4 px-2">
        <a href="{{ route('front.admin') }}" class="mt-5 col col-md-2 btn btn-sm btn-dark mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col py-1 fs-1 fw-bolder text-center">
                Capacitación
            </div>
        </div>
        <div class="row">
            <div class="col-6 mx-auto py-3">
                <button class="btn btn-dark w-100 rounded-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar nuevo</button>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5" style="background-color: #028AE8;">
        <div class="row">
            @foreach ($capacitaciones as $cap)
                <div class="col-xl-3 col-md-6 col-6 py-lg-3 py-md-3 py-3">
                    <div class="row">
                        <div class="col position-relative text-center">
                            <img src="{{ asset('img/photos/home/Marco.png') }}" alt="" class="img-fluid">
                            <div class="col-12 position-absolute top-50 start-50 translate-middle">
                                <img src="{{ asset('img/photos/capacitaciones/'.$cap->icono) }}" alt="">
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

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Crear nuevo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('capacitacion.capacitacion.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 py-2">
                            <label for="texto" class="form-control-label">Texto</label>
                            <input required type="text" name="texto" class="form-control">
                        </div>
                        <div class="col-12 py-2">
                            <label for="texto" class="form-control-label">Icono</label>
                            <input required type="file" name="icono" class="form-control">
                        </div>
                        <div class="col-12 py-2">
                            <input type="submit" class="btn btn-dark rounded-0 w-100" value="Crear">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger rounded-0 w-100" data-bs-dismiss="modal">Cancelar y salir</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extraJS')
    
@endsection

