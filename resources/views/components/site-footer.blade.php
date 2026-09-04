<footer class="site-footer">

    <div class="site-footer__container">

        <div class="site-footer__brand">

            <div class="site-footer__logo">
                <img
                    src="{{ asset('images/brand/chameleon-temp.png') }}"
                    alt=""
                >

                <div>
                    <strong>Split Distribution</strong>
                    <span>Solutions CVC & Énergies</span>
                </div>
            </div>

            <p>
                Solutions techniques pour les professionnels
                de la climatisation, du chauffage,
                de la ventilation et des énergies.
            </p>

        </div>


        <div class="site-footer__column">
            <span class="site-footer__title">
                Solutions
            </span>

            <a href="{{ route('solutions.climatisation') }}">
                Climatisation
            </a>

            <a href="{{ route('solutions.pompes-a-chaleur') }}">
                Pompes à chaleur
            </a>

            <a href="{{ route('solutions.ventilation') }}">
                Ventilation
            </a>

            <a href="{{ route('solutions.tertiaire') }}">
                Tertiaire
            </a>
        </div>


        <div class="site-footer__column">
            <span class="site-footer__title">
                Split Distribution
            </span>

            <a href="{{ route('services') }}">
                Services
            </a>

            <a href="{{ route('entreprise') }}">
                L'entreprise
            </a>

            <a href="{{ route('contact') }}">
                Contact
            </a>
        </div>


        <div class="site-footer__column">
            <span class="site-footer__title">
                Nous trouver
            </span>

            <p>
                50 rue Jean Zay<br>
                69800 Saint-Priest
            </p>

            <a href="tel:+33472230140">
                04 72 23 01 40
            </a>
        </div>

    </div>


    <div class="site-footer__bottom">

        <span>
            © {{ date('Y') }} Split Distribution
        </span>

        <div>
            <span>
                Mentions légales
            </span>

            <span>
                Confidentialité
            </span>
        </div>

    </div>

</footer>
