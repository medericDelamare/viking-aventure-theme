<?php
/*
Template Name: Restauration & Snack
*/

get_header(); 
?>

<main class="tarifs-page">
    <div class="container py-5">
        
        <!-- En-tête de la page -->
        <div class="section-header text-center mb-5">
            <span class="viking-label">Une pause gourmande</span>
            <h1 class="display-4 fw-bold">Restauration & Snack</h1>
            <p class="lead">Reprenez des forces entre deux aventures tout en restant sur place !</p>
        </div>

        <!-- Section Terrasse -->
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-10">
                <div class="alert alert-warning d-flex align-items-center p-4 border-0 viking-alert-promo">
                    <i class="fa-solid fa-tree fa-3x me-4 text-success opacity-75"></i>
                    <div>
                        <h3 class="fw-bold mb-2">Une terrasse ombragée en plein cœur du parc</h3>
                        <p class="mb-0 fs-5 text-dark">Installez-vous confortablement sur <strong>notre vaste terrasse ombragée située au cœur de la forêt</strong>. Profitez d'un cadre apaisant et naturel pour faire une pause et savourer une de nos nombreuses douceurs proposées au snack.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Producteurs Locaux -->
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mb-5 mt-3">
                    <span class="viking-label green">Circuit Court & Fait Maison</span>
                    <h3 class="fw-bold fs-2 mt-2">Fiers de nos partenaires normands</h3>
                    <p class="text-muted fs-5">Chez Viking Aventure, nous collaborons avec passion avec les acteurs de notre région pour vous offrir fraîcheur et qualité !</p>
                </div>
                
                <div class="row g-4 text-center justify-content-center">
                    <!-- Frites Mercier -->
                    <div class="col-md-3 col-6">
                        <div class="p-4 h-100 viking-card-light border-partner-mercier">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/frites-mercier.jpg" alt="Frites Mercier Logo" class="viking-partner-logo">
                            <h5 class="fw-bold fs-6 mb-1"><a href="https://www.frites-mercier.fr/" target="_blank" class="text-dark text-decoration-none">Frites Mercier</a></h5>
                            <p class="small text-muted mb-0">À 2km</p>
                        </div>
                    </div>

                    <!-- Brasserie Ragnar -->
                    <div class="col-md-3 col-6">
                        <div class="p-4 h-100 viking-card-light border-partner-ragnar">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ragnar.png" alt="Brasserie Ragnar Logo" class="viking-partner-logo">
                            <h5 class="fw-bold fs-6 mb-1"><a href="https://www.brasserieragnar.com/" target="_blank" class="text-dark text-decoration-none">Bière Ragnar en pression</a></h5>
                            <p class="small text-muted mb-0">À 50km - Fièrement viking !</p>
                        </div>
                    </div>

                    <!-- Ferme du Bois Louvet -->
                    <div class="col-md-3 col-6">
                        <div class="p-4 h-100 viking-card-light border-partner-louvet">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/glaces-bois-louvet.png" alt="Glace Bois Louvet Logo" class="viking-partner-logo">
                            <h5 class="fw-bold fs-6 mb-1"><a href="https://www.glaceduboislouvet.fr/" target="_blank" class="text-dark text-decoration-none">Ferme du Bois Louvet</a></h5>
                            <p class="small text-muted mb-0">À Lieurey</p>
                        </div>
                    </div>
                    
                    <!-- Poule aux oeufs d'Eure -->
                    <div class="col-md-3 col-6">
                        <div class="p-4 h-100 viking-card-light border-partner-poule">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/poule%20aux%20oeufs%20eure.jpg" alt="Poule aux Oeufs d'Eure" class="viking-partner-logo">
                            <h5 class="fw-bold fs-6 mb-1"><a href="https://www.facebook.com/p/La-poule-aux-oeufs-dEure-100070690185774/" target="_blank" class="text-dark text-decoration-none">La Poule aux Œufs d'Eure</a></h5>
                            <p class="small text-muted mb-0">À seulement 2km</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <hr class="my-5 opacity-25">

        <!-- Section Menu Snack -->
        <div class="text-center mb-5 mt-5">
            <span class="viking-label red">Qu'est-ce qu'on mange ?</span>
            <h2 class="display-5 fw-bold">Ce que le parc vous propose</h2>
            <p class="lead">Un large choix de produits pour combler les petites comme les grandes faims.</p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <!-- Boissons Fraîches & Chaudes -->
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card h-100 p-4">
                    <div class="card-header-viking mb-4">
                        <span class="viking-badge">Désaltérant</span>
                        <h3 class="mt-3">Boissons</h3>
                    </div>
                    
                    <ul class="features text-start">
                        <li class="d-flex justify-content-between mb-2"><span>Soft (33cl)</span> <strong>2.80€</strong></li>
                        <li class="d-flex justify-content-between mb-2"><span>Sirop à l'eau (25cl)</span> <strong>1.50€</strong></li>
                        <li class="d-flex justify-content-between mb-2"><span>Eau plate (50cl)</span> <strong>1.00€</strong></li>
                        <li class="d-flex justify-content-between mb-4"><span>Eau plate (150cl)</span> <strong>2.00€</strong></li>
                        
                        <li class="d-flex justify-content-between mb-2 text-warning"><span>Bière Ragnar en pression (33cl)</span> <strong>4.70€</strong></li>
                        <li class="d-flex justify-content-between mb-2 text-warning"><span>Bière Ragnar en pression (50cl)</span> <strong>7.00€</strong></li>
                        <li class="d-flex justify-content-between mb-4 text-warning"><span>Bière Desperados (33cl)</span> <strong>4.50€</strong></li>
                        
                        <li class="d-flex justify-content-between mb-2"><span>Café</span> <strong>1.50€</strong></li>
                        <li class="d-flex justify-content-between mb-2"><span>Thé</span> <strong>1.50€</strong></li>
                    </ul>
                </div>
            </div>

            <!-- Côté Salé & Menus -->
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card h-100 p-4">
                    <div class="card-header-viking mb-4">
                        <span class="viking-badge highlight">Pour les crocos</span>
                        <h3 class="mt-3">Salé & Menus</h3>
                    </div>
                    
                    <h5 class="fw-bold text-danger mt-2 mb-3 border-bottom pb-2">Le Salé</h5>
                    <ul class="features text-start mb-4">
                        <li class="d-flex justify-content-between mb-2 align-items-center"><span>Frites fraîches Mercier (150g)</span> <strong>3.50€</strong></li>
                        <li class="d-flex justify-content-between mb-2 align-items-center"><span>Chips (145g)</span> <strong>3.00€</strong></li>
                        <li class="d-flex justify-content-between mb-2 align-items-center"><span class="pe-2">Hot dog <br><small class="text-muted">(cheddar, oignon)</small></span> <strong>3.50€</strong></li>
                        <li class="d-flex justify-content-between mb-2 align-items-center"><span class="pe-2">La barquette du viking <br><small class="text-muted">(frites, poulet, cheddar)</small></span> <strong>7.00€</strong></li>
                    </ul>

                    <h5 class="fw-bold text-danger mt-2 mb-3 border-bottom pb-2">Les Menus</h5>
                    <ul class="features text-start">
                        <li class="mb-3">
                            <div class="d-flex justify-content-between"><strong>Menu OLAF (Enfant)</strong> <strong class="text-danger">8.00€</strong></div>
                            <small class="text-muted d-block lh-sm mt-1">1 sirop à l'eau + 1 saucisse/frites + 1 boule de glace ou pompote</small>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex justify-content-between"><strong>Menu BJORN</strong> <strong class="text-danger">9.50€</strong></div>
                            <small class="text-muted d-block lh-sm mt-1">1 boisson soft / bière 33cl (+1€) / bière 50cl (+1.5€) + 1 hot dog/frites</small>
                        </li>
                        <li class="mb-2">
                            <div class="d-flex justify-content-between"><strong>Menu OFEIGR</strong> <strong class="text-danger">11.50€</strong></div>
                            <small class="text-muted d-block lh-sm mt-1">1 boisson comme menu Bjorn + 1 hot dog/frites + 1 boule de glace ou une crêpe</small>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Le Sucré & Glaces -->
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card h-100 p-4">
                    <div class="card-header-viking mb-4">
                        <span class="viking-badge">Gourmandises</span>
                        <h3 class="mt-3">Sucré & Glaces</h3>
                    </div>

                    <h5 class="fw-bold text-danger mt-2 mb-3 border-bottom pb-2">Le Sucré</h5>
                    <ul class="features text-start mb-4">
                        <li class="d-flex justify-content-between mb-2 align-items-center"><span class="pe-2">Crêpe maison nature <br><small class="text-muted">(Œufs de "La poule aux oeufs d'eure")</small></span> <strong>3.00€</strong></li>
                        <li class="d-flex justify-content-between mb-2 align-items-center"><span class="pe-2">Crêpe maison garnie <br><small class="text-muted">(sucre, caramel, pâte à tartiner, confiture)</small></span> <strong>3.50€</strong></li>
                        <li class="d-flex justify-content-between mb-2 mt-2 align-items-center"><span>Pompote</span> <strong>1.50€</strong></li>
                    </ul>

                    <h5 class="fw-bold text-danger mt-2 mb-3 border-bottom pb-2">Glaces de la Ferme du Bois Louvet</h5>
                    <p class="small text-muted mb-3 lh-sm">Vanille, chocolat, noisettes, noix de coco, caramel beurre salé, yaourt, sorbet fruits de la passion</p>
                    <ul class="features text-start border-bottom pb-3 mb-3">
                        <li class="d-flex justify-content-between mb-2"><span>1 Boule</span> <strong>2.50€</strong></li>
                        <li class="d-flex justify-content-between mb-2"><span>2 Boules</span> <strong>4.00€</strong></li>
                        <li class="d-flex justify-content-between mb-2"><span>3 Boules</span> <strong>5.00€</strong></li>
                    </ul>

                    <h5 class="fw-bold text-dark mt-2 mb-3">Suppléments</h5>
                    <ul class="features text-start">
                        <li class="d-flex justify-content-between mb-2"><span>Chantilly</span> <strong>0.50€</strong></li>
                        <li class="d-flex justify-content-between mb-2"><span>Smarties</span> <strong>0.50€</strong></li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Infos de Pique-Nique -->
        <div class="row align-items-center justify-content-center text-center mt-5 pt-3">
            <div class="col-md-8">
                <div class="p-4 viking-card-light">
                    <i class="fa-solid fa-basket-shopping fa-3x text-secondary mb-3"></i>
                    <h4 class="fw-bold">Espace Pique-Nique</h4>
                    <p class="text-muted mb-0">Vous préférez ramener votre propre repas ? Aucun problème ! Le parc met également à disposition des aires de pique-nique amémagées. N'oubliez pas d'utiliser nos poubelles de tri sélectif pour préserver la forêt !</p>
                </div>
            </div>
        </div>

    </div>
</main>

<?php 
get_footer(); 
?>
