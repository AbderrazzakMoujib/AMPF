@extends('layout')

@section('title', 'Mot du Président — AMPF')

@section('content')

<section class="president-page-section">
    <div class="container">

        <div class="president-page-header reveal">
            <span class="section-label">Message</span>
            <h1 class="section-title">Le Mot du Président</h1>
        </div>

        <div class="president-page-grid">

            {{-- Colonne gauche : photos --}}
            <div class="president-page-visual reveal">

                <div class="president-main-photo-wrap">
                    <img src="{{ asset('assets/img/president/photo1.jpg') }}"
                         alt="Nacer YAZAMI"
                         class="president-main-photo"
                         id="presidentMainPhoto">
                    <div class="president-photo-overlay"></div>
                    <div class="president-name-card">
                        <div class="president-name">Nacer YAZAMI</div>
                        <div class="president-role">Président de l'AMPF</div>
                    </div>
                </div>

                <div class="president-thumbs">
                    <img src="{{ asset('assets/img/president/photo1.jpg') }}"
                         alt="Photo 1" class="president-thumb active"
                         onclick="switchPresidentPhoto(this, '{{ asset('assets/img/president/photo1.jpg') }}')">
                    <img src="{{ asset('assets/img/president/photo2.jpg') }}"
                         alt="Photo 2" class="president-thumb"
                         onclick="switchPresidentPhoto(this, '{{ asset('assets/img/president/photo2.jpg') }}')">
                    <img src="{{ asset('assets/img/president/photo3.jpg') }}"
                         alt="Photo 3" class="president-thumb"
                         onclick="switchPresidentPhoto(this, '{{ asset('assets/img/president/photo3.jpg') }}')">
                </div>

            </div>

            {{-- Colonne droite : texte --}}
            <div class="president-page-text reveal">

                <div class="president-quote-icon">
                    <i class="fa-solid fa-quote-left"></i>
                </div>

                <div class="president-body">
                    <p>Chers confrères, chers partenaires, chers visiteurs,</p>
                    <p>C'est avec une immense fierté que je vous accueille sur la plateforme numérique de l'Association Marocaine des Professionnels du Froid (AMPF).</p>
                    <p>Depuis notre création en 1994, l'AMPF s'est imposée comme le pilier fédérateur des acteurs du froid et de la climatisation au Maroc. Aujourd'hui, notre secteur traverse une mutation historique. Le froid n'est plus une simple commodité technique ; il est devenu un enjeu stratégique pour la sécurité alimentaire, la santé publique et la transition énergétique de notre Royaume.</p>

                    <h3 class="president-axes-title">Notre mission s'articule autour de trois axes fondamentaux :</h3>

                    <div class="president-axes">
                        <div class="president-axe">
                            <div class="president-axe-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="president-axe-content">
                                <strong>L'Excellence Professionnelle</strong>
                                <span>À travers la formation continue et nos partenariats avec l'OFPPT, nous œuvrons pour que chaque technicien et ingénieur marocain maîtrise les technologies les plus avancées.</span>
                            </div>
                        </div>
                        <div class="president-axe">
                            <div class="president-axe-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <div class="president-axe-content">
                                <strong>L'Engagement Environnemental</strong>
                                <span>En alignement avec les engagements internationaux du Maroc (Protocole de Montréal, Amendement de Kigali), nous accompagnons nos membres vers l'adoption de fluides frigorigènes à faible impact climatique.</span>
                            </div>
                        </div>
                        <div class="president-axe">
                            <div class="president-axe-icon">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <div class="president-axe-content">
                                <strong>L'Innovation et l'Ouverture</strong>
                                <span>Grâce à notre présence dans les instances internationales (comme l'U-3ARC), nous connectons le savoir-faire marocain aux standards mondiaux.</span>
                            </div>
                        </div>
                    </div>

                    <p>Ce site web a été repensé pour être votre outil de référence : vous y trouverez nos actualités, nos ressources techniques et un espace d'échange dédié à notre communauté.</p>
                    <p>J'invite tous les professionnels, entreprises et jeunes talents à nous rejoindre pour bâtir ensemble un secteur du froid durable, performant et fier de son expertise.</p>

                    <div class="president-sign-block">
                        <p class="president-signature">Le froid est l'avenir, protégeons-le ensemble.</p>
                        <div class="president-sign-name">
                            <strong>Nacer YAZAMI</strong>
                            <span>Président de l'AMPF</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="{{ asset('assets/css/mot_president.css') }}">

<script>
function switchPresidentPhoto(thumb, src) {
    document.getElementById('presidentMainPhoto').src = src;
    document.querySelectorAll('.president-thumb').forEach(t => t.classList.remove('active'));
    thumb.classList.add('active');
}
</script>

@endsection