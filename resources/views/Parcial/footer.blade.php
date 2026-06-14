<footer id="ampf-footer">
    <div class="footer-container">

        {{-- ── TOP GRID ── --}}
        <div class="footer-grid">

            {{-- Brand --}}
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="footer-logo">
                    <img src="{{ asset('assets/img/logo_AMPF-white.png') }}" alt="AMPF" class="footer-logo-img">
                </a>
                <p class="footer-desc">
                    L'AMPF fédère les professionnels du froid et de la climatisation au Maroc depuis 1994. Formation, innovation et représentation sectorielle.
                </p>
                <div class="footer-social">
                    <a href="https://www.linkedin.com/company/ampf-maroc" target="_blank" rel="noopener"
                       class="social-btn linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.facebook.com/ampfmaroc" target="_blank" rel="noopener"
                       class="social-btn facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.youtube.com/@ampfmaroc" target="_blank" rel="noopener"
                       class="social-btn youtube" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            {{-- Navigation --}}
            <div class="footer-col">
                <h4 class="footer-col-title">Navigation</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('about') }}">À propos</a></li>
                    <li><a href="{{ route('nos_Valeurs') }}">Nos Valeurs</a></li>
                    <li><a href="{{ route('nos_Objectifs') }}">Nos Objectifs</a></li>
                    <li><a href="{{ route('nos_strategie') }}">Nos Stratégies</a></li>
                    <li><a href="{{ route('media') }}">Média</a></li>
                </ul>
            </div>

            {{-- Adhésion --}}
            <div class="footer-col">
                <h4 class="footer-col-title">Adhésion</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('offre') }}">Devenir membre</a></li>
                    <li><a href="{{ route('nos_formule') }}">Nos formules</a></li>
                    <li><a href="{{ route('offre') }}">Paiement / RIB</a></li>
                    <li><a href="{{ route('offre') }}">Soumettre une demande</a></li>
                    <li><a href="{{ route('contact') }}">Support adhésion</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="footer-col">
                <h4 class="footer-col-title">Contact</h4>
                <div class="footer-contact-list">
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>106, Lot. Albader, 3ème étage,<br>Appt. N°3, Casablanca</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+212642734568">+212 06 42 73 45 68</a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:contact@ampf.ma">contact@ampf.ma</a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-clock"></i>
                        <span>Lun – Ven : 9h00 – 18h00</span>
                    </div>
                </div>

                {{-- Newsletter --}}
                <div class="footer-newsletter">
                    <p class="footer-newsletter-label">Newsletter</p>
                    <form action="{{ route('newsletter') }}" method="POST" class="footer-newsletter-form">
                        @csrf
                        <input type="email" name="email_newsletter"
                               placeholder="votre@email.ma" required>
                        <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

        </div>

        {{-- ── BOTTOM BAR ── --}}
        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <span>© {{ date('Y') }} <a href="{{ route('home') }}">AMPF</a>. Tous droits réservés.</span>
            </div>
            <div class="footer-bottom-right">
                <a href="{{ route('politique') }}">Politique de confidentialité</a>
                  <span class="sep">·</span>
                <a href="{{ route('conditions') }}">Conditions d'utilisation</a>
                <span class="sep">·</span>
                <span>Développé par <a href="https://smartexpos.ma" target="_blank">Smart Events Morocco</a></span>
            </div>
        </div>

    </div>
</footer>

<link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
