<?php
/*
Template Name: Anniversaires
*/

get_header(); 
?>

<main class="tarifs-page">
    <div class="container py-5">
        
        <!-- En-tête de la page -->
        <div class="section-header text-center mb-5">
            <span class="viking-label">Le meilleur des cadeaux</span>
            <h1 class="display-4 fw-bold">Fêter son Anniversaire</h1>
            <p class="lead">Offrez-lui une demi-journée d'aventure inoubliable dans les arbres avec tous ses ami(e)s !</p>
        </div>

        <!-- Section 1 : Intro et Offre Anniversaire -->
        <div class="row align-items-center mb-5 mt-5 g-5">
            <!-- Texte côté gauche -->
            <div class="col-lg-7">
                <h2 class="fw-bold mb-4">Un anniversaire 100% Plein Air</h2>
                <p class="fs-5 text-dark mb-4" style="line-height: 1.6;">
                    Fatigué(e) d'organiser les anniversaires dans le salon ? Chez Viking Aventure, les enfants se défoulent, font le plein de sensations fortes et repartent avec des souvenirs plein la tête. Nous nous occupons du cadre et des activités, vous n'avez plus qu'à profiter !
                </p>
                <div class="d-flex align-items-start mb-3">
                    <i class="fa-solid fa-face-laugh-beam fa-2x text-success me-3 mt-1"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Pour tous les âges</h5>
                        <p class="text-muted">Des parcours parfaitement adaptés dès 90cm (environ 2-3 ans) jusqu'aux ados têtes brûlées.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <i class="fa-solid fa-gift fa-2x text-primary me-3 mt-1"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Soufflez les bougies en forêt</h5>
                        <p class="text-muted">Une table de pique-nique ombragée vous est spécialement réservée pour poser le gâteau et les cadeaux.</p>
                    </div>
                </div>
            </div>

            <!-- Carte promo (Droite) -->
            <div class="col-lg-5">
                <div class="pricing-card h-100 p-5 text-center" style="background: linear-gradient(135deg, #fcecd9 0%, #ffffff 100%); border: 3px solid var(--viking-red); transform: scale(1.02); z-index: 2;">
                    <div class="mb-4">
                        <span class="viking-badge highlight" style="font-size: 1.1rem; padding: 10px 20px;">Le Roi de la Fête</span>
                    </div>
                    <i class="fa-solid fa-cake-candles fa-5x text-danger mb-4" style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15));"></i>
                    <h3 class="display-6 fw-bold mb-0 text-dark">L'entrée est <span class="text-danger">OFFERTE</span></h3>
                    <p class="fs-5 mt-3 fw-bold">pour l'enfant qui fête son anniversaire !</p>
                    <hr class="my-4 w-75 mx-auto opacity-25">
                    <p class="text-muted small mb-0"><strong>Condition :</strong> Offre valable de date à date, à partir de 6 enfants payants. L'enfant fêtant son anniversaire est le 7ème et ne paie pas !</p>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <!-- Organisation / Comment ça se passe -->
        <div class="text-center mb-5 mt-5">
            <span class="viking-label red">L'Organisation</span>
            <h2 class="display-5 fw-bold">Le Programme de l'Anniversaire</h2>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            <!-- Etape 1 -->
            <div class="col-md-3">
                <div class="pricing-card h-100 p-4 text-center">
                    <div style="width: 60px; height: 60px; background: var(--viking-red); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 24px; font-weight: bold;">
                        1
                    </div>
                    <h5 class="fw-bold">L'Accueil</h5>
                    <p class="text-muted small mt-3">Rassemblement de la troupe ! Vous êtes accueillis par notre équipe. Nous vous indiquons votre table de goûter réservée (pour y poser vos glacières/gâteaux).</p>
                </div>
            </div>

            <!-- Etape 2 -->
            <div class="col-md-3">
                <div class="pricing-card h-100 p-4 text-center">
                    <div style="width: 60px; height: 60px; background: var(--viking-red); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 24px; font-weight: bold;">
                        2
                    </div>
                    <h5 class="fw-bold">Le Briefing</h5>
                    <p class="text-muted small mt-3">Nos opérateurs équipent chaque enfant d'un baudrier. Tout le groupe visionne les règles de sécurité, puis passe le petit parcours test d'initiation.</p>
                </div>
            </div>

            <!-- Etape 3 -->
            <div class="col-md-3">
                <div class="pricing-card h-100 p-4 text-center">
                    <div style="width: 60px; height: 60px; background: var(--viking-red); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 24px; font-weight: bold;">
                        3
                    </div>
                    <h5 class="fw-bold">L'Aventure !</h5>
                    <p class="text-muted small mt-3">C'est parti ! Les enfants crapahutent en accès illimité sur les parcours correspondant à leur taille et leur Pack, sous la supervision active des parents depuis le sol.</p>
                </div>
            </div>

            <!-- Etape 4 -->
            <div class="col-md-3">
                <div class="pricing-card h-100 p-4 text-center">
                    <div style="width: 60px; height: 60px; background: var(--viking-red); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 24px; font-weight: bold;">
                        4
                    </div>
                    <h5 class="fw-bold">Le Goûter</h5>
                    <p class="text-muted small mt-3">Le moment tant attendu. Les enfants se déséquipent et se réunissent sur votre table réservée pour ouvrir les cadeaux et dévorer le gâteau d'anniversaire !</p>
                </div>
            </div>
        </div>

        <!-- Section Spéciale Parents -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="p-4 d-flex flex-column flex-md-row align-items-center" style="background: rgba(44, 62, 80, 0.05); border-radius: 15px; border-left: 5px solid var(--viking-red);">
                    <i class="fa-solid fa-shield-cat fa-4x text-info me-md-4 mb-3 mb-md-0"></i>
                    <div>
                        <h4 class="fw-bold">Zéro stress pour les parents organisateurs !</h4>
                        <p class="mb-0 text-muted">Avoir la charge de 8 enfants surexcités peut être sportif ! Rassurez-vous : chez Viking Aventure, tous les parcours enfants sont dotés du <strong>système certifié de Ligne de Vie Continue</strong>. Une fois accrochés au premier arbre, il est mécaniquement <strong>impossible</strong> de se détacher avant la fin du parcours. Vous restez au sol, appareil photo à la main, pour les accompagner d'en bas en toute sérénité.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invitation finale -->
        <div class="row pt-5 pb-4 mt-4">
            <div class="col-12 text-center">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-reservation px-5 py-3" style="font-size: 20px; box-shadow: 0 10px 25px rgba(191,34,45,0.3); transform: scale(1.05);">
                    <i class="fa-solid fa-calendar-check me-2"></i> Réserver notre date !
                </a>
                <p class="mt-4 text-muted"><strong>Astuce :</strong> Appelez-nous au moins 15 jours à l'avance pour être certain d'avoir votre grande table réservée pour le goûter.</p>
            </div>
        </div>

    </div>
</main>

<?php 
get_footer(); 
?>
