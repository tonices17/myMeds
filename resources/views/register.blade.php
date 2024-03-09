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
                        <form action="#" method="post" class="formulario__form">
                            <div class="formulario__fila-arriba">
                                <div class="formulario__contenedor-input">
                                    <label class="formulario__label">
                                        Nombre <span class="formulario__req">*</span>
                                    </label>
                                    <input type="text" class="formulario__input" required minlenght="3">
                                </div>

                                <div class="formulario__contenedor-input">
                                    <label class="formulario__label">
                                        Apellido <span class="formulario__req">*</span>
                                    </label>
                                    <input type="text" class="formulario__input" required minlength="3">
                                </div>
                            </div>
                            <div class="formulario__contenedor-input">
                                <label class="formulario__label">
                                    Usuario <span class="formulario__req">*</span>
                                </label>
                                <input type="text" class="formulario__input" required minlength="3">
                            </div>
                            <div class="formulario__contenedor-input">
                                <label class="formulario__label">
                                    Email <span class="formulario__req">*</span>
                                </label>
                                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                    class="formulario__input" required>
                            </div>

                            <!-- La contraseña tiene que tener una letra mayuscula, una minuscula, un digito y minimo 8 caracteres -->
                            <div class="formulario__contenedor-input">
                                <label class="formulario__label">
                                    Contraseña <span class="formulario__req">*</span>
                                </label>
                                <input type="password" class="formulario__input" required minlength="8"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                            </div>

                            <div class="formulario__contenedor-input">
                                <label class="formulario__label">
                                    Repetir Contraseña <span class="formulario__req">*</span>
                                </label>
                                <input type="password" class="formulario__input" required minlength="8"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
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