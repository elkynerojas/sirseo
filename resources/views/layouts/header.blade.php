<header>
    <h1>Sistema Integrado De Registros De Seguridad Para Entidades Oficiales</h1><br>
    <h3>Bienvenido a Nuestra Plataforma</h3><br>
    @guest
    <h3><a href="{{ route('login') }}">Inicie Sesión</a></h3>
    @else
    <h1>{{ $user->nombre.' '.$user->apellido }}</h1>
    @endguest
</header>