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
                                <h2>Ingreso a SIRSEO</h2>
                                <form method="post" action="{{ route('login') }}">
                                     @csrf
                                    <div class="row uniform">
                                        
                                        <div class="6u$ 12u$(xsmall)">
                                           <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <input type="email" name="email" id="demo-email" value="" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus/>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="6u 12u$(xsmall)">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                            <input type="password" name="password" id="password" value="" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="12u$">
                                            <ul class="actions">
                                                <li><input type="submit" value="Login" class="special" /></li>
                                                <li><input type="reset" value="Regresar" /></li>
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