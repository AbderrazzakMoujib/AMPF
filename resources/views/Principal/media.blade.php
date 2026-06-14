@extends('layout')
@section('title', 'Média — AMPF')

@section('content')

<div class="page-hero page-hero--img">
    <div class="page-hero-bg"
         style="background-image:url('{{ asset('assets/img/hero/hero_media.png') }}');">
    </div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-content">
        <div class="page-hero-label">Galerie</div>
        <h1 class="page-hero-title">Média</h1>
        <p class="page-hero-desc">Retrouvez nos photos et vidéos des événements, salons et formations organisés par l'AMPF.</p>
        <div class="page-breadcrumb">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current">Média</span>
        </div>
    </div>
</div>

<section class="section media-section">
    <div class="container">

        {{-- Tabs --}}
        <div class="media-tabs reveal">
            <button class="media-tab active" data-tab="photos">
                <i class="fa-solid fa-images"></i> Photos
            </button>
            <button class="media-tab" data-tab="videos">
                <i class="fa-solid fa-circle-play"></i> Vidéos
            </button>
        </div>

        {{-- Photos Grid --}}
        <div class="media-panel active" id="tab-photos">
            <div class="media-photos-grid">
                @php
                $photos = [
                    ['src' => 'assets/img/gallery/image1.webp',  'caption' => 'Journée Mondiale du Froid 2024'],
                    ['src' => 'assets/img/gallery/image2.webp',  'caption' => 'REFRIGAIRE Expo 2023'],
                    ['src' => 'assets/img/gallery/image3.webp',  'caption' => 'Formation Techniciens 2024'],
                    ['src' => 'assets/img/gallery/image4.webp',  'caption' => 'Rencontres Africaines 2023'],
                    ['src' => 'assets/img/gallery/image5.webp',  'caption' => 'AMPF_EVENTS 5'],
                    ['src' => 'assets/img/gallery/image6.webp',  'caption' => 'AMPF_EVENTS_6'],
                    ['src' => 'assets/img/gallery/image7.webp',  'caption' => 'AMPF_EVENTS_7'],
                    ['src' => 'assets/img/gallery/image8.webp',  'caption' => 'AMPF_EVENTS_8'],
                    ['src' => 'assets/img/gallery/image9.webp',  'caption' => 'AMPF_EVENTS_9'],
                    ['src' => 'assets/img/gallery/image10.webp', 'caption' => 'AMPF_EVENTS_10'],
                    ['src' => 'assets/img/gallery/image11.webp', 'caption' => 'AMPF_EVENTS_11'],
                    ['src' => 'assets/img/gallery/image12.webp', 'caption' => 'AMPF_EVENTS_12'],
                    ['src' => 'assets/img/gallery/image14.webp', 'caption' => 'AMPF_EVENTS_14'],
                    ['src' => 'assets/img/gallery/image15.webp', 'caption' => 'AMPF_EVENTS_15'],
                    ['src' => 'assets/img/gallery/image16.webp', 'caption' => 'AMPF_EVENTS_16'],
                    ['src' => 'assets/img/gallery/image17.webp', 'caption' => 'AMPF_EVENTS_17'],
                    ['src' => 'assets/img/gallery/image18.webp', 'caption' => 'AMPF_EVENTS_18'],
                    ['src' => 'assets/img/gallery/image19.webp', 'caption' => 'AMPF_EVENTS_19'],
                    ['src' => 'assets/img/gallery/image20.webp', 'caption' => 'AMPF_EVENTS_20'],
                    ['src' => 'assets/img/gallery/image21.webp', 'caption' => 'AMPF_EVENTS_21'],
                    ['src' => 'assets/img/gallery/image22.webp', 'caption' => 'AMPF_EVENTS_22'],
                    ['src' => 'assets/img/gallery/image23.webp', 'caption' => 'AMPF_EVENTS_23'],
                    ['src' => 'assets/img/gallery/image24.webp', 'caption' => 'AMPF_EVENTS_24'],
                    ['src' => 'assets/img/gallery/image25.webp', 'caption' => 'AMPF_EVENTS_25'],
                    ['src' => 'assets/img/gallery/image26.webp', 'caption' => 'AMPF_EVENTS_26'],
                    ['src' => 'assets/img/gallery/image27.webp', 'caption' => 'AMPF_EVENTS_27'],
                    ['src' => 'assets/img/gallery/image28.webp', 'caption' => 'AMPF_EVENTS_28'],
                    ['src' => 'assets/img/gallery/image29.webp', 'caption' => 'AMPF_EVENTS_29'],
                    ['src' => 'assets/img/gallery/image30.webp', 'caption' => 'AMPF_EVENTS_30'],
                    ['src' => 'assets/img/gallery/image31.webp', 'caption' => 'AMPF_EVENTS_31'],
                    ['src' => 'assets/img/gallery/image32.webp', 'caption' => 'AMPF_EVENTS_32'],
                    ['src' => 'assets/img/gallery/image33.webp', 'caption' => 'AMPF_EVENTS_33'],
                    ['src' => 'assets/img/gallery/image34.webp', 'caption' => 'AMPF_EVENTS_34'],
                    ['src' => 'assets/img/gallery/image35.webp', 'caption' => 'AMPF_EVENTS_35'],
                    ['src' => 'assets/img/gallery/image36.webp', 'caption' => 'AMPF_EVENTS_36'],
                    ['src' => 'assets/img/gallery/image37.webp', 'caption' => 'AMPF_EVENTS_37'],
                    ['src' => 'assets/img/gallery/image38.webp', 'caption' => 'AMPF_EVENTS_38'],
                    ['src' => 'assets/img/gallery/image39.webp', 'caption' => 'AMPF_EVENTS_39'],
                    ['src' => 'assets/img/gallery/image40.webp', 'caption' => 'AMPF_EVENTS_40'],
                    ['src' => 'assets/img/gallery/image41.webp', 'caption' => 'AMPF_EVENTS_41'],
                    ['src' => 'assets/img/gallery/image42.webp', 'caption' => 'AMPF_EVENTS_42'],
                    ['src' => 'assets/img/gallery/image43.webp', 'caption' => 'AMPF_EVENTS_43'],
                    ['src' => 'assets/img/gallery/image44.webp', 'caption' => 'AMPF_EVENTS_44'],
                    ['src' => 'assets/img/gallery/image45.webp', 'caption' => 'AMPF_EVENTS_45'],
                    ['src' => 'assets/img/gallery/image46.webp', 'caption' => 'AMPF_EVENTS_46'],
                    ['src' => 'assets/img/gallery/image47.webp', 'caption' => 'AMPF_EVENTS_47'],
                    ['src' => 'assets/img/gallery/image48.webp', 'caption' => 'AMPF_EVENTS_48'],
                    ['src' => 'assets/img/gallery/image49.webp', 'caption' => 'AMPF_EVENTS_49'],
                    ['src' => 'assets/img/gallery/image50.webp', 'caption' => 'AMPF_EVENTS_50'],
                    ['src' => 'assets/img/gallery/image51.webp', 'caption' => 'AMPF_EVENTS_51'],
                    ['src' => 'assets/img/gallery/image52.webp', 'caption' => 'AMPF_EVENTS_52'],
                    ['src' => 'assets/img/gallery/image53.webp', 'caption' => 'AMPF_EVENTS_53'],
                    ['src' => 'assets/img/gallery/image54.webp', 'caption' => 'AMPF_EVENTS_54'],
                    ['src' => 'assets/img/gallery/image55.webp', 'caption' => 'AMPF_EVENTS_55'],
                    ['src' => 'assets/img/gallery/image56.webp', 'caption' => 'AMPF_EVENTS_56'],
                    ['src' => 'assets/img/gallery/image57.webp', 'caption' => 'AMPF_EVENTS_57'],
                    ['src' => 'assets/img/gallery/image58.webp', 'caption' => 'AMPF_EVENTS_58'],
                    ['src' => 'assets/img/gallery/image59.webp', 'caption' => 'AMPF_EVENTS_59'],
                    ['src' => 'assets/img/gallery/image60.webp', 'caption' => 'AMPF_EVENTS_60'],
                    ['src' => 'assets/img/gallery/image61.webp', 'caption' => 'AMPF_EVENTS_61'],
                    ['src' => 'assets/img/gallery/image62.webp', 'caption' => 'AMPF_EVENTS_62'],
                    ['src' => 'assets/img/gallery/image63.webp', 'caption' => 'AMPF_EVENTS_63'],
                    ['src' => 'assets/img/gallery/image64.webp', 'caption' => 'AMPF_EVENTS_64'],
                    ['src' => 'assets/img/gallery/image65.webp', 'caption' => 'AMPF_EVENTS_65'],
                    ['src' => 'assets/img/gallery/image66.webp', 'caption' => 'AMPF_EVENTS_66'],
                    ['src' => 'assets/img/gallery/image67.webp', 'caption' => 'AMPF_EVENTS_67'],
                    ['src' => 'assets/img/gallery/image68.webp', 'caption' => 'AMPF_EVENTS_68'],
                    ['src' => 'assets/img/gallery/image69.webp', 'caption' => 'AMPF_EVENTS_69'],
                    ['src' => 'assets/img/gallery/image70.webp', 'caption' => 'AMPF_EVENTS_70'],
                    ['src' => 'assets/img/gallery/image71.webp', 'caption' => 'AMPF_EVENTS_71'],
                    ['src' => 'assets/img/gallery/image72.webp', 'caption' => 'AMPF_EVENTS_72'],
                    ['src' => 'assets/img/gallery/image73.webp', 'caption' => 'AMPF_EVENTS_73'],
                    ['src' => 'assets/img/gallery/image74.webp', 'caption' => 'AMPF_EVENTS_74'],
                    ['src' => 'assets/img/gallery/image75.webp', 'caption' => 'AMPF_EVENTS_75'],
                    ['src' => 'assets/img/gallery/image76.webp', 'caption' => 'AMPF_EVENTS_76'],
                    ['src' => 'assets/img/gallery/image77.webp', 'caption' => 'AMPF_EVENTS_77'],
                    ['src' => 'assets/img/gallery/image78.webp', 'caption' => 'AMPF_EVENTS_78'],
                    ['src' => 'assets/img/gallery/image79.webp', 'caption' => 'AMPF_EVENTS_79'],
                ];
                @endphp

                @foreach($photos as $photo)
                    <div class="media-photo-item reveal">
                        <div class="media-photo-wrap">
                            <img src="{{ asset($photo['src']) }}" alt="{{ $photo['caption'] }}" loading="lazy">
                            <div class="media-photo-overlay">
                                <div class="media-photo-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                                <div class="media-photo-caption">{{ $photo['caption'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Videos Grid --}}
        <div class="media-panel" id="tab-videos">
            <div class="media-videos-grid">
                @php
                $videos = [
                    ['src' => 'assets/img/video/video1.mp4',  'poster' => 'assets/img/video/video_cover01.jpg',   'title' => 'Présentation Institutionnelle AMPF'],
                    ['src' => 'assets/img/video/video3.mp4',  'poster' => 'assets/img/video/video3_cover03.jpg',  'title' => 'Activités & Événements 2024'],
                    ['src' => 'assets/img/video/video4.mp4',  'poster' => 'assets/img/video/output__1_-removebg-preview.png',      'title' => 'Conférence Technique du Froid'],
                    ['src' => 'assets/img/video/video5.mp4',  'poster' => 'assets/img/video/video5_cover.jpg',    'title' => 'Formation Professionnelle en Réfrigération'],
                    ['src' => 'assets/img/video/video6.mp4',  'poster' => 'assets/img/video/video6_cover.jpg',      'title' => 'Forum International du Froid'],
                    ['src' => 'assets/img/video/video7.mp4',  'poster' => 'assets/img/video/video7_cover.jpg',    'title' => 'Journée Mondiale du Froid 2024'],
                    ['src' => 'assets/img/video/video8.mp4',  'poster' => 'assets/img/video/video8_cover.jpg',      'title' => 'REFRIGAIRE Expo 2023'],
                    ['src' => 'assets/img/video/video9.mp4',  'poster' => 'assets/img/video/video9_cover.jpg',      'title' => 'Séminaire Régional du Froid'],
                    ['src' => 'assets/img/video/video11.mp4', 'poster' => 'assets/img/video/video11_cover.jpg',   'title' => 'Partenariats & Collaborations Internationales'],
                    ['src' => 'assets/img/video/video12.mp4', 'poster' => 'assets/img/video/video12_cover.jpg',      'title' => 'Rencontre Professionnelle AMPF'],
                    ['src' => 'assets/img/video/video13.mp4', 'poster' => 'assets/img/video/video13_cover.jpg',   'title' => 'Conférence Africaine du Froid'],
                    ['src' => 'assets/img/video/video14.mp4', 'poster' => 'assets/img/video/video14_cover.jpg',      'title' => 'Forum & Networking Industriel'],
                ];
                @endphp

                @foreach($videos as $video)
                    <div class="media-video-item reveal">
                        <div class="media-video-wrap"
                             data-video="{{ asset($video['src']) }}"
                             data-title="{{ $video['title'] }}"
                             data-poster="{{ asset($video['poster']) }}">
                            <video preload="metadata" muted playsinline poster="{{ asset($video['poster']) }}">
                                <source src="{{ asset($video['src']) }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="media-video-title">{{ $video['title'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

