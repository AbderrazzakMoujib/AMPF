@extends('layout')
@section('title', 'Nos Valeurs — AMPF')

@section('content')

<div class="page-hero page-hero--img">
    <div class="page-hero-bg"
         style="background-image:url('{{ asset('assets/img/hero/hero_nos_valeurs.png') }}');">
    </div>

    <div class="page-hero-grid"></div>

    <div class="page-hero-content">
        <div class="page-hero-label">Notre Vision</div>
        <h1 class="page-hero-title">Nos Valeurs</h1>
        <p class="page-hero-desc">
            Les principes qui guident l'AMPF dans sa mission de fédérer et développer le secteur du froid au Maroc.
        </p>

        <div class="page-breadcrumb">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current">Nos Valeurs</span>
        </div>
    </div>
</div>

<section class="section values-section" style="background: var(--navy);">
    <div class="container">
        <div class="text-center reveal values-head">
            <span class="section-label section-label-light">AMPF</span>
            <h2 class="section-title section-title-white">Nos Valeurs</h2>
            <p class="section-desc section-desc-light values-desc">
                Les fondements sur lesquels repose notre engagement envers les professionnels du froid.
            </p>
        </div>

        <div class="service-grid">
            <div class="service-item dark reveal">
                <div class="service-item-num">01</div>
                <div class="service-item-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                <h3 class="service-item-title">Formation continue</h3>
                <p class="service-item-desc">
                    Organiser des événements éducatifs tels que colloques et séminaires pour promouvoir le développement professionnel de ses membres.
                </p>
            </div>

            <div class="service-item dark reveal">
                <div class="service-item-num">02</div>
                <div class="service-item-icon"><i class="fa-solid fa-plane-departure"></i></div>
                <h3 class="service-item-title">Voyages professionnels</h3>
                <p class="service-item-desc">
                    Coordonner des voyages et excursions à caractère professionnel, technique ou récréatif pour enrichir les compétences et favoriser les échanges entre membres.
                </p>
            </div>

            <div class="service-item dark reveal">
                <div class="service-item-num">03</div>
                <div class="service-item-icon"><i class="fa-solid fa-binoculars"></i></div>
                <h3 class="service-item-title">Visites d'étude</h3>
                <p class="service-item-desc">
                    Visites de secteurs socio-économiques : entrepôts frigorifiques, abattoirs, usines agro-alimentaires pour comprendre les enjeux du secteur.
                </p>
            </div>

            <div class="service-item dark reveal">
                <div class="service-item-num">04</div>
                <div class="service-item-icon"><i class="fa-solid fa-globe"></i></div>
                <h3 class="service-item-title">Salons internationaux</h3>
                <p class="service-item-desc">
                    Être présent et actif lors de salons internationaux pour favoriser les opportunités de collaboration et de développement dans le secteur.
                </p>
            </div>

            <div class="service-item dark reveal">
                <div class="service-item-num">05</div>
                <div class="service-item-icon"><i class="fa-solid fa-bullhorn"></i></div>
                <h3 class="service-item-title">Communication interne</h3>
                <p class="service-item-desc">
                    Publier un bulletin d'information régulier sur les activités de l'association afin de tenir les membres informés des dernières actualités.
                </p>
            </div>

            <div class="service-item dark reveal">
                <div class="service-item-num">06</div>
                <div class="service-item-icon"><i class="fa-solid fa-laptop-code"></i></div>
                <h3 class="service-item-title">Développement digital</h3>
                <p class="service-item-desc">
                    Travailler sur la création d'une présence digitale forte pour renforcer la visibilité en ligne et faciliter l'accès à l'information.
                </p>
            </div>

            {{-- ✅ centered on desktop only --}}
            <div class="service-item dark reveal service-item-center">
                <div class="service-item-num">07</div>
                <div class="service-item-icon"><i class="fa-solid fa-book-open"></i></div>
                <h3 class="service-item-title">Documentation spécialisée</h3>
                <p class="service-item-desc">
                    Rassembler des ressources documentaires et revues spécialisées pour partager les informations et promouvoir le partage de connaissances au sein de l'association.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection