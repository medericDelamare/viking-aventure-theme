<?php
/*
Template Name: Ecoles & Centres de Loisirs
*/

get_header(); 
?>

<main class="tarifs-page">
    <div class="container py-5">
        
        <!-- En-tête de la page -->
        <div class="section-header text-center mb-5">
            <span class="viking-label">Sorties de Groupe</span>
            <h1 class="display-4 fw-bold">Écoles & Centres de Loisirs</h1>
            <p class="lead">Offrez aux enfants une journée d'aventure en pleine nature, 100% sécurisée !</p>
        </div>

        <!-- Introduction / Pourquoi nous choisir -->
        <div class="row align-items-center mb-5">
            <div class="col-12">
                <div class="alert alert-warning d-flex align-items-center p-4 border-0" style="border-radius:15px; box-shadow: 0 5px 15px rgba(255,193,7,0.15);">
                    <i class="fa-solid fa-bus fa-3x me-4 text-warning"></i>
                    <div>
                        <h3 class="alert-heading fw-bold mb-2">Un cadre idéal pour les sorties collectives</h3>
                        <p class="mb-0 fs-5 text-dark">
                            Viking Aventure est la destination parfaite pour les <strong>sorties scolaires, centres aérés, ALSH et colonies de vacances</strong>. Situé au cœur de la forêt, notre parc propose des activités ludiques et sportives adaptées à l'âge et au développement moteur de chaque enfant, le tout dans un environnement sécurisé encadré par des professionnels.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <!-- Les points forts / Arguments -->
        <div class="text-center mb-5 mt-5">
            <span class="viking-label red">Nos Engagements</span>
            <h2 class="display-5 fw-bold">Pourquoi venir chez Viking Aventure ?</h2>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            
            <!-- Sécurité -->
            <div class="col-md-4">
                <div class="pricing-card h-100 p-4 text-center">
                    <i class="fa-solid fa-user-shield fa-3x text-danger mb-3"></i>
                    <h4 class="fw-bold">Sécurité Maximale</h4>
                    <p class="text-muted text-start mt-3">
                        L'ensemble de nos parcours est équipé en <strong>Ligne de Vie Continue</strong> (LVC). Une fois l'enfant accroché au début du parcours, il est impossible pour lui de se détacher avant la fin. Nos opérateurs qualifiés veillent également en permanence au sol.
                    </p>
                </div>
            </div>

            <!-- Parcours adaptés -->
            <div class="col-md-4">
                <div class="pricing-card h-100 p-4 text-center">
                    <i class="fa-solid fa-child-reaching fa-3x text-success mb-3"></i>
                    <h4 class="fw-bold">Parcours Adaptés</h4>
                    <p class="text-muted text-start mt-3">
                        Nous proposons des parcours évolutifs <strong>dès 90 cm (environ 2 ans et demi)</strong>. Les enfants évoluent à leur propre rythme et sur des parcours conçus spécifiquement pour leur taille et leur motricité.
                    </p>
                </div>
            </div>

            <!-- Logistique -->
            <div class="col-md-4">
                <div class="pricing-card h-100 p-4 text-center">
                    <i class="fa-solid fa-map-location-dot fa-3x text-primary mb-3"></i>
                    <h4 class="fw-bold">Logistique Facilitée</h4>
                    <p class="text-muted text-start mt-3">
                        Notre parc dispose d'un <strong>parking gratuit adapté aux bus et autocars</strong>. De larges aires de pique-nique en forêt sont mises à votre disposition pour le repas du midi ou le goûter des enfants.
                    </p>
                </div>
            </div>

        </div>

        <hr class="my-5 opacity-25">

        <!-- Offre & Déroulement -->
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <div class="card-header-viking mb-4">
                        <span class="viking-badge highlight">Organisation</span>
                        <h3 class="mt-3">Le Déroulement de la Journée</h3>
                    </div>
                    <ul class="features text-start">
                        <li class="mb-3"><i class="fa-solid fa-1 text-danger me-2"></i> <strong>Accueil du groupe</strong> et installation sur l'aire de pique-nique.</li>
                        <li class="mb-3"><i class="fa-solid fa-2 text-danger me-2"></i> <strong>Équipement</strong> des enfants par nos opérateurs.</li>
                        <li class="mb-3"><i class="fa-solid fa-3 text-danger me-2"></i> <strong>Briefing de sécurité</strong> et parcours d'initiation obligatoire.</li>
                        <li class="mb-3"><i class="fa-solid fa-4 text-danger me-2"></i> <strong>Activité Accrobranche</strong> en autonomie sous la surveillance des accompagnateurs et opérateurs.</li>
                        <li class="mb-2"><i class="fa-solid fa-5 text-danger me-2"></i> <strong>Déséquipement</strong> et fin de la session.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                    <div class="card-header-viking mb-4">
                        <span class="viking-badge">Modalités</span>
                        <h3 class="mt-3">Tarifs & Accompagnateurs</h3>
                    </div>
                    <p class="text-muted">Nous proposons des <strong>tarifs préférentiels</strong> réservés exclusivement aux établissements scolaires et centres de loisirs (sur devis).</p>
                    <ul class="features text-start mt-4">
                        <li class="mb-3"><i class="fa-solid fa-check-circle text-success me-2"></i> <strong>Gratuité totale</strong> pour les accompagnateurs encadrants (selon le ratio légal exigé).</li>
                        <li class="mb-3"><i class="fa-solid fa-check-circle text-success me-2"></i> <strong>Sur réservation uniquement</strong> (matin ou après-midi).</li>
                        <li class="mb-2"><i class="fa-solid fa-file-invoice text-success me-2"></i> Tolérance selon le nombre final d'enfants le jour J pour la facturation.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Appel à l'action -->
        <div class="row mt-5 pt-4">
            <div class="col-12 text-center">
                <div class="p-5" style="background: rgba(191,34,45,0.05); border-radius:15px; border: 2px dashed rgba(191,34,45,0.2);">
                    <h3 class="fw-bold mb-3">Prêt à organiser votre sortie ?</h3>
                    <p class="text-muted mb-4 fs-5">Contactez-nous pour vérifier les disponibilités, obtenir un devis personnalisé, et préparer la venue de votre groupe.</p>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-reservation px-5 py-3" style="font-size: 18px;">
                        <i class="fa-solid fa-envelope me-2"></i> Demander un Devis Gratuit
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>

<?php 
get_footer(); 
?>
