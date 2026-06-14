<nav id="navbar">

    {{-- LOGO --}}
    <a href="{{ route('home') }}" class="nav-logo">
        <img src="{{ asset('assets/img/logo_AMPF-white.png') }}"
             alt="AMPF" class="nav-logo-img nav-logo-white">
        <img src="{{ asset('assets/img/logo_AMPF-black.png') }}"
             alt="AMPF" class="nav-logo-img nav-logo-black">
    </a>

    {{-- BURGER (mobile) --}}
    <button class="nav-burger" id="navBurger" aria-label="Menu" aria-expanded="false">
        <span></span><span></span><span></span>
    </button>

    {{-- LINKS --}}
    <ul class="nav-links" id="navLinks">
        {{-- À propos dropdown --}}
<li class="nav-dropdown">
    <a href="#" class="nav-dropdown-toggle" aria-expanded="false">
        À propos <i class="fa-solid fa-chevron-down"></i>
    </a>
    <ul class="nav-dropdown-menu">
        <li><a href="{{ route('about') }}">L'Association</a></li>
        <li><a href="{{ route('mot_president') }}">Mot du Président</a></li>
        
    </ul>
</li>

        {{-- Notre Vision --}}
        <li class="nav-dropdown">
            <a href="#" class="nav-dropdown-toggle" aria-expanded="false">
                Notre Vision <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul class="nav-dropdown-menu">
                <li><a href="{{ route('nos_Valeurs') }}"> Valeurs</a></li>
                <li><a href="{{ route('nos_Objectifs') }}"> Objectifs</a></li>
                <li><a href="{{ route('nos_strategie') }}"> Stratégies</a></li>
            </ul>
        </li>

        {{-- Nos Commissions --}}
        <li>
            <a href="{{ route('commissions') }}"
               class="{{ request()->routeIs('commissions') ? 'active' : '' }}">
                 Commissions 
            </a>
        </li>
        
        <li>
            <a href="{{ route('partenaires') }}"
            class="{{ request()->routeIs('Partenaires') ? 'active' : '' }}">
            Partenaires
        </a>
        </li>

        {{-- Nos Formules --}}
        <li>
            <a href="{{ route('nos_formule') }}"
               class="{{ request()->routeIs('nos_formule') ? 'active' : '' }}">
                Formules
            </a>
        </li>

        <li>
            <a href="{{ route('media') }}"
               class="{{ request()->routeIs('media') ? 'active' : '' }}">
               Média
            </a>
        </li>

        <li>
            <a href="{{ route('contact') }}"
               class="{{ request()->routeIs('contact') ? 'active' : '' }}">
               Contact
            </a>
        </li>

        <li>
            <div class="nav-lang">
                <a href="{{ langSwitchUrl('fr') }}"
                   class="lang-btn {{ app()->getLocale() === 'fr' ? 'active' : '' }}"
                   hreflang="fr">FR</a>
                <a href="{{ langSwitchUrl('en') }}"
                   class="lang-btn {{ app()->getLocale() === 'en' ? 'active' : '' }}"
                   hreflang="en">EN</a>
            </div>
        </li>

        <li>
            <a href="{{ localeRoute('offre') }}" class="nav-cta">
                {{ app()->getLocale() === 'en' ? 'Join AMPF' : 'Devenir Membre' }}
            </a>
        </li>
    </ul>
</nav>

{{-- ✅ Script SANS defer, juste avant </body> dans layout.blade.php --}}
{{-- <script src="{{ asset('assets/js/navbar.js') }}"></script> --}}