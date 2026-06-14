@extends('layout')
@section('title', 'Nos Stratégies — AMPF')

@section('content')

<div class="page-hero page-hero--img">
    <div class="page-hero-bg"
         style="background-image:url('{{ asset('assets/img/hero/hero_nos_valeurs.png') }}');">
    </div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-content">
        <div class="page-hero-label">Notre Vision</div>
        <h1 class="page-hero-title">Nos Stratégies</h1>
        <p class="page-hero-desc">Notre approche pour renforcer le secteur et créer un écosystème professionnel durable au Maroc.</p>
        <div class="page-breadcrumb">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current">Nos Stratégies</span>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="reveal" style="margin-bottom: 56px;">
            <span class="section-label">AMPF</span>
            <h2 class="section-title">Nos Stratégies</h2>
            <p class="section-desc">Les axes stratégiques qui guident notre action pour développer le secteur du froid.</p>
        </div>

        <div class="strategies-list">
            <div class="strategy-item reveal">
                <div class="strategy-num">01</div>
                <div class="strategy-content">
                    <div class="strategy-icon"><i class="fa-solid fa-network-wired"></i></div>
                    <div>
                        <h3 class="strategy-title">Amélioration continue des réseaux de communication sectorielle</h3>
                        <p class="strategy-desc">Nous nous engageons à renforcer constamment nos canaux de communication au sein du secteur pour faciliter les échanges d'informations et favoriser la collaboration entre tous les acteurs.</p>
                    </div>
                </div>
            </div>

            <div class="strategy-item reveal">
                <div class="strategy-num">02</div>
                <div class="strategy-content">
                    <div class="strategy-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <div>
                        <h3 class="strategy-title">Accroissement des initiatives de formation</h3>
                        <p class="strategy-desc">Nous intensifions nos efforts en matière de formation en organisant davantage de séminaires et de rencontres pour le développement professionnel de nos membres et l'élévation des compétences du secteur.</p>
                    </div>
                </div>
            </div>

            <div class="strategy-item reveal">
                <div class="strategy-num">03</div>
                <div class="strategy-content">
                    <div class="strategy-icon"><i class="fa-solid fa-comments"></i></div>
                    <div>
                        <h3 class="strategy-title">Lancement de discussions et débats sectoriels</h3>
                        <p class="strategy-desc">Nous encourageons les discussions et les débats visant à mieux structurer le secteur, favorisant ainsi une compréhension commune des enjeux et des opportunités pour l'ensemble des professionnels.</p>
                    </div>
                </div>
            </div>

            <div class="strategy-item reveal">
                <div class="strategy-num">04</div>
                <div class="strategy-content">
                    <div class="strategy-icon"><i class="fa-solid fa-calendar-check"></i></div>
                    <div>
                        <h3 class="strategy-title">Calendrier d'événements et salon professionnel international</h3>
                        <p class="strategy-desc">Nous mettrons en place un calendrier d'événements significatifs pour doter le secteur d'un salon professionnel international, créant ainsi une plateforme propice aux échanges et à la promotion des avancées dans notre domaine.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="strategy-cta reveal">
            <div class="strategy-cta-inner">
                <div class="strategy-cta-top"></div>
                <h3>Rejoignez notre démarche</h3>
                <p>Participez activement au développement du secteur du froid au Maroc en devenant membre de l'AMPF.</p>
                <div style="display:flex; gap:12px; flex-wrap:wrap;">
                    <a href="{{ route('offre') }}" class="btn-primary">Devenir membre <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="{{ route('contact') }}" class="btn-gold">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/strategies.css') }}">
@endsection
