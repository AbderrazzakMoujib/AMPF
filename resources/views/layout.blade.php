<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- ══ TITLE ══════════════════════════════════════════ --}}
    <title>@yield('title', 'AMPF — Association Marocaine des Professionnels du Froid')</title>

    {{-- ══ META SEO ═════════════════════════════════════════ --}}
    <meta name="description"  content="@yield('meta_desc', app()->getLocale() === 'en'
        ? 'AMPF — Moroccan Association of Refrigeration Professionals, founded in 1994. Uniting refrigeration, air conditioning and cold engineering professionals in Morocco.'
        : 'AMPF — Association Marocaine des Professionnels du Froid, fondée en 1994. Fédère les professionnels de la réfrigération, climatisation et génie frigorifique au Maroc.')">
    <meta name="keywords"     content="@yield('meta_keywords', 'AMPF, Association Marocaine Professionnels Froid, réfrigération Maroc, climatisation Maroc, génie frigorifique, froid industriel, technicien froid Maroc, REFRIGAIR EXPO, formation froid Maroc, normes froid Maroc, HFC Maroc')">
    <meta name="author"       content="AMPF — Association Marocaine des Professionnels du Froid">
    <meta name="robots"       content="INDEX, FOLLOW, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="language"     content="{{ app()->getLocale() === 'en' ? 'English' : 'French' }}">
    <meta name="revisit-after" content="7 days">
    <meta name="geo.region"   content="MA">
    <meta name="geo.placename" content="Maroc">

    {{-- ══ CANONICAL ════════════════════════════════════════ --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- ══ HREFLANG (bilingual SEO) ════════════════════════ --}}
    <link rel="alternate" hreflang="fr" href="{{ langSwitchUrl('fr') }}">
    <link rel="alternate" hreflang="en" href="{{ langSwitchUrl('en') }}">
    <link rel="alternate" hreflang="x-default" href="{{ langSwitchUrl('fr') }}">

    {{-- ══ FAVICON ══════════════════════════════════════════ --}}
    <link rel="icon"             href="{{ asset('assets/img/favicons/favicon_ampf.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicons/favicons.png') }}">
    <link rel="shortcut icon"    href="{{ asset('assets/img/favicons/favicon_ampf.png') }}">

    <!-- Google Search Console -->
    <meta name="google-site-verification" content="google7234840438f133ac">

    {{-- ══ OPEN GRAPH ════════════════════════════════════════ --}}
    <meta property="og:type"        content="@yield('og_type', 'website')">
    <meta property="og:site_name"   content="AMPF — Association Marocaine des Professionnels du Froid">
    <meta property="og:locale"      content="{{ app()->getLocale() === 'en' ? 'en_US' : 'fr_MA' }}">
    <meta property="og:locale:alternate" content="{{ app()->getLocale() === 'en' ? 'fr_MA' : 'en_US' }}">
    <meta property="og:title"       content="@yield('title', 'AMPF — Association Marocaine des Professionnels du Froid')">
    <meta property="og:description" content="@yield('meta_desc', 'AMPF — Association Marocaine des Professionnels du Froid, fondée en 1994.')">
    <meta property="og:image"       content="@yield('og_image', asset('assets/img/favicons/favicons.png'))">
    <meta property="og:image:width"  content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt"   content="AMPF — Association Marocaine des Professionnels du Froid">
    <meta property="og:url"         content="{{ url()->current() }}">

    {{-- ══ TWITTER CARD ════════════════════════════════════ --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:site"        content="@AMPF_Maroc">
    <meta name="twitter:title"       content="@yield('title', 'AMPF — Association Marocaine des Professionnels du Froid')">
    <meta name="twitter:description" content="@yield('meta_desc', 'AMPF — Association Marocaine des Professionnels du Froid, fondée en 1994.')">
    <meta name="twitter:image"       content="@yield('og_image', asset('assets/img/favicons/favicons.png'))">

    {{-- ══ SCHEMA.ORG JSON-LD ══════════════════════════════ --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "AMPF — Association Marocaine des Professionnels du Froid",
        "alternateName": "AMPF",
        "url": "https://ampf.ma",
        "logo": "{{ asset('assets/img/logo_AMPF-white.png') }}",
        "description": "{{ app()->getLocale() === 'en'
            ? 'AMPF, founded in 1994, unites refrigeration, air conditioning and cold engineering professionals in Morocco.'
            : 'L\'AMPF, fondée en 1994, fédère les professionnels de la réfrigération, climatisation et génie frigorifique au Maroc.' }}",
        "foundingDate": "1994",
        "areaServed": {
            "@type": "Country",
            "name": "Morocco"
        },
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "MA",
            "addressLocality": "Casablanca"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer support",
            "email": "contact@ampf.ma",
            "availableLanguage": ["French", "Arabic", "English"]
        },
        "sameAs": [
            "https://www.linkedin.com/company/ampf-maroc",
            "https://www.facebook.com/ampf.maroc"
        ]
    }
    </script>

    {{-- ══ FONTS ════════════════════════════════════════════ --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">

    {{-- ══ FONT AWESOME ════════════════════════════════════ --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- ══ AMPF CSS ═════════════════════════════════════════ --}}
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">

    @yield('head')
</head>

<body>

    <!-- Preloader -->
    <div class="ampf-preloader" id="preloader">
        <div class="preloader-3D">
            <img src="{{ asset('assets/img/logo_AMPF_3D.png') }}"
                 alt="AMPF Association Marocaine des Professionnels du Froid"
                 class="nav-logo-img nav-logo-white">
            <div class="preloader-bar"><div class="preloader-bar-fill"></div></div>
        </div>
    </div>

    <!-- Navbar -->
    @include('Parcial.navbar')

    <!-- Page Content -->
    <main id="main-content" role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('Parcial.footer')

    <!-- Scroll to top -->
    <button class="scroll-top-btn" id="scrollTopBtn" aria-label="{{ app()->getLocale() === 'en' ? 'Back to top' : 'Retour en haut de la page' }}">
        <i class="fa-solid fa-chevron-up" aria-hidden="true"></i>
    </button>

    <!-- Global JS -->
    <script src="{{ asset('assets/js/navbar.js') }}" defer></script>
    <script src="{{ asset('assets/js/global.js') }}" defer></script>

    @yield('scripts')

    {{-- ══ EVENT MODAL ══════════════════════════════════════ --}}
    <div class="event-modal-overlay" id="eventModalOverlay" onclick="closeEventModal()" role="dialog" aria-modal="true" aria-label="{{ app()->getLocale() === 'en' ? 'Event details' : 'Détails de l\'événement' }}">
        <div class="event-modal" id="eventModal" onclick="event.stopPropagation()">
            <button class="event-modal-close" onclick="closeEventModal()" aria-label="{{ app()->getLocale() === 'en' ? 'Close' : 'Fermer' }}">
                <i class="fa-solid fa-xmark" aria-hidden="true"></i>
            </button>
            <div class="event-modal-img"    id="modalImg"></div>
            <div class="event-modal-body">
                <div class="event-modal-meta"   id="modalMeta"></div>
                <h2 class="event-modal-title"   id="modalTitle"></h2>
                <div class="event-modal-badges" id="modalBadges"></div>
                <div class="event-modal-desc"   id="modalDesc"></div>
                <div class="event-modal-info"   id="modalInfo"></div>
            </div>
        </div>
    </div>

</body>
</html>
