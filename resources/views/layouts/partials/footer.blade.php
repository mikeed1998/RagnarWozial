<style>
    
    .icono-footer {
        color: #028AE8;
        text-decoration: none;
    }

    .icono-footer:hover {
        color: #FFFFFF;
    }

    .link-footer {
        color: #FFFFFF;
        text-decoration: none;
    }

    .link-footer:hover {
        color: #028AE8;
    }

</style>

<footer>
    <div class="container-fluid">
        <div class="row" style="background-color: #0F0743;">>
            <div class="col-lg-7 col-md-11 col-12 mx-auto py-5">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="row">
                            <div class="col-md-9 col-12 mt-2 text-center mx-auto">
                                <img src="{{ asset('img/photos/home/Logo_normal.png') }}" alt="logo" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-11 text-white mx-auto py-3">
                        <div class="row">
                            <div class="col-12 ">NAVEGACIÓN</div>
                            <div class="col-11 mx-auto">
                                <div class="row">
                                    <div class="col-2 border-2 border-bottom border-primary"></div>
                                </div>
                            </div>
                            <a href="{{ route('front.home') }}" class="col-12 link-footer text-decoration-none mt-3" style="font-size: 0.8rem;">Inicio</a>
                            <a href="{{ route('front.home') }}" class="col-12 link-footer text-decoration-none" style="font-size: 0.8rem;">Servicios</a>
                            <a href="{{ route('front.nosotros') }}" class="col-12 link-footer text-decoration-none" style="font-size: 0.8rem;">Nosotros</a>
                            <a href="{{ route('front.contacto') }}" class="col-12 link-footer text-decoration-none" style="font-size: 0.8rem;">Contacto</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-11 text-white mx-auto py-3">
                        <div class="row">
                            <div class="col-12 ">CONTACTO</div>
                            <div class="col-11 mx-auto">
                                <div class="row">
                                    <div class="col-2 border-2 border-bottom border-primary"></div>
                                </div>
                            </div>
                            <div class="col-12 mt-3" style="font-size: 0.8rem; text-decoration: none;">Tel. {{ $config->whatsapp }}</div>
                            <div class="col-12" style="font-size: 0.8rem; text-decoration: none;">Email: {{ $config->destinatario }}</div>
                            <div class="col-12" style="font-size: 0.8rem; text-decoration: none;">
                                <a href="http://wa.me/{{ $config->whatsapp }}" class="text-decoration-none">
                                    <i class="bi bi-whatsapp fs-4 px-1 icono-footer"></i>
                                </a>
                                <a href="{{ $config->facebook }}" class="text-decoration-none">
                                    <i class="bi bi-facebook fs-4 px-1 icono-footer"></i>
                                </a>
                                <a href="{{ $config->instagram }}" class="text-decoration-none">
                                    <i class="bi bi-instagram fs-4 px-1 icono-footer"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: #028AE8;">
            <div class="col py-3 text-center" style="color: #0F0743;">
                RAGNAR todos los derechos reservados, diseñado por WOZIAL
            </div>
        </div>
    </div>
</footer>