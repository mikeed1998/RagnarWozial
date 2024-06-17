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

  
    .parent {
    position: relative;
    color: white;
}

.parent a {
    display: block;
    width: 100%;
    padding: 15px 5px; /* Ajusta según sea necesario */
    color: white;
    text-decoration: none;
    text-align: left;
    /* border: 1px solid white; */
}

.parent:hover > ul {
    display: block;
    position: absolute;
}

.child {
    display: none;
    /* margin-right: {}; */
    width: 260px;
    border: 0;
}

.child li {
    background-color: white;
    /* line-height: 40px; */
    border-bottom: #b5b5b5 1px solid;
    border-right: #b5b5b5 1px solid;
    width: 100%;
}

.child li a {
    display: block;
    width: 100%;
    padding: 10px 15px;
    color: #000000;
    text-decoration: none;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

ul ul ul {
    left: 100%;
    top: 0;
}

li:hover {
    background-color: transparent;
}

.parent li:hover {
    background-color: #F0F0F0;
}

.expand {
    font-size: 12px;
    float: right;
    margin-right: 5px;
}


        


</style>

<header class="header-xl"> 
    <div class="container-fluid">
        <div class="row alto-header">
            <div class="col position-relative">
                
                <div class="row">
                    <div class="col-md-3 col-12">
                        <div class="row">
                            <div class="col-9 mx-auto py-1">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('img/photos/home/Logo_horizontal.png') }}" alt="logo" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="row">
                            <a href="#/" class="col-md-3 col-12 py-4 texto-header">INICIO</a>
                                
                                <ul class="col-md-3 col-12 d-flex align-items-center justify-content-center texto-header servicios-header position-relative multilevel-dropdown-menu">
                                    <li class="parent">
                                        <a href="#">SERVICIOS</a>
                                        <ul class="child">
                                            <li class="parent"><a href="#">Seguridad privada </a>
                                                <ul class="child">
                                                    <li class="border-start"><a href="#">Servicio 05</a></li>
                                                    <li class="border-start"><a href="#">Servicio 06</a></li>
                                                    <li class="border-start"><a href="#">Servicio 07</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Monitoreo de alarmas</a></li>
                                            <li><a href="#">Protección personal</a></li>
                                            <li class="parent"><a href="#">Servicio 04</a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            
                            {{-- </a> --}}
                            <a href="#/" class="col-md-3 col-12 py-4 texto-header">NOSOTROS</a>
                            <a href="#/" class="col-md-3 col-12 py-4 texto-header">CONTACTO</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 py-3">
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
                    <li class="nav-item texto-header">
                        <a class="nav-link text-white" aria-current="page" href="#">SERVICIOS</a>
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



