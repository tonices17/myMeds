<footer id="contacto" class="footer flex--column">
    <div class="footer__mail flex--column">
        <img src="{{ asset('assets/img/img_mail.png') }}" alt="simbolo del correo">
        <p>contacto@mymeds.com</p>
    </div>
    <div class="footer__opciones flex--row">
        <div class="footer__columna-1 flex--column">
            <p class="footer__opcion">Inicio</p>
            <p class="footer__opcion">Contacta con nosotros</p>
        </div>
        <div class="footer__columna-2 flex--column">
            <p class="footer__opcion">Como funciona</p>
            <p class="footer__opcion">Política de privacidad</p>
        </div>
        <div class="footer__columna-3 flex--column">
            <p class="footer__opcion">Términos de uso</p>
            <p class="footer__opcion">Cookies</p>
        </div>
    </div>
    <div class="footer__redes flex--column">
        <h4 class="footer__redes-sociales">Redes Sociales</h4>
        <div class="footer__iconos-redes flex--row">
            <!-- Cada imagen llevará a la red social correspondiente -->
            <li class="footer__icono">
                <a href=""><img src="{{ asset('assets/img/img_facebook.png') }}" alt="simbolo facebook"
                        class="footer__img-redes"></a>
            </li>
            <li class="footer__icono">
                <a href=""><img src="{{ asset('assets/img/img_instagram.png') }}" alt="simbolo instagram"
                        class="footer__img-redes"></a>
            </li>
            <li class="footer__icono">
                <a href=""><img src="{{ asset('assets/img/img_twitter.png') }}" alt="simbolo twitter"
                        class="footer__img-redes"></a>
            </li>
            <li class="footer__icono">
                <a href=""><img src="{{ asset('assets/img/img_linkedin.png') }}" alt="simbolo linkedin"
                        class="footer__img-redes"></a>
            </li>
        </div>
    </div>
    <div class="footer__derechos">
        <p>2023-2024 myMeds - Todos los derechos reservados</p>
    </div>

</footer>