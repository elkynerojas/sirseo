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

                        </div>
                    </header>

               

                <!-- Main -->
                    <div id="main">
                        <div class="inner">
                            <header>
                                <h1>SIRSEO</h1><br />
                                <h3>Sistema Integrado De Registros De Seguridad Para Entidades Oficiales</h3>
                            </header>
                            <section>
                                <h2>Registro de Usuario</h2>
                                <form method="post" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row uniform">
                                        <div class="6u 12u$(xsmall)">
                                            <input type="text" name="name" id="name" value="" placeholder="Nombre" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus />
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="6u$ 12u$(xsmall)">
                                            <input type="email" name="email" id="email" value="" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required />
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row uniform">
                                        <div class="6u 12u$(xsmall)">
                                            <input type="password" name="password" id="password" value="" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="6u$ 12u$(xsmall)">
                                            <input type="password" id="password-confirm" value="" placeholder="Confirmar" class="form-control" name="password_confirmation" required />
                                        </div>
                                       
                                        <div class="12u$">
                                            <ul class="actions">
                                                <li><input type="submit" value="Registro" class="special" /></li>
                                                <li><input type="reset" value="Reset" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </section>
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

    </body>
</html>