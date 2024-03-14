<nav class="nav">
    <div class="nav__contenedor flex--row">
        <a class="nav__logo" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="pastilla-logo">
            <span class="nav__logo-letra">myMeds</span>
        </a>
        <ul class="nav__lista flex--row">
            <li class="nav__lista-item">
                <a href="{{ route('home') }}#caracteristicas">Características</a>
            </li>
            <li class="nav__lista-item">
                <a href="{{ route('home') }}#funciona">Cómo funciona</a>
            </li>
            <li class="nav__lista-item">
                <a href="{{ route('home') }}#contacto">Contacto</a>
            </li>
            <li class="nav__lista-item">
                @if (@session('success'))
                <a href="{{ route('profile') }}" class="nav__login">
                    <img src="{{ asset('assets/img/login.png') }}" alt="login-user">
                </a>
                @else
                <a href="{{ route('register') }}" class="nav__login">
                    <img src="{{ asset('assets/img/login.png') }}" alt="login-user">
                </a>
                @endif

            </li>
        </ul>
        <img class="nav__menu" src="{{ asset('assets/img/menu.png') }}" alt="menu">
    </div>
</nav>