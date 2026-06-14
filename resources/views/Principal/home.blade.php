@extends('layout')

@section('title', app()->getLocale() === 'en'
    ? 'AMPF — Moroccan Association of Refrigeration Professionals'
    : 'AMPF — Association Marocaine des Professionnels du Froid')

@section('content')

{{-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ --}}
<section class="hero" id="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-particles" id="heroParticles"></div>

    <div class="hero-content">
        {{-- Left --}}
        <div class="hero-left">
            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                {{ __('home.hero_badge') }}
            </div>
            <h1 class="hero-title">
                {{ __('home.hero_title_1') }}<br>
                <span class="hero-title-gradient">{{ __('home.hero_title_2') }}<br>{{ __('home.hero_title_3') }}</span>
            </h1>
            <p class="hero-desc">{{ __('home.hero_desc') }}</p>
            <div class="hero-actions">
                <a href="#adhesion" class="btn-primary">
                    <i class="fa-solid fa-user-plus"></i>
                    {{ __('home.hero_btn_join') }}
                </a>
                <a href="#events" class="btn-secondary">
                    <i class="fa-solid fa-calendar"></i>
                    {{ __('home.hero_btn_events') }}
                </a>
            </div>
        </div>

        {{-- Right — Image membres + card --}}
        <div class="hero-right">
            <div class="hero-img-wrap">
                <img src="{{ asset('assets/img/hero/ampf.webp') }}"
                     alt="Membres AMPF" class="hero-img">
                <div class="hero-img-overlay"></div>
                <div class="hero-img-badge">
                    <div class="hero-img-badge-dot"></div>
                    Bureau AMPF — Casablanca
                </div>
            </div>

            {{-- CARD ÉVÉNEMENT --}}
            <div class="hero-card">
                <div class="hero-card-top-line"></div>
                <div class="hero-card-tag">🗓 {{ __('home.next_event') }}</div>
                <div class="hero-card-title">RefrigAir Expo 2027<br>Casablanca</div>
                <div class="hero-card-meta">
                    <span><i class="fa-solid fa-location-dot"></i> Casablanca, Maroc</span>
                    <span><i class="fa-solid fa-calendar"></i> 16, 17 & 18 {{ app()->getLocale() === 'en' ? 'February' : 'Février' }} 2027</span>
                </div>
                <div class="hero-countdown" id="heroCountdown">
                    <div class="cd-unit"><span class="cd-num" id="cd-days">--</span><span class="cd-label">{{ __('home.days') }}</span></div>
                    <div class="cd-unit"><span class="cd-num" id="cd-hours">--</span><span class="cd-label">{{ __('home.hours') }}</span></div>
                    <div class="cd-unit"><span class="cd-num" id="cd-min">--</span><span class="cd-label">{{ __('home.min') }}</span></div>
                    <div class="cd-unit"><span class="cd-num" id="cd-sec">--</span><span class="cd-label">{{ __('home.sec') }}</span></div>
                </div>
                <div class="hero-card-progress"><div class="hero-card-progress-bar"></div></div>
            </div>

            {{-- MINI STATS --}}
            <div class="hero-mini-stats">
                <div class="hero-mini-stat"><span class="mini-num">146+</span><span class="mini-label">{{ __('home.stat_events') }}</span></div>
                <div class="hero-mini-stat"><span class="mini-num">50+</span><span class="mini-label">{{ __('home.stat_orgs') }}</span></div>
                <div class="hero-mini-stat"><span class="mini-num">560+</span><span class="mini-label">{{ app()->getLocale() === 'en' ? 'Members' : 'Membres' }}</span></div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════
     STATS BAR
══════════════════════════════════════════ --}}
<div class="stats-bar">
    <div class="stats-bar-inner">
        <div class="stat-item reveal">
            <span class="stat-num"><span class="counter-num" data-target="146">0</span>+</span>
            <div class="stat-label">{{ __('home.stat_events') }}</div>
        </div>
        <div class="stat-item reveal">
            <span class="stat-num"><span class="counter-num" data-target="50">0</span>+</span>
            <div class="stat-label">{{ __('home.stat_orgs') }}</div>
        </div>
        <div class="stat-item reveal">
            <span class="stat-num"><span class="counter-num" data-target="15">0</span>+</span>
            <div class="stat-label">{{ __('home.stat_partners') }}</div>
        </div>
        <div class="stat-item reveal">
            <span class="stat-num"><span class="counter-num" data-target="560">0</span>+</span>
            <div class="stat-label">{{ __('home.stat_members') }}</div>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════
     ABOUT
