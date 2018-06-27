 <!-- Menu -->
@guest
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Registrarse</a><li>
        <li><a href="{{ route('about') }}">Acerca de</a></li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
    </ul>
</nav>
@else

<nav id="menu">
    <h2>{{ $user->nombre.' '.$user->apellido }}</h2>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        @if($rol == 'user')
        <li><a href="{{ route('visitantes.index') }}">Visitantes</a></li>
        <li><a href="#">Funcionarios</a></li>
        <li><a href="#">Elementos</a></li>
        <li><a href="{{ route('minuta.index') }}">Bitácora</a></li>
        <li><a href="#">Expedientes</a></li>
        <li><a href="#">Informes</a></li>
        @endif
        @if($rol == 'admin')
        <li><a href="{{ route('puestos.index') }}">Puestos</a></li>
        @endif
        <li><a href="#">Mi Perfil</a><li>
        <li><a href="{{ route('about') }}">Acerca de</a></li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
        <li><a href="{{ route('logout') }}">Cerrar Sesión</a></li>    
    </ul>
</nav>

@endguest