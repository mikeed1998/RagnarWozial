<style>
    
    header, .navbar {
        background-color: #100643;
    }

    .texto-header {
        color: #FFFFFF;
        font-weight: 500;
        font-size: 1.25rem;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
    }

    .texto-header:hover {
        background-color: #008AE2;   
    }

    .texto-header-servicios {
        color: #FFFFFF;
        font-weight: 500;
        font-size: 1.25rem;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
    }

    @media(min-width: 992px) {
        .header-xl { display: show; }
        .header-xs { display: none; }
    }

    @media(min-width: 576px) and (max-width: 992px) {
        .header-xl { display: none; }
        .header-xs { display: show; }
    }

    @media(min-width: 0px) and (max-width: 576px) {
        .header-xl { display: none; }
        .header-xs { display: show; }
    }

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
        font-size: 1.25rem;
        font-weight: 500;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }

    .lista-uno {
        margin-left: -50px;
        width: 400px;
        display: none;
    }

    .romboide-servicio:hover .lista-uno {
        display: block; /* Mostrar al hacer hover */
    }   

    .categoria-link:hover {
        color:#008AE2;
    }

    .lista-categoria:hover {
        background-color: #008AE2;
    }

</style>

<header class="header-xl"> 
    <div class="container-fluid" style="background-color: #100643;">
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
                                <div class="bg-white position-absolute border lista-uno z-3" style="border-bottom-left-radius: 1rem; border-bottom-right-radius: 1rem;">
                                    <ul class="py-2" style="list-style: none;">
                                        <li class="py-2" style="font-size: 1.25rem; font-weight: 600;">
                                            <a href="#/" class="categoria-link nav-link"><i class="bi bi-chevron-right"></i> SEGURIDAD PRIVADA</a>
                                        </li>
                                        <li class="py-2" style="font-size: 1.25rem; font-weight: 600;">
                                            <a href="#/" class="categoria-link nav-link"><i class="bi bi-chevron-right"></i> MONITOREO DE ALARMAS</a>
                                        </li>
                                        <li class="py-2" style="font-size: 1.25rem; font-weight: 600;">
                                            <a href="#/" class="categoria-link nav-link"><i class="bi bi-chevron-right"></i> PROTECCIÓN PERSONAL</a>
                                        </li>
                                        <li class="py-2" style="font-size: 1.25rem; font-weight: 600;">
                                            <a href="#/" class="categoria-link nav-link"><i class="bi bi-chevron-right"></i> SERVICIO 04</a>
                                        </li>
                                        <li class="py-2" style="font-size: 1.25rem; font-weight: 600;">
                                            <a href="#/" class="categoria-link nav-link"><i class="bi bi-chevron-right"></i> SERVICIO 05</a>
                                        </li>
                                        <li class="py-2" style="font-size: 1.25rem; font-weight: 600;">
                                            <a href="#/" class="categoria-link nav-link"><i class="bi bi-chevron-right"></i> SERVICIO 06</a>
                                        </li>
                                        <li class="py-2" style="font-size: 1.25rem; font-weight: 600;">
                                            <a href="#/" class="categoria-link nav-link"><i class="bi bi-chevron-right"></i> SERVICIO 07</a>
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
</header>

<header class="header-xs" style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/photos/home/Logo_horizontal.png') }}" alt="logo" class="img-fluid"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa-solid fa-bars text-white fs-1"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item texto-header">
                        <a class="nav-link text-white" aria-current="page" href="#">INICIO</a>
                    </li>
                    <li class="nav-item texto-header-servicios">
                        <a class="nav-link text-white" aria-current="page" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            SERVICIOS <i class="bi bi-plus"></i>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body bg-transparent border border-white">
                                <div class="">
                                    <a href="#" class="list-group-item lista-categoria">SEGURIDAD PRIVADA</a>
                                    <a href="#" class="list-group-item lista-categoria">MONITOREO DE ALARMAS</a>
                                    <a href="#" class="list-group-item lista-categoria">PROTECCIÓN PERSONAL</a>
                                    <a href="#" class="list-group-item lista-categoria">SERVICIO 04</a>
                                    <a href="#" class="list-group-item lista-categoria">SERVICIO 05</a>
                                    <a href="#" class="list-group-item lista-categoria">SERVICIO 06</a>
                                    <a href="#" class="list-group-item lista-categoria">SERVICIO 07</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item texto-header">
                        <a class="nav-link text-white" aria-current="page" href="#">NOSOTROS</a>
                    </li>
                    <li class="nav-item texto-header">
                        <a class="nav-link text-white" aria-current="page" href="#">CONTACTO</a>
                    </li>
                    <li class="nav-item">
                        <div class="row">
                            <div class="col text-center">
                                <a href="#/" class="btn btn-outline border-none">
                                    <i class="bi bi-whatsapp text-white fs-5"></i>
                                </a>
                                <a href="#/" class="btn btn-outline border-none">
                                    <i class="bi bi-facebook text-white fs-5"></i>
                                </a>
                                <a href="#/" class="btn btn-outline border-none">
                                    <i class="bi bi-instagram text-white fs-5"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