══════════════════════════════════════════ --}}
<section class="about-section section" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-visual reveal">
                <div class="about-img-wrap">
                    <img src="{{ asset('assets/img/bg/about.jpg') }}" alt="AMPF" class="about-img">
                    <div class="about-img-overlay"></div>
                </div>
                <div class="about-badge-card">
                    <span class="about-badge-num">30</span>
                    <span class="about-badge-text">{{ app()->getLocale() === 'en' ? 'Years of<br>experience' : 'Années<br>d\'expérience' }}</span>
                </div>
            </div>

            <div class="about-text reveal">
                <span class="section-label">{{ __('home.who_we_are') }}</span>
                <h2 class="section-title">{{ __('home.about_title') }}</h2>
                <p class="section-desc">{{ __('home.about_desc') }}</p>
                <div class="about-features">
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                        <div>
                            <div class="feature-title">{{ __('home.feat_training') }}</div>
                            <div class="feature-desc">{{ __('home.feat_training_d') }}</div>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fa-solid fa-handshake"></i></div>
                        <div>
                            <div class="feature-title">{{ __('home.feat_network') }}</div>
                            <div class="feature-desc">{{ __('home.feat_network_d') }}</div>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <div class="feature-title">{{ __('home.feat_represent') }}</div>
                            <div class="feature-desc">{{ __('home.feat_represent_d') }}</div>
                        </div>
                    </div>
                </div>
                <a href="{{ localeRoute('about') }}" class="btn-primary" style="margin-top:36px; display:inline-flex;">
                    {{ __('home.learn_more') }} <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════
     EVENTS
══════════════════════════════════════════ --}}
<section class="events-section section" id="events">
    <div class="container">
        <div class="events-header reveal">
            <div>
                <span class="section-label">{{ __('home.agenda') }}</span>
                <h2 class="section-title">{{ __('home.our_events') }}</h2>
            </div>
            <div class="events-tabs">
                <button class="tab-btn active" data-filter="all">{{ __('home.filter_all') }}</button>
                <button class="tab-btn" data-filter="upcoming">{{ __('home.filter_upcoming') }}</button>
                <button class="tab-btn" data-filter="past">{{ __('home.filter_past') }}</button>
            </div>
        </div>

        <div class="events-slider reveal">
            <button class="events-nav prev" type="button" aria-label="Previous">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="events-track" id="eventsTrack">
                @forelse($allEvents as $post)
                    <div class="event-card reveal" data-type="{{ $post->type }}">
                        <div class="event-card-img">
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}"
                                     alt="{{ $post->title }}"
                                     class="event-card-bg-img">
                            @else
                                <div class="event-card-no-img">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                            @endif

                            <div class="event-card-img-overlay"></div>

                            @if($post->event_date)
                                <div class="event-date-badge">
                                    <span class="event-date-day">{{ \Carbon\Carbon::parse($post->event_date)->format('d') }}</span>
                                    <span class="event-date-month">{{ \Carbon\Carbon::parse($post->event_date)->translatedFormat('M Y') }}</span>
                                </div>
                            @endif

                            <span class="event-type-badge {{ $post->type === 'evenement_avenir' ? 'badge-upcoming' : 'badge-past' }}">
                                {{ $post->type === 'evenement_avenir' ? __('home.badge_upcoming') : __('home.badge_past') }}
                            </span>
                        </div>

                        <div class="event-card-body">
                            <div class="event-card-category">{{ $post->category ?? __('home.event_default_cat') }}</div>
                            <h3 class="event-card-title">{{ $post->title }}</h3>
                            <p class="event-card-desc">{!! Str::limit(strip_tags($post->body), 110) !!}</p>
                            <div class="event-card-footer">
                                <div class="event-location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{ $post->location ?? __('home.event_location') }}
                                </div>
                                <button class="event-link" onclick="openEventModal({{ $post->id }})">
                                    {{ __('home.event_details') }} <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div style="padding:40px; color:var(--gray); text-align:center;">
                        {{ __('home.no_events') }}
                    </div>
                @endforelse
            </div>

            <button class="events-nav next" type="button" aria-label="Next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════
     SERVICES
