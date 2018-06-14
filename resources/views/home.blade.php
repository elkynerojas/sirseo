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
                                <a href="{{ route('home') }}" class="logo">
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
                    <nav id="menu">
                        <h2>{{ $user->name }}</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>
                                <a 
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <li><a href="#">Acerca de</a></li>
                            <li><a href="{{ route('contact') }}">Contacto</a></li>
                            <li><a href="#">Mi Perfil</a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </nav>

                <!-- Main -->
                    <div id="main">
                        <div class="inner">
                            <header>
                                {{-- <h1>SIRSEO</h1><br /> --}}
                                <h3>Sistema Integrado De Registros De Seguridad Para Entidades Oficiales</h3><br>
                                <h1>Bienvenido {{ $user->name }}<h1>
                            </header>
                            <section class="tiles">
                                <article class="style1">
                                    <span class="image">
                                        <img src="{{ asset('images/pic01.jpg') }}" alt="" />
                                    </span>
                                    <a href="generic.html">
                                        <h2>Registro de Vistantes</h2>
                                        <div class="content">
                                            <p>Registro y consulta de datos de personas visitantes</p>
                                        </div>
                                    </a>
                                </article>
                                <article class="style2">
                                    <span class="image">
                                        <img src="{{ asset('images/pic02.jpg') }}" alt="" />
                                    </span>
                                    <a href="generic.html">
                                        <h2>Registro de Funcionarios</h2>
                                        <div class="content">
                                            <p>Registro y consulta de ingreso y salida de funcionarios de la entidad</p>
                                        </div>
                                    </a>
                                </article>
                                <article class="style3">
                                    <span class="image">
                                        <img src="{{ asset('images/pic03.jpg') }}" alt="" />
                                    </span>
                                    <a href="generic.html">
                                        <h2>Registro de Elementos</h2>
                                        <div class="content">
                                            <p>Registro y consulta de entrada y salida de elementos propios y ajenos a la entidad</p>
                                        </div>
                                    </a>
                                </article>
                                <article class="style4">
                                    <span class="image">
                                        <img src="{{ asset('images/pic04.jpg') }}" alt="" />
                                    </span>
                                    <a href="generic.html">
                                        <h2>Bitácora</h2>
                                        <div class="content">
                                            <p>Registro y consulta de información relevante relacionada con la seguridad 
                                            en la entidad organizada en ordén cronológico </p>
                                        </div>
                                    </a>
                                </article>
                                <article class="style5">
                                    <span class="image">
                                        <img src="{{ asset('images/pic05.jpg') }}" alt="" />
                                    </span>
                                    <a href="generic.html">
                                        <h2>Registro de Expedientes</h2>
                                        <div class="content">
                                            <p>Registro y consulta de entrada y salida de documentos y expedientes de la entidad</p>
                                        </div>
                                    </a>
                                </article>
                                <article class="style6">
                                    <span class="image">
                                        <img src="{{ asset('images/pic06.jpg') }}" alt="" />
                                    </span>
                                    <a href="generic.html">
                                        <h2>Informes de Novedades</h2>
                                        <div class="content">
                                            <p>Registro y consulta de Informes oficiales realizados por el personal de seguridad</p>
                                        </div>
                                    </a>
                                </article>
                            </section>
                        </div>
                    </div>

                <!-- Footer -->
                    <footer id="footer">
                        <div class="inner">
                            <!-- <section>
                                <h2>Get in touch</h2>
                                <form method="post" action="#">
                                    <div class="field half first">
                                        <input type="text" name="name" id="name" placeholder="Name" />
                                    </div>
                                    <div class="field half">
                                        <input type="email" name="email" id="email" placeholder="Email" />
                                    </div>
                                    <div class="field">
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <ul class="actions">
                                        <li><input type="submit" value="Send" class="special" /></li>
                                    </ul>
                                </form>
                            </section> -->
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

    </body>
</html>