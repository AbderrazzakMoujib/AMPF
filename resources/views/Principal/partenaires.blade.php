@extends('layout')

@section('title', 'Partenaires — AMPF')

@section('content')

<section class="partenaires-page section">
    <div class="container">

        <div class="partenaires-header reveal">
            <span class="section-label">Réseau</span>
            <h1 class="section-title">Partenaires</h1>
            <p class="section-desc">L'AMPF collabore avec des institutions nationales et internationales pour promouvoir l'excellence dans le secteur du froid.</p>
            <div class="partenaires-header-divider"></div>
        </div>

        {{-- Partenaires institutionnels --}}
        <div class="partenaires-category reveal">
            <div class="partenaires-cat-header">
                <div class="partenaires-cat-icon"><i class="fa-solid fa-landmark"></i></div>
                <span class="partenaires-cat-title">Partenaires Institutionnels</span>
                <span class="partenaires-cat-count">3 institutions</span>
            </div>
            <div class="partenaires-grid-inst">
                
                <div class="partenaire-card-inst">
                    <div class="partenaire-logo-wrap-inst_12">
                        <img src="{{ asset('assets/img/partenaires/amée.png') }}" alt="AMÉE">
                    </div>
                    <div class="partenaire-name-inst">AMÉE</div>
                    <div class="partenaire-tag">Institutionnel</div>
                </div>

                <div class="partenaire-card-inst">
                    <div class="partenaire-logo-wrap-inst">
                        <img src="{{ asset('assets/img/partenaires/ministere-commerce.png') }}" alt="Ministère du Commerce">
                    </div>
                    <div class="partenaire-name-inst">Ministère du Commerce</div>
                    <div class="partenaire-tag">Institutionnel</div>
                </div>

                <div class="partenaire-card-inst">
                    <div class="partenaire-logo-wrap-inst_12">
                        <img src="{{ asset('assets/img/partenaires/u3arc.png') }}" alt="U-3ARC">
                    </div>
                    <div class="partenaire-name-inst">U-3ARC</div>
                    <div class="partenaire-tag">International</div>
                </div>
            </div>
        </div>

        {{-- Partenaires stratégiques — SLIDER --}}
        <div class="partenaires-category reveal">
            <div class="partenaires-cat-header">
                <div class="partenaires-cat-icon"><i class="fa-solid fa-handshake"></i></div>
                <span class="partenaires-cat-title">Partenaires Stratégiques</span>
                <span class="partenaires-cat-count">7 partenaires</span>
            </div>

            <div class="partenaires-slider-wrap">
                <div class="partenaires-slider-track">
                    {{-- Original --}}
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo1.jpg') }}" alt="Partenaire 1"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo2.jpg') }}" alt="Partenaire 2"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo3.jpg') }}" alt="Partenaire 3"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo4.jpg') }}" alt="Partenaire 4"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo5.jpg') }}" alt="Partenaire 5"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo6.jpg') }}" alt="Partenaire 6"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/LOGO-SMART-EXPO.png') }}" alt="Smart Events"></div><div class="partenaire-name-strat">Smart Events Morocco</div></div></div>
                    {{-- Clone pour loop infini --}}
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo1.jpg') }}" alt="Partenaire 1"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo2.jpg') }}" alt="Partenaire 2"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo3.jpg') }}" alt="Partenaire 3"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo4.jpg') }}" alt="Partenaire 4"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo5.jpg') }}" alt="Partenaire 5"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/logo6.jpg') }}" alt="Partenaire 6"></div></div></div>
                    <div class="partenaire-slide"><div class="partenaire-card-strat"><div class="partenaire-logo-wrap-strat"><img src="{{ asset('assets/img/clients1/LOGO-SMART-EXPO.png') }}" alt="Smart Events"></div><div class="partenaire-name-strat">Smart Events Morocco</div></div></div>
                </div>
            </div>
        </div>

        {{-- CTA --}}
        <div class="partenaires-cta reveal">
            <h3>Vous souhaitez devenir partenaire ?</h3>
            <p>Contactez-nous pour explorer les opportunités de collaboration avec l'AMPF.</p>
            <a href="{{ route('contact') }}" class="btn-primary">
                <i class="fa-solid fa-envelope"></i> Nous contacter
            </a>
        </div>

    </div>
</section>

<link rel="stylesheet" href="{{ asset('assets/css/partenaires.css') }}">
@endsection