══════════════════════════════════════════ --}}
<section class="services-section section" id="services">
    <div class="container">
        <div class="reveal">
            <span class="section-label section-label-light">{{ __('home.our_services') }}</span>
            <h2 class="section-title section-title-white">{{ __('home.services_title') }}</h2>
            <p class="section-desc section-desc-light">{{ __('home.services_desc') }}</p>
        </div>
        <div class="services-grid reveal">
            <div class="service-card">
                <div class="service-num">01</div>
                <div class="service-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                <h3 class="service-title">{{ __('home.svc1_title') }}</h3>
                <p class="service-desc">{{ __('home.svc1_desc') }}</p>
            </div>
            <div class="service-card">
                <div class="service-num">02</div>
                <div class="service-icon"><i class="fa-solid fa-microchip"></i></div>
                <h3 class="service-title">{{ __('home.svc2_title') }}</h3>
                <p class="service-desc">{{ __('home.svc2_desc') }}</p>
            </div>
            <div class="service-card">
                <div class="service-num">03</div>
                <div class="service-icon"><i class="fa-solid fa-headset"></i></div>
                <h3 class="service-title">{{ __('home.svc3_title') }}</h3>
                <p class="service-desc">{{ __('home.svc3_desc') }}</p>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════
     ADHESION
══════════════════════════════════════════ --}}
<section class="adhesion-section section" id="adhesion">
    <div class="container">
        <div class="adhesion-grid">
            <div class="adhesion-info reveal">
                <span class="section-label">{{ __('home.become_member') }}</span>
                <h2 class="section-title">{{ __('home.join_today') }}</h2>
                <p class="section-desc">{{ __('home.join_desc') }}</p>
                <div class="adhesion-steps">
                    <div class="step-item">
                        <div class="step-num">1</div>
                        <div class="step-content">
                            <div class="step-title">{{ __('home.step1_title') }}</div>
                            <div class="step-desc">{{ __('home.step1_desc') }}</div>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-num">2</div>
                        <div class="step-content">
                            <div class="step-title">{{ __('home.step2_title') }}</div>
                            <div class="step-desc">{{ __('home.step2_desc') }}</div>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-num">3</div>
                        <div class="step-content">
                            <div class="step-title">{{ __('home.step3_title') }}</div>
                            <div class="step-desc">{!! __('home.step3_desc') !!}</div>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-num">4</div>
                        <div class="step-content">
                            <div class="step-title">{{ __('home.step4_title') }}</div>
                            <div class="step-desc">{{ __('home.step4_desc') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Form --}}
            <div class="reveal">
                <div class="adhesion-form-card">
                    <div class="adhesion-form-top-bar"></div>
                    <h3 class="adhesion-form-title">{{ __('home.adhesion_title') }}</h3>

                    @if(session('success'))
                        <div class="alert-success">
                            <i class="fa-solid fa-circle-check"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('store_offre') }}" method="POST" id="adhesionForm">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label>{{ __('pages.l_fullname') }}</label>
                                <input type="text" name="full_name" placeholder="{{ __('pages.ph_fullname') }}" required value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group">
                                <label>{{ __('pages.l_email') }}</label>
                                <input type="email" name="email" placeholder="{{ __('pages.ph_email') }}" required value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>{{ __('pages.l_company') }}</label>
                                <input type="text" name="company_name" placeholder="{{ __('pages.ph_company') }}" required value="{{ old('company_name') }}">
                            </div>
                            <div class="form-group">
                                <label>{{ __('pages.l_phone') }}</label>
                                <input type="tel" name="phone" placeholder="{{ __('pages.ph_phone') }}" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('pages.l_city') }}</label>
                            <input type="text" name="adresse" placeholder="{{ __('pages.ph_city') }}" value="{{ old('adresse') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ __('pages.l_plan') }}</label>
                            <select name="type_offre" required>
                                <option value="" disabled {{ old('type_offre') ? '' : 'selected' }}>{{ __('pages.ph_plan') }}</option>
                                <option value="600"   {{ old('type_offre')=='600'   ? 'selected':'' }}>{{ __('formulas.f1_ca') }} — 600 DH</option>
                                <option value="1000"  {{ old('type_offre')=='1000'  ? 'selected':'' }}>{{ __('formulas.f2_ca') }} — 1.000 DH</option>
                                <option value="1500"  {{ old('type_offre')=='1500'  ? 'selected':'' }}>{{ __('formulas.f3_ca') }} — 1.500 DH</option>
                                <option value="3000"  {{ old('type_offre')=='3000'  ? 'selected':'' }}>{{ __('formulas.f4_ca') }} — 3.000 DH</option>
                                <option value="6000"  {{ old('type_offre')=='6000'  ? 'selected':'' }}>{{ __('formulas.f5_ca') }} — 6.000 DH</option>
                                <option value="12000" {{ old('type_offre')=='12000' ? 'selected':'' }}>{{ __('formulas.f6_ca') }} — 12.000 DH</option>
                                <option value="40000" {{ old('type_offre')=='40000' ? 'selected':'' }}>{{ __('formulas.f7_ca') }} — 40.000 DH</option>
                            </select>
                        </div>
                        <button type="submit" class="form-submit-btn">
                            {{ __('pages.offre_submit') }} <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════
     RIB / PAYMENT
