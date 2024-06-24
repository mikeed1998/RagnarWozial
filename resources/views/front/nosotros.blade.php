@extends('layouts.app')

@section('title', 'Nosotros')

@section('extracss')
    <style>
        .fondo-nosotros {
            height: 820px;
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
                                <div class="col-lg-11 col-md-9 col-12 mx-auto mt-5 position-relative">
                                    <div class="row">
                                        <div class="col-7">
                                            <img src="{{ asset('img/photos/nosotros/ragnar.png') }}" alt="" class="img-fluid">
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
    

@endsection

@section('scripts')
   
@endsection