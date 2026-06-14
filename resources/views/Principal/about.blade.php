@extends('layout')
@section('title', __('about.meta_title'))

@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endsection

@section('content')

{{-- PAGE HERO --}}
<div class="page-hero">
    <div class="page-hero-grid"></div>
    <div class="page-hero-content">
        <div class="page-hero-label">{{ __('about.hero_label') }}</div>
        <h1 class="page-hero-title">{{ __('about.hero_title') }}</h1>
        <p class="page-hero-desc">{{ __('about.hero_desc') }}</p>
        <div class="page-breadcrumb">
            <a href="{{ localeRoute('home') }}"><i class="fa-solid fa-house"></i> {{ __('about.breadcrumb_home') }}</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current">{{ __('about.breadcrumb_current') }}</span>
        </div>
    </div>
</div>

{{-- MAIN CONTENT --}}
<section class="section about-page">
    <div class="container">
        <div class="about-page-grid">

            {{-- Left: Text --}}
            <div class="about-page-text reveal">
                <span class="section-label">{{ __('about.who_label') }}</span>
                <h2 class="section-title">{{ __('about.section_title') }}</h2>
                <div class="about-page-body">
                    <p>{{ __('about.p1') }}</p>
                    <p>{{ __('about.p2') }}</p>
                    <p>{{ __('about.p3') }}</p>
                    <p>{{ __('about.p4') }}</p>
                </div>

                <div class="about-page-stats">
                    <div class="about-stat">
                        <span class="about-stat-num">1994</span>
                        <span class="about-stat-label">{{ __('about.stat_year') }}</span>
                    </div>
                    <div class="about-stat">
                        <span class="about-stat-num">30+</span>
                        <span class="about-stat-label">{{ __('about.stat_exp') }}</span>
                    </div>
                    <div class="about-stat">
                        <span class="about-stat-num">560+</span>
                        <span class="about-stat-label">{{ __('about.stat_members') }}</span>
                    </div>
                </div>
            </div>

            {{-- Right: Sidebar --}}
            <div class="about-page-sidebar reveal">
                <div class="about-sidebar-card">
                    <div class="about-sidebar-card-top"></div>
                    <div class="about-sidebar-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 class="about-sidebar-title">{{ __('about.sidebar_title') }}</h3>
                    <p class="about-sidebar-text">{{ __('about.sidebar_text') }}</p>
                </div>

                <div class="about-partners-card">
                    <h4 class="about-partners-title">{{ __('about.partners_title') }}</h4>
                    <ul class="about-partners-list">
                        <li><i class="fa-solid fa-check-circle"></i> {{ app()->getLocale() === 'en' ? 'Ministry of Industry' : 'Ministère de l\'Industrie' }}</li>
                        <li><i class="fa-solid fa-check-circle"></i> OFPPT</li>
                        <li><i class="fa-solid fa-check-circle"></i> ONUDI / UNIDO</li>
                        <li><i class="fa-solid fa-check-circle"></i> AFD — {{ app()->getLocale() === 'en' ? 'French Development Agency' : 'Agence Française de Développement' }}</li>
                        <li><i class="fa-solid fa-check-circle"></i> IFFI — {{ app()->getLocale() === 'en' ? 'French Institute of Refrigeration' : 'Institut Français du Froid' }}</li>
                    </ul>
                    <a href="{{ localeRoute('contact') }}" class="btn-primary" style="margin-top:24px; width:100%; justify-content:center;">
                        {{ __('about.contact_us') }} <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- BUREAU AMPF PHOTO --}}
<section class="bureau-section">
    <div class="container">
        <div class="bureau-header reveal">
            <span class="section-label">{{ app()->getLocale() === 'en' ? 'The Team' : 'Le Bureau' }}</span>
            <h2 class="section-title">{{ app()->getLocale() === 'en' ? 'AMPF Board Members' : 'Bureau de l\'AMPF' }}</h2>
            <p class="section-desc">{{ app()->getLocale() === 'en' ? 'The dedicated professionals leading our association.' : 'Les professionnels dévoués qui dirigent notre association.' }}</p>
        </div>
        <div class="bureau-img-wrap reveal">
            <img src="{{ asset('assets/img/about/bureau-ampf.jpeg') }}"
                 alt="Bureau AMPF — Membres"
                 class="bureau-img">
            <div class="bureau-img-caption">
                <i class="fa-solid fa-users"></i>
                {{ app()->getLocale() === 'en' ? 'AMPF Board — Casablanca' : 'Bureau AMPF — Casablanca' }}
            </div>
        </div>
    </div>
</section>

{{-- FEATURES STRIP --}}
<section class="about-features-strip">
    <div class="container">
        <div class="about-features-grid">
            <div class="about-feature reveal">
                <div class="about-feature-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                <div class="about-feature-title">{{ __('about.feat1_title') }}</div>
                <div class="about-feature-desc">{{ __('about.feat1_desc') }}</div>
            </div>
            <div class="about-feature reveal">
                <div class="about-feature-icon"><i class="fa-solid fa-handshake"></i></div>
                <div class="about-feature-title">{{ __('about.feat2_title') }}</div>
                <div class="about-feature-desc">{{ __('about.feat2_desc') }}</div>
            </div>
            <div class="about-feature reveal">
                <div class="about-feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <div class="about-feature-title">{{ __('about.feat3_title') }}</div>
                <div class="about-feature-desc">{{ __('about.feat3_desc') }}</div>
            </div>
            <div class="about-feature reveal">
                <div class="about-feature-icon"><i class="fa-solid fa-microchip"></i></div>
                <div class="about-feature-title">{{ __('about.feat4_title') }}</div>
                <div class="about-feature-desc">{{ __('about.feat4_desc') }}</div>
            </div>
        </div>
    </div>
</section>

@endsection
