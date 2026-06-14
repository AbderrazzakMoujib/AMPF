@extends('layout')
@section('title', __('contact.meta_title'))

@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection

@section('content')

<div class="page-hero page-hero--img">
    <div class="page-hero-bg" style="background-image:url('{{ asset('assets/img/hero/hero_contact.png') }}');"></div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-content">
        <div class="page-hero-label">{{ __('contact.hero_label') }}</div>
        <h1 class="page-hero-title">{{ __('contact.hero_title') }}</h1>
        <p class="page-hero-desc">{{ __('contact.hero_desc') }}</p>
        <div class="page-breadcrumb">
            <a href="{{ localeRoute('home') }}"><i class="fa-solid fa-house"></i> {{ __('contact.breadcrumb_home') }}</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current">{{ __('contact.breadcrumb_current') }}</span>
        </div>
    </div>
</div>

<section class="section contact-section">
    <div class="container">

        <div class="contact-info-grid reveal">
            <div class="contact-info-card">
                <div class="contact-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                <h4 class="contact-info-title">{{ __('contact.card_address') }}</h4>
                <p class="contact-info-text">RDC Local 2, 106 Centre Commercial Al Badr, <br>Casablanca 20250</p>
            </div>
            <div class="contact-info-card">
                <div class="contact-info-icon"><i class="fa-solid fa-phone"></i></div>
                <h4 class="contact-info-title">{{ __('contact.card_phone') }}</h4>
                <p class="contact-info-text"><a href="tel:+212642734568">+212 06 42 73 45 68</a></p>
            </div>
            <div class="contact-info-card">
                <div class="contact-info-icon"><i class="fa-solid fa-envelope"></i></div>
                <h4 class="contact-info-title">{{ __('contact.card_email') }}</h4>
                <p class="contact-info-text">
                    <a href="mailto:N.yazamiy@ampf.ma">N.yazamiy@ampf.ma</a>
                    <a href="mailto:contact@ampf.ma">contact@ampf.ma</a>
                </p>
            </div>
            <div class="contact-info-card">
                <div class="contact-info-icon"><i class="fa-solid fa-clock"></i></div>
                <h4 class="contact-info-title">{{ __('contact.card_hours') }}</h4>
                <p class="contact-info-text">{!! __('contact.hours_value') !!}</p>
            </div>
        </div>

        <div class="contact-main-grid">
            <div class="contact-map reveal">
                <div class="contact-map-wrap">
                    <iframe
                        src="https://www.google.com/maps?q=RDC+Local+2,+106+Centre+Commercial+Al+Badr,+Casablanca+20250&output=embed"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="contact-map-label">
                    <i class="fa-solid fa-location-dot"></i>
                    RDC Local 2, 106 Centre Commercial Al Badr, Casablanca 20250
                </div>
            </div>

            <div class="reveal">
                <div class="contact-form-card">
                    <div class="contact-form-top"></div>
                    <h3 class="contact-form-title">{{ __('contact.form_title') }}</h3>
                    <p class="contact-form-subtitle">{{ __('contact.form_subtitle') }}</p>

                    @if(session('success'))
                    <div class="alert-success">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ __('contact.success_msg') }}
                    </div>
                    @endif

                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="contact-form-row">
                            <div class="form-group">
                                <label for="name">{{ __('contact.label_name') }}</label>
                                <input type="text" id="name" name="name"
                                       placeholder="{{ __('contact.ph_name') }}" required
                                       value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('contact.label_email') }}</label>
                                <input type="email" id="email" name="email"
                                       placeholder="{{ __('contact.ph_email') }}" required
                                       value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">{{ __('contact.label_message') }}</label>
                            <textarea id="message" name="message" rows="5"
                                      placeholder="{{ __('contact.ph_message') }}" required>{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="contact-submit">
                            {{ __('contact.btn_send') }} <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
