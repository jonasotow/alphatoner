<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" sizes="192x192" href="{{ asset('/img/alphatoner/logo_web.png') }}">

    <!-- Fonts -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!-- Styles --> 
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material-fullpalette.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('/css/ripples.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material.css') }}" rel="stylesheet"> 
    <link href="{{ asset('/css/base.css') }}" rel="stylesheet"> 
    <link href="{{ asset('/css/pace.css') }}" rel="stylesheet"> 

    <!-- Metas -->
    <title>Alpha Toner - Toner Genérico -- Envio a toda la republica Méxicana</title>
    <meta name="description" content="Toner Genérico de las marcas HP, CANON, SAMSUNG, XEROX, LEXMARK, KYOCERA, BROTHER, RICOH, OKIDATA, DELL, SHARP, con evnio a toda la republica Méxicana">
    <meta property="og:title" content="Alpha Toner - Toner Genérico" />
    <meta property="og:description" content="Toner Genérico de las marcas HP, CANON, SAMSUNG, XEROX, LEXMARK, KYOCERA, BROTHER, RICOH, OKIDATA, DELL, SHARP, con evnio a toda la republica Méxicana">
    <meta name="author" content="THRIVE.MX">


<!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#607d8b">
<!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#607d8b">
<!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">
                <a href="{{ url('/') }}">
                    <img class="apt-logo-image" src="{{ asset('/img/alphatoner/logo_web.jpg') }}">
                </a>
            </span>
            <div class="mdl-layout-spacer"></div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right fixbottomlading">
                <a href="{{url('/carrito')}}" class="mdl-button mdl-js-button mdl-button--icon">

                    <i class="material-icons mdl-badge mdl-badge--overlap" data-badge="{{$productsCount}}">shopping_cart</i>

                </a>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" name="sample" id="waterfall-exp">
                </div>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right myaccount fixbottomlading">
                <label class="mdl-button mdl-js-button mdl-button--icon" id="apt-menu-lower-right" >
                    <i class="material-icons">account_circle</i>
                </label>
                
                @if (Auth::guest())
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="apt-menu-lower-right">
                        <li class="mdl-menu__item"><a href="{{ url('/login') }}">Mi cuenta</a></li>
                        <li class="mdl-menu__item"><a href="{{ url('/register') }}">Registrate</a></li>
                    </ul>
                @else
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="apt-menu-lower-right">
                        <li class="mdl-menu__item">                            
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} </a>
                        </li>
                        <hr>
                        <li class="mdl-menu__item">
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesión </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }} </form>
                        </li>

                    </ul>

                
                @endif

            </div>
        </div>
    </header>

    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">
            <a href="{{ url('/') }}"> 
                <img class="apt-logo-image" src="{{ asset('/img/alphatoner/logo_web.jpg') }}">
            </a>
        </span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Toner</a>
            <a class="mdl-navigation__link" href="">Cartuchos de Toner</a>
            <a class="mdl-navigation__link" href="">Accesorios</a>
            <a class="mdl-navigation__link" href="">Impresoras</a>
        </nav>


    </div>
    <main class="mdl-layout__content">
        <div class="page-content">

            <section>

            @yield('content')

            </section>
            
            <footer class="mdl-mega-footer">
                <div class="mdl-mega-footer__middle-section">

                    <div class="mdl-mega-footer__drop-down-section">
                        <h1 class="mdl-mega-footer__heading">Alpha Toner</h1>
                        <ul class="mdl-mega-footer__link-list">
                            <li><a href="#">Quienes Somos</a></li>
                            <li><a href="#">Misión</a></li>
                            <li><a href="#">Visión</a></li>
                        </ul>
                    </div>

                    <div class="mdl-mega-footer__drop-down-section">
                        <h1 class="mdl-mega-footer__heading">Ayuda</h1>
                        <ul class="mdl-mega-footer__link-list">
                            <li><a href="#">Herramientas</a></li>
                            <li><a href="#">Recursos</a></li>
                        </ul>
                    </div>

                    <div class="mdl-mega-footer__drop-down-section">
                        <h1 class="mdl-mega-footer__heading">Servicio al Cliente</h1>
                        <ul class="mdl-mega-footer__link-list">
                            <li><a href="#">Envios</a></li>
                            <li><a href="#">Formas de Pago</a></li>
                            <li><a href="#">Preguntas y respuestas</a></li>
                            <li><a href="#">Garantias</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>

                </div>

                <div class="mdl-mega-footer__bottom-section">
                    <div class="mdl-logo">
                        <a href="{{ url('/') }}">
                            <img class="apt-logo-image" src="{{ asset('/img/alphatoner/logo_web.png') }}">
                        </a>
                    </div>
                    <div class="mdl-mega-footer__link-list">
                        <a href="#">Condiciones de Uso - Aviso de Privacidad</a>
                    </div>
                </div>

                <div class="apt-footer__info">
                    <span class="apt-footer__title">Alpha Toner</span>
                    <span class="apt-footer__subtitle">Compuaccesorios Limited S.A de C.V</span>
                    <span class="apt-footer__adr">Calle López Cotilla #828, Col. Americana CP 44160 Guadalajara Jalisco México.</span>
                    <span class="apt-footer__dr">Derechos Reservados 2016</span>
                </div>

            </footer>
        </div>
    </main>
</div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
    <script src="{{ asset('/js/pace.js') }}"></script>
    <script src="{{ asset('/js/material.js') }}"></script>
    <script>
        $.material.init();
    </script>

</body>

</html>