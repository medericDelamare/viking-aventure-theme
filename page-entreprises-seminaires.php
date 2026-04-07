<?php
/*
Template Name: Entreprises & Séminaires
*/

get_header(); 
?>

<main class="tarifs-page">
    <div class="container py-5">
        
        <!-- En-tête de la page -->
        <div class="section-header text-center mb-5">
            <span class="viking-label">Team Building</span>
            <h1 class="display-4 fw-bold">Entreprises & Séminaires</h1>
            <p class="lead">Renforcez la cohésion de vos équipes avec une journée d'aventure inoubliable !</p>
        </div>

        <!-- Introduction -->
        <div class="row align-items-center justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="alert alert-warning d-flex align-items-center p-4 viking-alert-warning">
                    <i class="fa-solid fa-briefcase fa-3x me-4 text-warning"></i>
                    <div>
                        <h3 class="alert-heading fw-bold mb-2">Un moment marquant pour vos collaborateurs</h3>
                        <p class="mb-0 fs-5 text-dark">
                            Vous cherchez une idée originale pour votre prochain <strong>séminaire, sortie CE, ou journée de team-building</strong> ? Sortez du cadre traditionnel ! Chez Viking Aventure, nous offrons à vos collaborateurs l'opportunité de se dépasser, d'encourager l'entraide et de créer des souvenirs mémorables en pleine nature.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <!-- Ce que nous proposons -->
        <div class="text-center mb-5 mt-5">
            <span class="viking-label red">Notre Offre</span>
            <h2 class="display-5 fw-bold">Nos Formules Professionnelles</h2>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            
            <!-- Cohésion d'équipe -->
            <div class="col-md-4">
                <div class="pricing-card h-100 p-4 text-center">
                    <i class="fa-solid fa-people-group fa-3x text-danger mb-3"></i>
                    <h4 class="fw-bold">Cohésion & Entraide</h4>
                    <p class="text-muted text-start mt-3">
                        L'accrobranche est l'activité parfaite pour renforcer l'esprit d'équipe. La réussite de nos parcours physiques ou vertigineux demande du courage, du dépassement de soi, mais surtout l'encouragement infaillible de ses collègues. Un vrai levier de motivation !
                    </p>
                </div>
            </div>

            <!-- Prestations sur-mesure -->
            <div class="col-md-4">
                <div class="pricing-card h-100 p-4 text-center">
                    <i class="fa-solid fa-handshake-angle fa-3x text-success mb-3"></i>
                    <h4 class="fw-bold">Formules Sur-Mesure</h4>
                    <p class="text-muted text-start mt-3">
                        Nous construisons votre demi-journée ou journée entière selon votre cahier des charges : <strong>Accrobranche seul, privatisation du parc, ou formule multi-activités</strong> (chasses au trésor, olympiades selon nos prestataires). Tout est entièrement modulable.
                    </p>
                </div>
            </div>

            <!-- Espace détente -->
            <div class="col-md-4">
                <div class="pricing-card h-100 p-4 text-center">
                    <i class="fa-solid fa-mug-hot fa-3x text-primary mb-3"></i>
                    <h4 class="fw-bold">Accueil & Restauration</h4>
                    <p class="text-muted text-start mt-3">
                        Profitez de notre grande terrasse ombragée, privatisable pour votre entreprise. Possibilité d'organiser un <strong>café d'accueil, un buffet froid, un cocktail ou l'intervention d'un Food Truck régional</strong> pour agrémenter votre événement.
                    </p>
                </div>
            </div>

        </div>

        <hr class="my-5 opacity-25">

        <!-- Les avantages Viking -->
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="p-4 viking-card-light">
                    <div class="card-header-viking mb-4">
                        <span class="viking-badge highlight">Sécurité</span>
                        <h3 class="mt-3">Aucun Risque, 100% Plaisir</h3>
                    </div>
                    <ul class="features text-start mt-4">
                        <li class="mb-3"><i class="fa-solid fa-shield-halved text-danger me-2"></i> Système en <strong>Ligne de Vie Continue</strong> certifié : vos employés restent sécurisés du premier au dernier arbre.</li>
                        <li class="mb-3"><i class="fa-solid fa-clipboard-check text-danger me-2"></i> Briefing complet animé par nos <strong>Opérateurs Expérimentés (CQP)</strong>.</li>
                        <li class="mb-3"><i class="fa-solid fa-person-walking text-danger me-2"></i> <strong>Adaptable à chaque profil</strong> : du parcours d'initiation très doux au parcours noir pour les grands sportifs, chacun suit son propre niveau sans se sentir forcé.</li>
                        <li class="mb-2"><i class="fa-solid fa-tree text-danger me-2"></i> Micro-climat sous les arbres : la forêt nous protège du grand soleil comme des petites intempéries.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="p-4 viking-card-light">
                    <div class="card-header-viking mb-4">
                        <span class="viking-badge">CE / CSE</span>
                        <h3 class="mt-3">Avantages Billetterie CSE</h3>
                    </div>
                    <p class="text-muted">Si vous êtes un(e) délégué(e) membre d'un <strong>CSE (Comité Social et Économique) ou amicale du personnel</strong>, nous accompagnons vos projets annuels.</p>
                    <ul class="features text-start mt-4">
                        <li class="mb-3"><i class="fa-solid fa-ticket text-success me-2"></i> <strong>Billetterie à tarif réduit (b2b)</strong> pour vos ayants droit sur présentation du catalogue ou pré-achat.</li>
                        <li class="mb-3"><i class="fa-solid fa-calendar-days text-success me-2"></i> <strong>Privatisation du parc</strong> pour l'organisation de vos Arbres de Noël, Family days ruraux ou journées d'été.</li>
                        <li class="mb-2"><i class="fa-solid fa-bullhorn text-success me-2"></i> Matériel promotionnel mis à votre disposition pour le bulletin mensuel ou le panneau d'affichage salarial.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Appel à l'action -->
        <div class="row mt-5 pt-4">
            <div class="col-12 text-center">
                <div class="p-5 viking-cta-box">
                    <h3 class="fw-bold mb-3">Besoin d'un accompagnement personnalisé ?</h3>
                    <p class="text-muted mb-4 fs-5">Laissez-nous vos coordonnées et partagez-nous votre cahier des charges. Nous prendrons le temps d'élaborer l'événement qui correspond parfaitement à la taille de votre équipe et à votre budget.</p>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-reservation px-5 py-3 fs-5">
                        <i class="fa-solid fa-briefcase me-2"></i> Demander une Offre Exclusive
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>

<?php 
get_footer(); 
?>