══════════════════════════════════════════ --}}
<section class="rib-section section" id="payment">
    <div class="container">
        <div class="rib-grid">
            <div class="reveal">
                <span class="section-label">{{ __('home.payment') }}</span>
                <h2 class="section-title">{{ __('home.payment_title') }}</h2>
                <p class="section-desc">{{ __('home.payment_desc') }}</p>
                <div class="pay-steps">
                    <div class="pay-step"><div class="pay-step-num">1</div><div><div class="pay-step-title">{{ __('home.ps1_title') }}</div><div class="pay-step-desc">{{ __('home.ps1_desc') }}</div></div></div>
                    <div class="pay-step"><div class="pay-step-num">2</div><div><div class="pay-step-title">{{ __('home.ps2_title') }}</div><div class="pay-step-desc">{{ __('home.ps2_desc') }}</div></div></div>
                    <div class="pay-step"><div class="pay-step-num">3</div><div><div class="pay-step-title">{{ __('home.ps3_title') }}</div><div class="pay-step-desc">{!! __('home.ps3_desc') !!}</div></div></div>
                    <div class="pay-step"><div class="pay-step-num">4</div><div><div class="pay-step-title">{{ __('home.ps4_title') }}</div><div class="pay-step-desc">{{ __('home.ps4_desc') }}</div></div></div>
                </div>
            </div>

            <div class="reveal">
                <div class="rib-card">
                    <div class="rib-card-header">
                        <div class="rib-bank-icon"><i class="fa-solid fa-university"></i></div>
                        <div>
                            <div class="rib-bank-name">Banque Populaire</div>
                            <div class="rib-bank-sub">{{ app()->getLocale() === 'en' ? 'Official AMPF account' : 'Compte officiel de l\'AMPF' }}</div>
                        </div>
                    </div>
                    <div class="rib-rows">
                        <div class="rib-row"><span class="rib-label">{{ app()->getLocale() === 'en' ? 'Account holder' : 'Titulaire' }}</span><span class="rib-value">AMPF</span></div>
                        <div class="rib-row"><span class="rib-label">{{ app()->getLocale() === 'en' ? 'Bank' : 'Banque' }}</span><span class="rib-value">Banque Populaire</span></div>
                        <div class="rib-row">
                            <span class="rib-label">RIB</span>
                            <span class="rib-value rib-blur" data-reveal="190780212119305411000527">
                                190 780 ••••• ••••• ••
                                <small>({{ app()->getLocale() === 'en' ? 'click to reveal' : 'cliquez pour révéler' }})</small>
                            </span>
                        </div>
                    </div>
                    <div class="rib-actions">
                        <a href="{{ asset('assets/docs/rib-ampf.pdf') }}" download class="rib-btn">
                            <i class="fa-solid fa-download"></i> {{ __('home.download_rib') }}
                        </a>
                        <a href="mailto:adhesion@ampf.ma" class="rib-btn">
                            <i class="fa-solid fa-envelope"></i> {{ __('home.send_receipt') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════
     PARTNERS
══════════════════════════════════════════ --}}
<section class="partners-section">
    <div class="container">
        <p class="partners-label">{{ __('home.partners_label') }}</p>
        <div class="partners-track">
            <img src="{{ asset('assets/img/clients1/logo1.jpg') }}" alt="Partenaire 1" class="partner-logo">
            <img src="{{ asset('assets/img/clients1/logo2.jpg') }}" alt="Partenaire 2" class="partner-logo">
            <img src="{{ asset('assets/img/clients1/logo3.jpg') }}" alt="Partenaire 3" class="partner-logo">
            <img src="{{ asset('assets/img/clients1/logo4.jpg') }}" alt="Partenaire 4" class="partner-logo">
            <img src="{{ asset('assets/img/clients1/logo5.jpg') }}" alt="Partenaire 5" class="partner-logo">
            <img src="{{ asset('assets/img/clients1/logo6.jpg') }}" alt="Partenaire 6" class="partner-logo">
            <img src="{{ asset('assets/img/clients1/LOGO-SMART-EXPO.png') }}" alt="Smart Events" class="partner-logo">
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════
     TESTIMONIALS / VIDEOS
