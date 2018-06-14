<!DOCTYPE HTML>

<html>
    <head>
        <title>SIRSEO | BY REDSOFT</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>
        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                    <header id="header">
                        <div class="inner">

                            <!-- Logo -->
                                <a href="#" class="logo">
                                    <span class="symbol"><img src="{{ asset('images/sirseo.png') }}" alt="" /></span><span class="title">SIRSEO</span>
                                </a>

                            <!-- Nav -->
                                <nav>
                                    <ul>
                                        <li><a href="#menu">Menu</a></li>
                                    </ul>
                                </nav>

                        </div>
                    </header>

                <!-- Menu -->
                	@guest
                	<nav id="menu">
                        <h2>Menu</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a><li>
                            <li><a href="#">Acerca de</a></li>
                            <li><a href="{{ route('contact') }}">Contacto</a></li>
                        </ul>
                    </nav>
                	@else
                	<nav id="menu">
                        <h2>{{ $user->name }}</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                            <li><a href="#">Acerca de</a></li>
                            <li><a href="{{ route('contact') }}">Contacto</a></li>
                            <li><a href="#">Mi Perfil</a><li>
                        </ul>
                    </nav>
                	
                	@endguest
                   

                <!-- Main -->
                    <div id="main">
                        <div class="inner">
                            <header>
                                {{-- <h1>SIRSEO</h1><br /> --}}
                                <h1>Sistema Integrado De Registros De Seguridad Para Entidades Oficiales</h1><br>
                                <h3>Bienvenido a Nuestra Plataforma</h3><br>
                                @guest
                                <h3><a href="{{ route('login') }}">Inicie Sesión</a></h3>
                                @else
                                <h1>{{ $user->name }}</h1>
                                @endguest
                            </header>
                            @yield('content')
                        </div>
                    </div>

                <!-- Footer -->
                    <footer id="footer">
                        <div class="inner">
                            <section>
                                <h2>Siganos En Redes Sociales</h2>
                                <ul class="icons">
                                    <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                                    <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                                    <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                                    <li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                                    <li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
                                    <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                                    <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                                    <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                                </ul>
                            </section>
                            <ul class="copyright">
                                <li>&copy;Todos los derechos reservados</li><li>Diseñado y desarrollado por: Redsoft Developers 2018</li>
                            </ul>
                        </div>
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/skel.min.js') }}"></script>
            <script src="{{ asset('js/util.js') }}"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="{{ asset('js/main.js') }}"></script>
            @yield('scripts')

    </body>
</html>
