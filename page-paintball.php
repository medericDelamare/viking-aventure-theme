<?php
/*
Template Name: Page Paintball
*/
get_header(); ?>

<main class="tarifs-page">
    <div class="container py-5">
        
        <!-- En-tête de la page -->
        <div class="section-header text-center mb-5" style="margin-top: 80px; padding-top: 20px;">
            <span class="viking-label highlight mb-3">Stratégie & Adrénaline</span>
            <h1 class="display-3 fw-bold">Le Paintball</h1>
            <p class="lead">Préparez vos tactiques et entrez sur le champ de bataille en plein cœur de nos forêts normandes.</p>
        </div>

        <!-- Section Équipement & Immersion -->
        <div class="row align-items-center mb-5 mt-4 g-5">
            <div class="col-lg-7">
                <h2 class="fw-bold mb-4">Une expérience 100% Immersive</h2>
                <p class="fs-5 text-dark mb-4" style="line-height: 1.6;">
                    Idéal pour un enterrement de vie de garçon (EVG), un team-building d'entreprise ou tout simplement pour affronter vos amis le week-end, notre parc de Paintball vous propose <strong>des terrains boisés aménagés</strong> (tranchées, palissades, obstacles naturels) pensés pour l'action pure.
                </p>
                <div class="d-flex align-items-start mb-3">
                    <i class="fa-solid fa-shield-halved fa-2x text-success me-3 mt-1"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Équipement Pro Fourni</h5>
                        <p class="text-muted">Masque thermal anti-buée, plastron de protection et combinaison intégrale propre pour rester couvert de la tête aux pieds.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <i class="fa-solid fa-gun fa-2x text-danger me-3 mt-1"></i>
                    <div>
                        <h5 class="fw-bold mb-1">Lanceurs Haute Précision</h5>
                        <p class="text-muted">Nous fournissons des marqueurs semi-automatiques légers, fiables, et réglés pour un impact optimal sans danger.</p>
                    </div>
                </div>
            </div>

            <!-- Image d'illustration ou Carousel -->
            <div class="col-lg-5">
                <div style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.15); transform: rotate(-3deg); border: 5px solid white;">
                    <?php 
                    $carousel_images = array();
                    if (function_exists('get_field')) {
                        for ($i = 1; $i <= 5; $i++) {
                            $img = get_field('photo_carousel_' . $i);
                            if ($img) {
                                $carousel_images[] = $img;
                            }
                        }
                    }

                    if (empty($carousel_images)) {
                        // Image par défaut si aucune photo administrée
                        echo '<img src="' . get_template_directory_uri() . '/assets/img/paintball-hero.png" alt="Action Paintball en Forêt" class="img-fluid" style="width:100%; object-fit: cover; height: 380px;">';
                    } else {
                        // Carousel
                        ?>
                        <div id="paintballCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                            <div class="carousel-indicators">
                                <?php foreach ($carousel_images as $index => $img) : ?>
                                    <button type="button" data-bs-target="#paintballCarousel" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>" aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $index + 1; ?>"></button>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-inner">
                                <?php foreach ($carousel_images as $index => $img) : 
                                    $img_url = is_array($img) ? $img['url'] : $img;
                                    $img_alt = is_array($img) && isset($img['alt']) && !empty($img['alt']) ? $img['alt'] : 'Action Paintball';
                                ?>
                                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                        <img src="<?php echo esc_url($img_url); ?>" class="d-block w-100" alt="<?php echo esc_attr($img_alt); ?>" style="object-fit: cover; height: 380px;">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php if (count($carousel_images) > 1) : ?>
                            <button class="carousel-control-prev" type="button" data-bs-target="#paintballCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Précédent</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#paintballCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Suivant</span>
                            </button>
                            <?php endif; ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <!-- Les Scénarios de Jeu (Design Horizontal massif) -->
        <div class="text-center mb-5 mt-5">
            <span class="viking-label red">Pour plus de fun</span>
            <h2 class="display-5 fw-bold">Nos Scénarios de Combat</h2>
        </div>

        <!-- Team Deathmatch -->
        <div class="row align-items-center mb-4 p-4" style="background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
            <div class="col-md-3 text-center border-end-md pe-md-4">
                <div class="mb-3">
                    <span class="viking-badge" style="font-size: 1rem; padding: 8px 15px;">Le Grand Classique</span>
                </div>
                <i class="fa-solid fa-people-group fa-4x text-primary mb-3 mt-2"></i>
                <h3 class="fw-bold">Match à Mort</h3>
            </div>
            <div class="col-md-9 border-start ps-md-4 mt-3 mt-md-0">
                <p class="fs-5 mb-3">Deux équipes s'affrontent sans pitié. Le but du jeu est très simple : éliminer l'intégralité de l'équipe adverse avant de vous faire toucher. Communication, couvertures mutuelles et tirs de barrage seront la clé de votre victoire !</p>
                <div class="row text-muted small mt-4">
                    <div class="col-sm-4"><i class="fa-solid fa-users text-primary me-2"></i> Mode Équipe 3vs3 ou plus</div>
                    <div class="col-sm-4"><i class="fa-solid fa-crosshairs text-primary me-2"></i> Viser la tête / le corps</div>
                    <div class="col-sm-4"><i class="fa-solid fa-skull text-primary me-2"></i> On sort du terrain touché</div>
                </div>
            </div>
        </div>

        <!-- Capture de Drapeau -->
        <div class="row align-items-center mb-5 p-4" style="background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
            <div class="col-md-3 text-center border-end-md pe-md-4">
                <div class="mb-3">
                    <span class="viking-badge highlight" style="font-size: 1rem; padding: 8px 15px;">Défi Stratégique</span>
                </div>
                <i class="fa-solid fa-flag fa-4x text-success mb-3 mt-2"></i>
                <h3 class="fw-bold">Capture du Drapeau</h3>
            </div>
            <div class="col-md-9 border-start ps-md-4 mt-3 mt-md-0">
                <p class="fs-5 mb-3">Un drapeau est placé pile au centre du terrain. Votre mission : avancer à couvert sous les tirs ennemis, saisir l'étandard, et le ramener sain et sauf dans la base de votre équipe. Si le porteur est touché, il doit instantanément lâcher sa précieuse relique !</p>
                <div class="row text-muted small mt-4">
                    <div class="col-sm-4"><i class="fa-solid fa-brain text-success me-2"></i> Forte dose de stratégie</div>
                    <div class="col-sm-4"><i class="fa-solid fa-person-running text-success me-2"></i> Action ultra rapide</div>
                    <div class="col-sm-4"><i class="fa-solid fa-trophy text-success me-2"></i> Mode Très Populaire</div>
                </div>
            </div>
        </div>

        <!-- Mode Bunny (EVG Extreme) -->
        <div class="row align-items-center mb-5 p-4" style="background: linear-gradient(135deg, #4b0000 0%, #1a0000 100%); border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.25); color: white; transition: transform 0.3s ease;">
            <div class="col-md-3 text-center border-end-md pe-md-4 border-secondary">
                <div class="mb-3">
                    <span class="viking-badge" style="background: #ffc107; border: 2px solid white; color: black; font-size: 1rem; padding: 8px 15px;">Spécial EVG / Marié</span>
                </div>
                <i class="fa-solid fa-masks-theater fa-4x text-warning mb-3 mt-2"></i>
                <h3 class="fw-bold text-white">La Chasse au Lapin</h3>
            </div>
            <div class="col-md-9 border-start border-secondary ps-md-4 mt-3 mt-md-0">
                <p class="fs-5 mb-3 text-light">Un classique adoré de l'enterrement de vie de célibataire : le (la) futur(e) marié(e) est déguisé(e) de manière ridicule (ex: en gros lapin rose désorienté). Il est laché sur le terrain sans arme. Le reste de l'équipe a pour mission de le traquer pendant un temps imparti. Fous rires (et vengeance) garantis !</p>
                <div class="row text-white-50 small mt-4">
                    <div class="col-sm-4"><i class="fa-solid fa-rabbit text-warning me-2"></i> <strong>Déguisement de cible</strong></div>
                    <div class="col-sm-4"><i class="fa-solid fa-stopwatch text-warning me-2"></i> 5 minutes de survie ultime</div>
                    <div class="col-sm-4"><i class="fa-solid fa-camera-retro text-warning me-2"></i> Préparez les caméras</div>
                </div>
            </div>
        </div>

        <!-- Récapitulatif Forfaits (Tiré de page-tarifs) -->
        <hr class="my-5 opacity-25">
        
        <div class="row justify-content-center text-center mt-5 mb-4">
            <div class="col-lg-8">
                <h3 class="fw-bold mb-4">Ce qui est inclus dans votre forfait</h2>
            </div>
        </div>

        <div class="row text-center mb-5 justify-content-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="p-3">
                    <div style="width: 70px; height: 70px; background: rgba(191,34,45,0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                        <i class="fa-solid fa-stopwatch fa-2x text-danger"></i>
                    </div>
                    <h5 class="fw-bold">2 Heures de Jeu</h5>
                    <p class="text-muted small">C'est la durée minimale parfaite pour vider ses billes, tester tous les terrains et sortir bien fatigué (Session en groupe réservé).</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="p-3">
                    <div style="width: 70px; height: 70px; background: rgba(191,34,45,0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                        <i class="fa-solid fa-circle-dot fa-2x text-danger"></i>
                    </div>
                    <h5 class="fw-bold">200 Billes/Personne</h5>
                    <p class="text-muted small">Un chargeur plein est inclus dans la formule de base avec la liberté de racheter des recharges collectives si la guerre dure !</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="p-3">
                    <div style="width: 70px; height: 70px; background: rgba(191,34,45,0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">
                        <i class="fa-solid fa-people-arrows fa-2x text-danger"></i>
                    </div>
                    <h5 class="fw-bold">À partir de 12 ans</h5>
                    <p class="text-muted small">Le paintball (en mode adulte sensation forte) est formellement encadré pour les adolescents et adultes uniquement.</p>
                </div>
            </div>
        </div>

        <!-- Appel à l'action -->
        <div class="row mt-4 pb-4">
            <div class="col-12 text-center">
                <a href="<?php echo home_url('/tarifs'); ?>" class="btn btn-reservation px-5 py-3" style="font-size: 20px; box-shadow: 0 10px 25px rgba(191,34,45,0.3); transform: scale(1.05);">
                    <i class="fa-solid fa-users-rays me-2"></i> Découvrir les Tarifs Paintball <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>