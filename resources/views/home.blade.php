@extends('layout.head')

@section('title','Home - myMeds')

<body>
    <div class="background">
        <div class="pagina">
            <!-- NAV -->
            @include('layout._partials.menu')
            <!-- HEADER -->
            <header class="header">
                <div class="header__contenedor flex--row">
                    <div class="header__columna-1">
                        <div class="header__titulo flex--column">
                            <h1 class="heading--primary">
                                TU SALUD, <br><span class="heading--secondary">EN TUS MANOS</span>
                            </h1>
                            <p class="heading--descripcion">Lleva la toma de tus pastillas de una manera<br> más
                                controlada. ¡No más dudas!
                            </p>
                            <!-- Estos botones llevarán a las paginas de iniciar sesión o de registrarse -->
                            <div class="header__botones flex--row">
                                <a class="btn btn--primary" href="{{ route('register') }}">Iniciar Sesión</a>
                                <a class="btn btn--secondary" href="{{ route('register') }}">Registrarse</a>
                            </div>
                        </div>
                    </div>
                    <div class="header__columna-2">
                        <img class="header__imagen" src="{{ asset('assets/img/imgHeader.png') }}"
                            alt="persona con medicamentos y un horario">
                    </div>
                </div>
            </header>
            <!-- CUADRO CARACTERISTICAS -->
            <section id="caracteristicas" class="cuadrado">
                <div class="cuadrado__contenedor flex--row">
                    <div class="cuadrado__columna-1 flex--column">
                        <div class="cuadrado__img-columna">
                            <img src="{{ asset('assets/img/img_columna1.png') }}"
                                alt="cabeza de persona con bombilla iluminada">
                        </div>
                        <div class="cuadrado__titulo-columna">
                            Diseño sencillo
                        </div>
                        <div class="cuadrado__texto-columna">
                            Nuestra interfaz de usuario es sencilla e intuitiva, lo que ayuda a que todo el mundo sepa
                            como
                            utilizarla en todo momento.
                        </div>
                    </div>
                    <div class="cuadrado__columna-2 flex--column">
                        <div class="cuadrado__img-columna">
                            <img src="{{ asset('assets/img/img_columna2.png') }}"
                                alt="botones que se pueden mover hacia izquierda y derecha">
                        </div>
                        <div class="cuadrado__titulo-columna">
                            Fácil personalización
                        </div>
                        <div class="cuadrado__texto-columna">
                            La aplicación es totalmente personalizable para adaptarse a tus necesidades. Elige el tipo
                            de
                            recordatorio o la forma de las notificaciones.
                        </div>
                    </div>
                    <div class="cuadrado__columna-3 flex--column">
                        <div class="cuadrado__img-columna">
                            <img src="{{ asset('assets/img/img_columna3.png') }}"
                                alt="simbolo de un escudo con un check">
                        </div>
                        <div class="cuadrado__titulo-columna">
                            Segura
                        </div>
                        <div class="cuadrado__texto-columna">
                            No tengas miedo al registrarte. Nuestra aplicación utiliza la última tecnología de cifrado
                            para
                            proteger tus datos.
                        </div>
                    </div>
                    <!-- He añadido javascript para darle funcionalidad a estas flechas, asi cuando mires la versión movil, 
                    podrás pasar de una característica a otra. -->
                    <div class="cuadrado__flechas">
                        <img class="flecha--prev" src="{{ asset('assets/img/flecha-correcta.png') }}"
                            alt="flecha apuntando derecha">
                        <img class="flecha--next" src="{{ asset('assets/img/flecha-incorrecta.png') }}"
                            alt="flecha apuntando izquierda">
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- COMO FUNCIONA -->
    <section id="funciona" class="pasos flex--column">
        <div class="pasos__contenedor">
            <h2 class="heading--tertiary">CÓMO<span class="heading--quaternary"> FUNCIONA</span></h2>
            <!-- PUNTO 1 -->
            <div class="pasos__punto flex--row">
                <img src="{{ asset('assets/img/img_punto1.png') }}" alt="chico con lista y lapiz">
                <div class="pasos__punto-info flex--column">
                    <h3 class="heading--quinary">Regístrate</h3>
                    <p class="pasos__punto-texto">Estamos seguros de que más de una vez se te ha olvidado tomarte la
                        medicación
                        a la hora que te tocaba, o incluso has llegado a dudar si te habías tomado la pastilla o no.
                        Para que esto no te vuelva a pasar, lo primero que tienes que hacer es registrarte en
                        nuestra
                        aplicación.</p>
                </div>
            </div>
            <!-- PUNTO 2 -->
            <div class="pasos__punto flex--row">
                <div class="pasos__punto-info flex--column">
                    <h3 class="heading--quinary">Elige tus medicamentos</h3>
                    <p class="pasos__punto-texto">Una vez te has registrado, es el momento de elegir cuales son los
                        medicamentos que necesitan un seguimiento. Podrás ir añadiendo gracias a un desplegable los
                        medicamentos a tu panel de seguimiento. </p>
                </div>
                <img src="{{ asset('assets/img/img_punto2.png') }}" alt="móvil con una biblioteca de medicamentos">
            </div>
            <!-- PUNTO 3 -->
            <div class="pasos__punto flex--row">
                <img src="{{ asset('assets/img/img_punto3.png') }}" alt="médico con un diario de toma de medicamentos">
                <div class="pasos__punto-info flex--column">
                    <h3 class="heading--quinary">Revisa que todo esté correcto</h3>
                    <p class="pasos__punto-texto">Ya tienes guardados todos los medicamentos. Es momento de ver tu
                        diario.
                        Comprueba que todos los medicamentos han sido añadidos y que las horas de las tomas son
                        correctas (puedes modificarlas si lo deseas). Activa las notificaciones y estarás listo para
                        no
                        perderte ninguna toma.</p>
                </div>
            </div>
            <!-- PUNTO 4 -->
            <div class="pasos__punto flex--row">
                <div class="pasos__punto-info flex--column">
                    <h3 class="heading--quinary">Confirma que has tomado tus pastillas</h3>
                    <p class="pasos__punto-texto">¡Acabas de recibir una notificación! Entras en la aplicación y marcas
                        con
                        un
                        check la medicación que te toca tomar en este momento. Ya puedes tener la conciencia
                        tranquila
                        sabiendo con certeza que te la has tomado.</p>
                </div>
                <img src="{{ asset('assets/img/img_punto4.png') }}"
                    alt="médico con una pastilla y una lista con check verde">
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    @include('layout._partials.footer')

    <script src="{{ asset('assets/scripts/script.js') }}"></script>
</body>

</html>