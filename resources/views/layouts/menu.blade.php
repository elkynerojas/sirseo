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
    <h2>{{ $user->name }}</h2>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
        <li><a href="{{ route('about') }}">Acerca de</a></li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
        <li><a href="#">Mi Perfil</a><li>
    </ul>
</nav>
@endguest