{{-- ONE Lightbox for videos --}}
<div class="ampf-lightbox" id="videoLightbox" aria-hidden="true">
    <div class="lb-backdrop"></div>
    <div class="lb-content">
        <button class="lb-close" type="button" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        <video id="lbVideo" controls playsinline></video>
        <div class="lb-caption" id="lbCaption"></div>
    </div>
</div>

@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
@endsection

@section('scripts')
<script>
// Tabs
document.querySelectorAll('.media-tab').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.media-tab').forEach(b => b.classList.remove('active'));
        document.querySelectorAll('.media-panel').forEach(p => p.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById('tab-' + btn.dataset.tab).classList.add('active');
    });
});

// Lightbox Photos (same as you had)
document.querySelectorAll('.media-photo-wrap').forEach(wrap => {
    wrap.addEventListener('click', () => {
        const img = wrap.querySelector('img');
        const lb = document.createElement('div');
        lb.className = 'ampf-lightbox';
        lb.innerHTML = `
            <div class="lb-backdrop"></div>
            <div class="lb-content">
                <button class="lb-close"><i class="fa-solid fa-xmark"></i></button>
                <img src="${img.src}" alt="${img.alt}">
                <div class="lb-caption">${img.alt}</div>
            </div>
        `;
        document.body.appendChild(lb);
        setTimeout(() => lb.classList.add('open'), 10);

        lb.querySelector('.lb-backdrop').onclick =
        lb.querySelector('.lb-close').onclick = () => {
            lb.classList.remove('open');
            setTimeout(() => lb.remove(), 300);
        };
    });
});

