@extends('layout')
@section('title', 'Nos Formules — AMPF')

@section('content')

<div class="page-hero page-hero--img">
    <div class="page-hero-bg"
         style="background-image:url('{{ asset('assets/img/hero/hero_nos_formule.png') }}');">
    </div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-content">
        <div class="page-hero-label">Adhésion</div>
        <h1 class="page-hero-title">Nos Formules</h1>
        <p class="page-hero-desc">Choisissez la formule adaptée à votre entreprise et rejoignez le réseau des professionnels du froid au Maroc.</p>
        <div class="page-breadcrumb">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current">Nos Formules</span>
        </div>
    </div>
</div>

<section class="section formule-section">
    <div class="container">
        <div class="text-center reveal" style="margin-bottom: 60px;">
            <span class="section-label">Pricing Plan</span>
            <h2 class="section-title">Devenir membre de l'AMPF</h2>
            <p class="section-desc" style="margin: 0 auto;">Cotisation annuelle basée sur le chiffre d'affaires de votre entreprise.</p>
        </div>

        <div class="formule-grid">
            @php
            $formules = [
                ['price' => '600',    'ca' => 'Moins de 1M DH',          'active' => false],
                ['price' => '1.000',  'ca' => "Jusqu'à 5M DH",           'active' => true],
                ['price' => '1.500',  'ca' => 'Entre 5M et 20M DH',      'active' => false],
                ['price' => '3.000',  'ca' => 'Entre 20M et 50M DH',     'active' => false],
                ['price' => '6.000',  'ca' => 'Entre 50M et 100M DH',    'active' => false],
                ['price' => '12.000', 'ca' => 'Entre 100M et 200M DH',   'active' => false],
                ['price' => '40.000', 'ca' => 'Plus de 200M DH',         'active' => false],
            ];
            @endphp

            @foreach($formules as $f)
            <div class="formule-card {{ $f['active'] ? 'active' : '' }} reveal">
                @if($f['active'])
                <div class="formule-badge">Populaire</div>
                @endif
                <div class="formule-card-top {{ $f['active'] ? 'active-top' : '' }}"></div>
                <div class="formule-icon">
                    <i class="fa-solid fa-snowflake"></i>
                </div>
                <div class="formule-price">
                    {{ $f['price'] }} <span>DH</span>
                </div>
                <div class="formule-period">/ an</div>
                <div class="formule-ca">
                    <i class="fa-solid fa-building"></i>
                    CA : {{ $f['ca'] }}
                </div>
                <ul class="formule-features">
                    <li><i class="fa-solid fa-check"></i> Carte membre professionnelle</li>
                    <li><i class="fa-solid fa-check"></i> Accès aux formations</li>
                    <li><i class="fa-solid fa-check"></i> Réseau AMPF</li>
                    <li><i class="fa-solid fa-check"></i> Actualités du secteur</li>
                    <li><i class="fa-solid fa-check"></i> Accès aux salons</li>
                </ul>
                <a href="{{ route('offre') }}" class="formule-btn {{ $f['active'] ? 'formule-btn-active' : '' }}">
                    Adhérer <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            @endforeach
        </div>

        {{-- Benefits --}}
        <div class="formule-benefits reveal">
            <h3 class="formule-benefits-title">Inclus dans toutes les formules</h3>
            <div class="formule-benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fa-solid fa-id-card"></i></div>
                    <div class="benefit-title">Carte membre</div>
                    <div class="benefit-desc">Carte professionnelle nominative reconnue dans le secteur.</div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <div class="benefit-title">Formations</div>
                    <div class="benefit-desc">Accès aux programmes de formation certifiés de l'AMPF.</div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fa-solid fa-users"></i></div>
                    <div class="benefit-title">Réseau professionnel</div>
                    <div class="benefit-desc">Mise en relation avec les 560+ membres du réseau AMPF.</div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fa-solid fa-calendar-star"></i></div>
                    <div class="benefit-title">Événements</div>
                    <div class="benefit-desc">Invitations aux salons, séminaires et rencontres professionnelles.</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/formule.css') }}">
@endsection