══════════════════════════════════════════ --}}
<section class="testimonials-section section" id="media">
    <div class="container">
        <div class="reveal" style="text-align:center;">
            <span class="section-label" style="display:block; text-align:center;">{{ __('home.testimonials') }}</span>
            <h2 class="section-title" style="text-align:center;">{{ __('home.they_talk') }}</h2>
        </div>

        <div class="video-slider-wrap reveal">
            <button class="vslider-arrow vslider-prev" id="vsliderPrev" aria-label="Précédent">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <div class="video-slider" id="videoSlider">
                @php
                    $videos = [
                        ['src'=>'video3.mp4',  'cover'=>'video3_cover03.jpg',  'caption'=>"Casablanca à l'heure de la 4ème édition du REFRIGAIR EXPO"],
                        ['src'=>'video5.mp4',  'cover'=>'video5_cover.jpg',    'caption'=>"REFRIGAIR EXPO : L'innovation au service de l'industrie du froid"],
                        ['src'=>'video6.mp4',  'cover'=>'video13_cover.jpg',   'caption'=>'REFRIGAIR EXPO : Les professionnels du froid au rendez-vous'],
                        ['src'=>'video7.mp4',  'cover'=>'video7_cover.jpg',    'caption'=>"Lancement d'un salon international dédié à la climatisation, la ventilation et le froid au Maroc"],
                        ['src'=>'video1.mp4',  'cover'=>'video_cover01.jpg',   'caption'=>"Journée mondiale du froid : L'importance du secteur du froid dans le développement durable"],
                        ['src'=>'video11.mp4', 'cover'=>'video11_cover.jpg',   'caption'=>'Le Salon International du CVC au service de la transition énergétique'],
                    ];
                @endphp

                @foreach($videos as $i => $v)
                <div class="video-slide"
                     data-src="{{ asset('assets/img/video/' . $v['src']) }}"
                     data-caption="{{ $v['caption'] }}">
                    <div class="video-thumb"
                         style="background-image: url('{{ asset('assets/img/video/' . $v['cover']) }}')">
                        <div class="video-thumb-overlay"></div>
                        <button class="video-play-btn" aria-label="{{ app()->getLocale() === 'en' ? 'Play video' : 'Lire la vidéo' }}">
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <div class="video-caption">{{ $v['caption'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="vslider-arrow vslider-next" id="vsliderNext" aria-label="Suivant">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div class="vslider-dots" id="vsliderDots"></div>
    </div>
</section>

{{-- VIDEO LIGHTBOX --}}
<div class="video-lightbox-overlay" id="videoLightbox">
    <button class="video-lightbox-close" id="videoLightboxClose" aria-label="{{ app()->getLocale() === 'en' ? 'Close' : 'Fermer' }}">
        <i class="fa-solid fa-xmark"></i>
    </button>
    <div class="video-lightbox-inner">
        <video id="lightboxVideo" controls playsinline></video>
        <p class="video-lightbox-caption" id="lightboxCaption"></p>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
<script defer src="{{ asset('assets/js/home.js') }}"></script>

@endsection
