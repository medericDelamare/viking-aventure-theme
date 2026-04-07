<?php
/*
Template Name: Page Accrobranche Viking
*/
get_header(); ?>

<main class="tarifs-page">
    <div class="container py-5">
        
        <!-- En-tête de la page -->
        <div class="section-header text-center mb-5 pt-header">
            <span class="viking-label highlight mb-3">L'Aventure dans les arbres</span>
            <h1 class="display-3 fw-bold">Parcours Accrobranche</h1>
            <p class="lead">Défiez la gravité sur nos 12 parcours progressifs en plein cœur de la forêt Normande.</p>
        </div>

        <!-- Section Sécurité (Mise en avant visuelle) -->
        <div class="row align-items-center mb-5 mt-4 g-5">
            <div class="col-lg-7">
                <h2 class="fw-bold mb-4">100% Adrénaline, 0% Risque</h2>
                <p class="fs-5 text-dark mb-4 lh-lg">
                    Que vous soyez un jeune aventurier de 3 ans ou un grimpeur chevronné prêt à défier le vide, l'intégralité de notre parc est équipée de la technologie de sécurité la plus pointue : la <strong>Ligne de Vie Continue</strong> (LVC).
                </p>
                <div class="d-flex align-items-start mb-3">
                    <i class="fa-solid fa-lock fa-2x text-success me-3 mt-1"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Un Crochet Inamovible</h5>
                        <p class="text-muted">Dès le départ et jusqu'à l'arrivée de la tyrolienne finale, le mousqueton de sécurité ne peut <strong>mécaniquement pas</strong> être détaché du câble de sécurité.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <i class="fa-solid fa-graduation-cap fa-2x text-primary me-3 mt-1"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Encadrement Diplômé CQP</h5>
                        <p class="text-muted">La sécurité est notre priorité absolue : nos opérateurs qualifiés animent un briefing obligatoire, un test d'initiation et veillent activement sur vous en permanence.</p>
                    </div>
                </div>
            </div>

            <!-- Image d'illustration / Immersion -->
            <div class="col-lg-5">
                <div class="viking-polaroid">
                    <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?q=80&w=800" alt="Accrobranche Immersion Forêt" class="img-fluid viking-img-cover">
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <!-- L'Explorateur des Niveaux -->
        <div class="text-center mb-5 mt-5">
            <span class="viking-label red">Pour tous les âges</span>
            <h2 class="display-5 fw-bold">Découvrez nos Niveaux</h2>
        </div>

        <!-- Niveau Pitchoun -->
        <div class="row align-items-center mb-5 p-4 viking-card-feature">
            <div class="col-md-3 text-center border-end-md pe-md-4">
                <div class="mb-3">
                    <span class="viking-badge viking-badge-lg">Dès 2-3 ans (90 cm)</span>
                </div>
                <i class="fa-solid fa-child-reaching fa-4x text-success mb-3 mt-2"></i>
                <h3 class="fw-bold">Les Louveteaux</h3>
            </div>
            <div class="col-md-9 border-start ps-md-4 mt-3 mt-md-0">
                <p class="fs-5 mb-3">Le royaume exclusif des plus petits ! Des parcours à faible hauteur créés pour découvrir l'équilibre en s'amusant. Les parents peuvent facilement suivre pas à pas et tenir la main de l'enfant depuis le sol (sans aucun équipement de leur côté).</p>
                <div class="row text-muted small mt-4">
                    <div class="col-sm-4"><i class="fa-solid fa-route text-success me-2"></i> <strong>3 Parcours</strong> adaptés</div>
                    <div class="col-sm-4"><i class="fa-solid fa-cubes text-success me-2"></i> Ateliers colorés et filets martiens</div>
                    <div class="col-sm-4"><i class="fa-solid fa-eye text-success me-2"></i> Surveillance parentale au sol</div>
                </div>
            </div>
        </div>

        <!-- Niveau Famille -->
        <div class="row align-items-center mb-5 p-4 viking-card-feature">
            <div class="col-md-3 text-center border-end-md pe-md-4">
                <div class="mb-3">
                    <span class="viking-badge highlight viking-badge-lg">Taille > 1m10</span>
                </div>
                <i class="fa-solid fa-users fa-4x text-primary mb-3 mt-2"></i>
                <h3 class="fw-bold">L'Épopée Familiale</h3>
            </div>
            <div class="col-md-9 border-start ps-md-4 mt-3 mt-md-0">
                <p class="fs-5 mb-3">Le cœur de l'aventure, pour les petits intrépides et les adultes ! Prenez tranquillement de la hauteur avec des parcours verts et bleus conçus pour partager un maximum de sensations en famille : filets pontons, tonneaux flottants et vos toutes premières tyroliennes géantes !</p>
                <div class="row text-muted small mt-4">
                    <div class="col-sm-4"><i class="fa-solid fa-code-branch text-primary me-2"></i> <strong>6 Parcours progressifs</strong></div>
                    <div class="col-sm-4"><i class="fa-solid fa-wind text-primary me-2"></i> Belles et grandes tyroliennes</div>
                    <div class="col-sm-4"><i class="fa-solid fa-leaf text-primary me-2"></i> Balade à mi-hauteur des cimes</div>
                </div>
            </div>
        </div>

        <!-- Niveau Sportif / Extrême -->
        <div class="row align-items-center mb-5 p-4 viking-card-dark">
            <div class="col-md-3 text-center border-end-md pe-md-4 border-secondary">
                <div class="mb-3">
                    <!-- Badge Rouge Intense custom -->
                    <span class="viking-badge viking-badge-danger">Taille > 1m40</span>
                </div>
                <i class="fa-solid fa-bolt fa-4x text-warning mb-3 mt-2"></i>
                <h3 class="fw-bold text-white">Le Frisson Viking</h3>
            </div>
            <div class="col-md-9 border-start border-secondary ps-md-4 mt-3 mt-md-0">
                <p class="fs-5 mb-3 text-light">Strictement réservé aux cœurs les plus téméraires ! Affrontez nos parcours rouges et le mythique parcours noir. Du pur vertige qui demande de la force dans les bras, mais surtout de la volonté mentale. Sauts de Tarzan, rondins inversés et envolées incroyables à près de 15m de haut.</p>
                <div class="row text-white-50 small mt-4">
                    <div class="col-sm-4"><i class="fa-solid fa-skull text-danger me-2"></i> <strong>Parcours extrême "Le Sanglier"</strong></div>
                    <div class="col-sm-4"><i class="fa-solid fa-dumbbell text-danger me-2"></i> Épreuve physique intense</div>
                    <div class="col-sm-4"><i class="fa-solid fa-parachute-box text-danger me-2"></i> L'Adrénaline poussée au max</div>
                </div>
            </div>
        </div>

        <!-- Appel à l'action -->
        <div class="row mt-5 pt-3 pb-4">
            <div class="col-12 text-center">
                <a href="<?php echo home_url('/tarifs'); ?>" class="btn btn-reservation btn-reservation-lg px-5 py-3">
                    <i class="fa-solid fa-ticket-simple me-2"></i> Voir les Packs & Tarifs <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>