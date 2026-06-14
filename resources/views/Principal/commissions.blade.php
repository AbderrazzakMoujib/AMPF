@extends('layout')
@section('title', __('commissions.meta_title'))

@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/commissions.css') }}">
@endsection

@section('content')

<section class="page-hero" style="background-image: url('{{ asset('assets/img/hero/commissions-hero.png') }}'); background-size: cover; background-position: center;">
    <div class="page-hero-grid"></div>
    <div class="page-hero-content">
        <div class="page-hero-label">{{ __('commissions.hero_label') }}</div>
        <h1 class="page-hero-title">{{ __('commissions.hero_title') }}</h1>
        <span class="page-hero-title-bar"></span>
        <p class="page-hero-desc">{{ __('commissions.hero_desc') }}</p>
        <div class="page-breadcrumb">
            <a href="{{ localeRoute('home') }}">{{ __('commissions.breadcrumb_home') }}</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current">{{ __('commissions.breadcrumb_current') }}</span>
        </div>
    </div>
</section>

<section class="section commissions-section">
    <div class="container">

        <div class="comm-header reveal">
            <span class="section-label">{{ __('commissions.label') }}</span>
            <h2 class="section-title">{{ __('commissions.section_title') }}</h2>
            <p class="section-desc">{{ __('commissions.section_desc') }}</p>
        </div>

        <div class="comm-table-wrap reveal">
            <table class="comm-table">
                <thead>
                    <tr>
                        <th class="th-num">{{ __('commissions.col_num') }}</th>
                        <th class="th-commission">{{ __('commissions.col_commission') }}</th>
                        <th class="th-resp">{{ __('commissions.col_resp') }}</th>
                        <th class="th-membres">{{ __('commissions.col_members') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td-num">1</td>
                        <td class="td-commission"><i class="fa-solid fa-network-wired comm-td-icon comm-td-icon--orange"></i>{{ __('commissions.c1_name') }}</td>
                        <td class="td-resp"><span class="avatar avatar--orange">LJ</span> Larbi JIHAOUI</td>
                        <td class="td-membres"><span class="avatar avatar--sm">KM</span> Khalifa M'FADEL <span class="badge-affaire">{{ __('commissions.badge_affaire') }}</span></td>
                    </tr>
                    <tr>
                        <td class="td-num">2</td>
                        <td class="td-commission"><i class="fa-solid fa-gavel comm-td-icon comm-td-icon--green"></i>{{ __('commissions.c2_name') }}</td>
                        <td class="td-resp"><span class="avatar avatar--green">TS</span> Tarik SLAMA</td>
                        <td class="td-membres"><span class="avatar avatar--sm">AJ</span> Ahmed JOHARI ++</td>
                    </tr>
                    <tr>
                        <td class="td-num">3</td>
                        <td class="td-commission"><i class="fa-solid fa-landmark comm-td-icon comm-td-icon--blue"></i>{{ __('commissions.c3_name') }}</td>
                        <td class="td-resp"><span class="avatar avatar--blue">SE</span> Said ELHARCH</td>
                        <td class="td-membres">
                            <div class="membres-list">
                                <div><span class="avatar avatar--sm">HA</span> Hamid AIT SIDI ALI +</div>
                                <div><span class="avatar avatar--sm">NY</span> Nacer YAZAMI +</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-num">4</td>
                        <td class="td-commission"><i class="fa-solid fa-graduation-cap comm-td-icon comm-td-icon--orange"></i>{{ __('commissions.c4_name') }}</td>
                        <td class="td-resp"><span class="avatar avatar--orange">TS</span> Tarik SLAMA</td>
                        <td class="td-membres">
                            <div class="membres-list">
                                <div><span class="avatar avatar--sm">KK</span> Khalid KIHEL +</div>
                                <div><span class="avatar avatar--sm">LM</span> Lahbib MEDJOU ++</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-num">5</td>
                        <td class="td-commission"><i class="fa-solid fa-calendar-star comm-td-icon comm-td-icon--green"></i>{{ __('commissions.c5_name') }}</td>
                        <td class="td-resp"><span class="avatar avatar--green">HK</span> Hicham KAZBOURI</td>
                        <td class="td-membres"><span class="avatar avatar--sm">YE</span> Yassine ESSAIEB ++</td>
                    </tr>
                    <tr>
                        <td class="td-num">6</td>
                        <td class="td-commission"><i class="fa-solid fa-laptop-code comm-td-icon comm-td-icon--blue"></i>{{ __('commissions.c6_name') }}</td>
                        <td class="td-resp"><span class="avatar avatar--blue">HA</span> Hamid AIT SIDI ALI</td>
                        <td class="td-membres">
                            <div class="membres-list">
                                <div><span class="avatar avatar--sm">AJ</span> Ahmed JOHARI +</div>
                                <div><span class="avatar avatar--sm">YE</span> Yassine ESSAIEB ++</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<section class="comm-cta-section">
    <div class="container">
        <div class="comm-cta-card reveal">
            <div class="comm-cta-card-bar"></div>
            <div class="comm-cta-content">
                <div class="comm-cta-icon"><i class="fa-solid fa-hands-holding-circle"></i></div>
                <div>
                    <h3 class="comm-cta-title">{{ __('commissions.cta_title') }}</h3>
                    <p class="comm-cta-desc">{{ __('commissions.cta_desc') }}</p>
                </div>
                <a href="{{ localeRoute('offre') }}" class="btn-primary">
                    {{ __('commissions.cta_btn') }} <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
document.querySelectorAll('.reveal').forEach(el => {
    new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.08 }).observe(el);
});
</script>
@endsection
