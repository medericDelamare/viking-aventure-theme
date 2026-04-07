<?php
/*
Template Name: Page Tarifs Viking
*/

get_header(); 
?>

<main class="tarifs-page">
    <div class="container py-5">
        <div class="section-header mb-5">
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-start">
                    <span class="viking-label">L'aventure sur mesure</span>
                    <h1 class="display-4 fw-bold">Tarifs & Parcours</h1>
                    <p class="lead">Choisissez votre défi en fonction de votre taille. Équipement et briefing inclus.</p>
                </div>
            </div>
        </div>

        <section class="pricing-grid row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="pricing-card h-100">
                    <div class="card-header-viking">
                        <span class="viking-badge">90cm à 110cm</span>
                        <h3>Pack Pitchoun</h3>
                    </div>
                    <div class="price">8<span>€</span></div>
                    <p class="limit-info">Accès illimité</p>
                    <ul class="features">
                        <li><i class="fa-solid fa-child"></i> Parcours Enfants</li>
                        <li><i class="fa-solid fa-arrows-left-right"></i> Entre 2 et 7 ans</li>
                        <li><i class="fa-solid fa-user-shield"></i> Ligne de vie continue</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="pricing-card h-100">
                    <div class="card-header-viking">
                        <span class="viking-badge">Taille > 110cm</span>
                        <h3>Pack Découverte</h3>
                    </div>
                    <div class="price">13<span>€</span></div>
                    <p class="limit-info">Accès illimité</p>
                    <ul class="features">
                        <li><i class="fa-solid fa-plus"></i> Parcours Enfants</li>
                        <li><i class="fa-solid fa-check"></i> <strong>+ Parcours 1 & 2</strong></li>
                        <li><i class="fa-solid fa-leaf"></i> Niveau Facile</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 position-relative">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mascotte-tarifs.png"
                     class="mascot-overlap"
                     alt="Mascotte Viking">
                <div class="pricing-card featured h-100">
                    <div class="card-header-viking">
                        <span class="viking-badge highlight">Taille > 125cm</span>
                        <h3>Pack Exploration</h3>
                    </div>
                    <div class="price">19<span>€</span></div>
                    <p class="limit-info">Accès illimité</p>
                    <ul class="features">
                        <li><i class="fa-solid fa-plus"></i> Packs précédents</li>
                        <li><i class="fa-solid fa-check"></i> <strong>+ Parcours 3 & 4</strong></li>
                        <li><i class="fa-solid fa-bolt"></i> Niveau Moyen</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="pricing-card h-100">
                    <div class="card-header-viking">
                        <span class="viking-badge">Taille > 140cm</span>
                        <h3>Pack Total</h3>
                    </div>
                    <div class="price">25<span>€</span></div>
                    <p class="limit-info">Accès illimité</p>
                    <ul class="features">
                        <li><i class="fa-solid fa-plus"></i> Tous les parcours</li>
                        <li><i class="fa-solid fa-skull-crossbones"></i> <strong>+ Parcours Noirs</strong></li>
                        <li><i class="fa-solid fa-mountain"></i> Adrénaline Max</li>
                    </ul>
                </div>
            </div>

        </section>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="alert alert-warning d-inline-block">
                    <i class="fa-solid fa-ruler-vertical me-2"></i>
                    <strong>Mesure sur place :</strong> La taille est vérifiée à l'accueil pour garantir la sécurité sur les ateliers.
                </div>
            </div>
        </div>

    </div>
    <hr class="my-5 opacity-25">
    <section class="special-offer-section my-5">
        <div class="container">
            <div class="combo-card">
                <div class="promo-badge">-7<span>€</span></div>

                <div class="row align-items-center">
                    <div class="col-lg-7 p-4 p-md-5">
                        <span class="viking-label highlight mb-2">Offre de Saison</span>
                        <h2 class="display-5 fw-bold text-white">Le Pack "Grand Jarl"</h2>
                        <p class="lead text-white-50">L'expérience Viking ultime pour les guerriers qui n'ont peur de rien.</p>

                        <ul class="features-horizontal">
                            <li><i class="fa-solid fa-check-circle"></i> Accrobranche Illimité (Tous parcours)</li>
                            <li><i class="fa-solid fa-plus"></i></li>
                            <li><i class="fa-solid fa-crosshairs"></i> 1 Partie de Paintball (200 billes)</li>
                        </ul>
                    </div>

                    <div class="col-lg-5 text-center p-4 bg-white-transparent">
                        <div class="old-price">52€</div>
                        <div class="new-price">45<span>€</span></div>
                        <p class="text-white small mb-4">Équipement complet inclus</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-5 opacity-25"> <section class="paintball-section py-5">
    <div class="text-center mb-5">
        <span class="viking-label red">Adrénaline & Tactique</span>
        <h2 class="display-5 fw-bold">Tarifs Paintball</h2>
        <p class="lead">Matériel complet fourni. Prévoir un créneau de 2h.</p>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-md-5">
            <div class="pricing-card featured h-100">
                <div class="card-header-viking">
                    <span class="viking-badge highlight">Équipement Complet</span>
                    <h3>Forfait de Base</h3>
                </div>
                <div class="price">27<span>€</span></div>
                <p class="limit-info">Par personne</p>
                <ul class="features">
                    <li><i class="fa-solid fa-gun"></i> Lanceur haute précision</li>
                    <li><i class="fa-solid fa-vest"></i> Combinaison & Masque</li>
                    <li><i class="fa-solid fa-circle"></i> <strong>200 billes incluses</strong></li>
                    <li><i class="fa-solid fa-clock"></i> Session de 2 heures</li>
                </ul>
            </div>
        </div>

        <div class="col-md-5">
            <div class="pricing-card h-100">
                <div class="card-header-viking">
                    <span class="viking-badge">Plus de munitions</span>
                    <h3>Suppléments</h3>
                </div>
                <div class="price">23<span>€</span></div>
                <p class="limit-info">Recharge collective</p>
                <ul class="features">
                    <li><i class="fa-solid fa-box-open"></i> Sachet de 500 billes</li>
                    <li><i class="fa-solid fa-share-nodes"></i> À partager entre amis</li>
                    <li><i class="fa-solid fa-layer-group"></i> Idéal pour prolonger le jeu</li>
                </ul>
                <div class="viking-alert-dark mt-auto">
                    <i class="fa-solid fa-tag me-2"></i>
                    <strong>Offre Cartouche :</strong> 69€ le carton de 2000 billes (Particuliers).
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php 
get_footer(); 
?>