// Video Lightbox
const videoLightbox = document.getElementById('videoLightbox');
const lbVideo = document.getElementById('lbVideo');
const lbCaption = document.getElementById('lbCaption');

function openVideo(src, title, poster) {
    lbVideo.pause();
    lbVideo.innerHTML = `<source src="${src}" type="video/mp4">`;
    if (poster) lbVideo.setAttribute('poster', poster);
    lbVideo.load();

    lbCaption.textContent = title || '';
    videoLightbox.classList.add('open');
    videoLightbox.setAttribute('aria-hidden', 'false');

    setTimeout(() => lbVideo.play().catch(()=>{}), 50);
}

function closeVideo() {
    videoLightbox.classList.remove('open');
    videoLightbox.setAttribute('aria-hidden', 'true');
    lbVideo.pause();
    lbVideo.currentTime = 0;
    lbVideo.innerHTML = '';
}

document.querySelectorAll('.media-video-wrap').forEach(wrap => {
    wrap.addEventListener('click', () => {
        openVideo(wrap.dataset.video, wrap.dataset.title, wrap.dataset.poster);
    });
});

videoLightbox.querySelector('.lb-backdrop').addEventListener('click', closeVideo);
videoLightbox.querySelector('.lb-close').addEventListener('click', closeVideo);

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && videoLightbox.classList.contains('open')) closeVideo();
});
</script>
@endsection