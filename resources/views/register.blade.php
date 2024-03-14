@extends('layout.head')

@section('title', 'Register - myMeds')

<body>
    <div class="background">
        <div class="pagina">
            @include('layout._partials.menu')
            <!-- Formularios -->
            <section class="formulario">
                <div class="formulario__contenedor">

                    <!-- Registrarse -->
                    <div class="formulario__registrarse">
                        <h1 class="formulario__registro-title">Registrarse</h1>
                        <form action="{{ route('register') }}" method="GET" class="formulario__form">
                            @csrf

                            <div class="formulario__fila-arriba">
                                <div class="formulario__contenedor-input">
                                    <label class="formulario__label">
                                        Nombre <span class="formulario__req">*</span>
                                    </label>
                                    <input id="name" name="name" value="{{ old('name') }}" type="text"
                                        class="formulario__input" required minlenght="3" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="formulario__contenedor-input">
                                    <label class="formulario__label">
                                        Apellido <span class="formulario__req">*</span>
                                    </label>
                                    <input id="lastname" name="lastname" type="text" class="formulario__input"
                                        value="{{ old('lastname') }}" required minlength="3" autocomplete="lastname">

                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="formulario__contenedor-input">
                                <label class="formulario__label">
                                    Usuario <span class="formulario__req">*</span>
                                </label>
                                <input id="user_name" name="user_name" type="text" class="formulario__input"
                                    value="{{ old('user_name') }}" required minlength="3" autocomplete="user_name">

                                @error('user_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="formulario__contenedor-input">
                                <label class="formulario__label">
                                    Email <span class="formulario__req">*</span>
                                </label>
                                <input id="email" name="email" type="email" value="{{ old('user_name') }}"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="formulario__input" required
                                    autocomplete="email">
                            </div>

                            <!-- La contraseña tiene que tener una letra mayuscula, una minuscula, un digito y minimo 8 caracteres -->
                            <div class="formulario__contenedor-input">
                                <label class="formulario__label">
                                    Contraseña <span class="formulario__req">*</span>
                                </label>
                                <input id="password" name="password" type="password" class="formulario__input" required
                                    minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <input type="submit" class="btn--form" value="Registrarse">
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
    @include('layout._partials.footer')
</body>

</html>