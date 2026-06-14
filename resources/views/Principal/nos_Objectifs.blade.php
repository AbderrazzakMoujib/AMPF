@extends('layout')
@section('title', 'Nos Objectifs — AMPF')

@section('content')

<div class="page-hero page-hero--img">
    <div class="page-hero-bg"
         style="background-image:url('{{ asset('assets/img/hero/hero_nos_valeurs.png') }}');">
    </div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-content">
        <div class="page-hero-label">Notre Vision</div>
        <h1 class="page-hero-title">Nos Objectifs</h1>
        <p class="page-hero-desc">Les missions que l'AMPF s'est fixées pour structurer et développer le secteur du froid au Maroc.</p>
        <div class="page-breadcrumb">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current">Nos Objectifs</span>
        </div>
    </div>
</div>

<section class="section" style="background: var(--navy);">
    <div class="container">
        <div class="text-center reveal" style="margin-bottom: 56px;">
            <span class="section-label section-label-light">AMPF</span>
            <h2 class="section-title section-title-white">Nos Objectifs</h2>
            <p class="section-desc section-desc-light" style="margin: 0 auto;">Notre feuille de route pour un secteur du froid structuré, innovant et compétitif.</p>
        </div>

        <div class="service-grid">
            <div class="service-item dark reveal">
                <div class="service-item-num">01</div>
                <div class="service-item-icon"><i class="fa-solid fa-sitemap"></i></div>
                <h3 class="service-item-title">Structurer l'activité</h3>
                <p class="service-item-desc">Mettre en place un cadre organisé pour le secteur du froid, favorisant un fonctionnement ordonné et efficace pour tous les acteurs.</p>
            </div>
            <div class="service-item dark reveal">
                <div class="service-item-num">02</div>
                <div class="service-item-icon"><i class="fa-solid fa-scale-balanced"></i></div>
                <h3 class="service-item-title">Établir des règles collectives</h3>
                <p class="service-item-desc">Définir des normes communes à respecter par tous les acteurs afin de renforcer la crédibilité des opérateurs en activité.</p>
            </div>
            <div class="service-item dark reveal">
                <div class="service-item-num">03</div>
                <div class="service-item-icon"><i class="fa-solid fa-landmark"></i></div>
                <h3 class="service-item-title">Informer les pouvoirs publics</h3>
                <p class="service-item-desc">Transmettre des études économiques, techniques, financières et douanières aux autorités pour défendre efficacement les membres.</p>
            </div>
            <div class="service-item dark reveal">
                <div class="service-item-num">04</div>
                <div class="service-item-icon"><i class="fa-solid fa-chart-line"></i></div>
                <h3 class="service-item-title">Promouvoir l'industrie</h3>
                <p class="service-item-desc">Contribuer à accroître la visibilité et le développement de l'industrie du froid et de la climatisation dans le contexte marocain.</p>
            </div>
            <div class="service-item dark reveal">
                <div class="service-item-num">05</div>
                <div class="service-item-icon"><i class="fa-solid fa-handshake"></i></div>
                <h3 class="service-item-title">Développer des partenariats</h3>
                <p class="service-item-desc">Établir des collaborations fructueuses avec d'autres associations et organismes partageant des intérêts similaires dans le secteur.</p>
            </div>
            <div class="service-item dark reveal">
                <div class="service-item-num">06</div>
                <div class="service-item-icon"><i class="fa-solid fa-rocket"></i></div>
                <h3 class="service-item-title">Stratégies de développement</h3>
                <p class="service-item-desc">Fournir soutien et conseils aux membres pour leurs démarches de croissance, ainsi que dans la collecte d'informations pertinentes.</p>
            </div>
        </div>
    </div>
</section>

@endsection
