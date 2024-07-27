<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Santiago Web" />
    <meta name="description" content="Bingo del Sol" />
    <meta name="keywords" content="bingo del sol, bingos del sol, bingo, sol" />
    <meta charset="UTF-8" />
    <title>Bingos del Sol</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />
</head>
<body>
    <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <p style="font-size: 1.75em; font-weight: 700; color: #fff; margin-top: 10px;">Bingo del Sol</p>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#home">Inicio</a></li>
                        <li><a href="#bingoOnline">Bingo Online</a></li>
                        <li><a href="#verEnVivo">Ver en Vivo</a></li>
                        <li><a href="#comprarCartones">Comprar Cartones</a></li>
                        <li><a href="#ultimosSorteos">Últimos Sorteos</a></li>
                        <li><a href="{{ url('panel/index.html#/login') }}">Iniciar Sesión</a></li>
                        <li><a href="{{ url('panel/index.html#/registro') }}">Registrarse</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="banner-content col-lg-12 col-md-12">
                    <img src="{{ asset('img/logo.jpg') }}" style="margin-bottom: 40px; margin-top: 20px" />
                    <h5 class="text-white text-uppercase">Sorteos todos los dias!</h5>
                    <h1 class="text-uppercase">Nuevo bingo online</h1>
                    <p class="text-white pt-20 pb-20">Participá en el proximo bingo online y ganá grandes premios!</p>
                    <a href="{{ url('panel/index.html#/comprarCartonesOpciones/') }}" class="primary-btn header-btn text-uppercase">Ingresar</a>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/easing.min.js') }}"></script>
    <script src="{{ asset('js/hoverIntent.js') }}"></script>
    <script src="{{ asset('js/superfish.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/api.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
