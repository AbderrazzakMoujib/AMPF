@extends('layout')
@section('title', "Demande d'adhésion — AMPF")

@section('content')

<div class="page-hero page-hero--img">
    <div class="page-hero-bg"
         style="background-image:url('{{ asset('assets/img/hero/hero_offre.png') }}');">
    </div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-content">
        <div class="page-hero-label">Adhésion</div>
        <h1 class="page-hero-title">Demande d'adhésion</h1>
        <p class="page-hero-desc">Rejoignez le réseau des professionnels du froid au Maroc. Remplissez le formulaire ci-dessous.</p>
        <div class="page-breadcrumb">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Accueil</a>
            <span class="sep"><i class="fa-solid fa-chevron-right"></i></span>
            <span class="current">Adhésion</span>
        </div>
    </div>
</div>

<section class="section offre-section">
    <div class="container">
        <div class="offre-grid">

            {{-- Steps --}}
            <div class="offre-steps reveal">
                <span class="section-label">Comment ça marche</span>
                <h2 class="section-title">Processus d'adhésion</h2>
                <p class="section-desc">Simple et rapide — devenez membre en 4 étapes.</p>

                <div class="offre-steps-list">
                    <div class="offre-step">
                        <div class="offre-step-num">1</div>
                        <div>
                            <div class="offre-step-title">Remplissez le formulaire</div>
                            <div class="offre-step-desc">Saisissez vos informations professionnelles et choisissez la formule adaptée à votre chiffre d'affaires.</div>
                        </div>
                    </div>
                    <div class="offre-step">
                        <div class="offre-step-num">2</div>
                        <div>
                            <div class="offre-step-title">Effectuez le virement</div>
                            <div class="offre-step-desc">Réglez la cotisation par virement bancaire via le RIB ci-dessous. Mentionnez votre nom en référence.</div>
                        </div>
                    </div>
                    <div class="offre-step">
                        <div class="offre-step-num">3</div>
                        <div>
                            <div class="offre-step-title">Envoyez le justificatif</div>
                            <div class="offre-step-desc">Envoyez votre reçu de virement à <strong style="color:var(--blue-light)">adhesion@ampf.ma</strong> avec vos coordonnées.</div>
                        </div>
                    </div>
                    <div class="offre-step">
                    <div class="offre-step-num">4</div>
                        <div>
                            <div class="offre-step-title">Confirmation par email</div>
                            <div class="offre-step-desc">Notre équipe vous contactera par email dans les 48 heures ouvrables pour confirmer votre adhésion.</div>
                        </div>
                    </div>
                </div>

                {{-- RIB --}}
                <div class="offre-rib">
                    <div class="offre-rib-header">
                        <div class="offre-rib-icon"><i class="fa-solid fa-university"></i></div>
                        <div>
                            <div class="offre-rib-bank">Banque Populaire</div>
                            <div class="offre-rib-sub">Compte officiel AMPF</div>
                        </div>
                    </div>
                    <div class="offre-rib-rows">
                        <div class="offre-rib-row">
                            <span>Titulaire</span>
                            <span class="rib-val">AMPF</span>
                        </div>
                        <div class="offre-rib-row">
                            <span>RIB</span>
                            <span class="rib-val rib-blur" data-reveal="190780212119305411000527">
                                190 780 ••••• ••••• •• <small>(cliquez pour révéler)</small>
                            </span>
                        </div>
                    </div>
                    <div class="offre-rib-actions">
                        <a href="{{ asset('assets/docs/rib-ampf.pdf') }}" download class="rib-btn-sm">
                            <i class="fa-solid fa-download"></i> Télécharger RIB
                        </a>
                        <a href="mailto:adhesion@ampf.ma" class="rib-btn-sm">
                            <i class="fa-solid fa-envelope"></i> Envoyer reçu
                        </a>
                    </div>
                </div>
            </div>

            {{-- Form --}}
            <div class="reveal">
                <div class="offre-form-card">
                    <div class="offre-form-top"></div>
                    <h3 class="offre-form-title">Formulaire d'adhésion</h3>

                    @if(session('success'))
                    <div class="alert-success">
                        <i class="fa-solid fa-circle-check"></i>
                        Demande envoyée ! Nous vous contacterons sous 48h.
                    </div>
                    @endif

                    <form action="{{ route('store_offre') }}" method="POST">
                        @csrf
                        <div class="offre-form-row">
                            <div class="form-group">
                                <label>Nom complet *</label>
                                <input type="text" name="full_name" placeholder="Votre nom complet" required value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group">
                                <label>Email professionnel *</label>
                                <input type="email" name="email" placeholder="email@societe.ma" required value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="offre-form-row">
                            <div class="form-group">
                                <label>Nom de l'entreprise *</label>
                                <input type="text" name="company_name" placeholder="Raison sociale" required value="{{ old('company_name') }}">
                            </div>
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="tel" name="phone" placeholder="+212 6xx xxx xxx" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ville / Adresse</label>
                            <input type="text" name="adresse" placeholder="Casablanca, Rabat..." value="{{ old('adresse') }}">
                        </div>
                        <div class="form-group">
                            <label>Chiffre d'affaires annuel — Formule *</label>
                            <select name="type_offre" required>
                                <option value="" disabled {{ old('type_offre') ? '' : 'selected' }}>Sélectionnez votre formule</option>
                                <option value="600"   {{ old('type_offre')=='600'   ? 'selected':'' }}>Moins de 1M DH — 600 DH/an</option>
                                <option value="1000"  {{ old('type_offre')=='1000'  ? 'selected':'' }}>Jusqu'à 5M DH — 1.000 DH/an</option>
                                <option value="1500"  {{ old('type_offre')=='1500'  ? 'selected':'' }}>Entre 5M et 20M DH — 1.500 DH/an</option>
                                <option value="3000"  {{ old('type_offre')=='3000'  ? 'selected':'' }}>Entre 20M et 50M DH — 3.000 DH/an</option>
                                <option value="6000"  {{ old('type_offre')=='6000'  ? 'selected':'' }}>Entre 50M et 100M DH — 6.000 DH/an</option>
                                <option value="12000" {{ old('type_offre')=='12000' ? 'selected':'' }}>Entre 100M et 200M DH — 12.000 DH/an</option>
                                <option value="40000" {{ old('type_offre')=='40000' ? 'selected':'' }}>Plus de 200M DH — 40.000 DH/an</option>
                            </select>
                        </div>
                        <button type="submit" class="offre-submit">
                            Soumettre ma demande <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>

                    <p class="offre-form-note">
                        <i class="fa-solid fa-lock"></i>
                        Vos informations sont confidentielles et ne seront pas partagées.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/offre.css') }}">
@endsection

@section('scripts')
<script>
document.querySelectorAll('.rib-blur').forEach(el => {
    el.addEventListener('click', () => {
        if (el.classList.contains('revealed')) return;
        el.classList.add('revealed');
        el.textContent = el.dataset.reveal;
    });
});
</script>
@endsection
