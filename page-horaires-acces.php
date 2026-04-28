<?php
/*
Template Name: Infos Pratiques
*/

get_header(); 
?>

<main class="tarifs-page">
    <div class="container py-5">
        
        <!-- En-tête de la page -->
        <div class="section-header text-center mb-5">
            <span class="viking-label">Préparez votre venue</span>
            <h1 class="display-4 fw-bold">Horaires & Accès</h1>
            <p class="lead">Retrouvez toutes les informations pratiques pour organiser votre aventure Viking !</p>
        </div>

        <!-- Section Horaires & Google Maps -->
        <div class="row g-5 justify-content-center">
            
            <!-- Bloc Horaires -->
            <div class="col-lg-6">
                <div class="pricing-card h-100 p-4 text-start">
                    <div class="card-header-viking mb-4 text-center">
                        <span class="viking-badge">Planifiez votre visite</span>
                        <h3 class="mt-3">Horaires d'Ouverture</h3>
                    </div>
                    
                    <div class="viking-alert-dark mb-4 text-center">
                        <i class="fa-solid fa-calendar-check me-2"></i>
                        Ouverture de la saison <strong>d'Avril à Novembre</strong>
                    </div>

                    <ul class="features text-start mb-4">
                        <li class="mb-3"><i class="fa-solid fa-calendar-check text-danger me-2"></i> <strong>Samedi, Dimanche & Fériés :</strong> 10h00 - 18h00</li>
                        <li class="mb-3"><i class="fa-solid fa-umbrella-beach text-danger me-2"></i> <strong>Juillet & Août (WE & Fériés) :</strong> 10h00 - 19h00</li>
                        <li class="mb-3"><i class="fa-solid fa-clock text-danger me-2"></i> <strong>Mercredi & Vacances (semaine) :</strong> 13h00 - 18h00</li>
                        <li class="mb-2"><i class="fa-solid fa-users text-danger me-2"></i> <strong>Groupes et Scolaires :</strong> Sur réservation tous les jours (matin inclus)</li>
                    </ul>
                    
                    <div class="mt-auto pt-3 border-top border-light">
                        <p class="text-muted small mb-0"><i class="fa-solid fa-circle-exclamation text-warning me-2"></i> La direction se réserve le droit de fermer le parc en cas de mauvaises conditions météorologiques (vents violents, gros orages).</p>
                    </div>
                </div>
            </div>

            <!-- Bloc Accès & Adresse -->
            <div class="col-lg-6">
                <div class="pricing-card h-100 p-4 text-start">
                    <div class="card-header-viking mb-4 text-center">
                        <span class="viking-badge highlight">Venez nous rejoindre</span>
                        <h3 class="mt-3">Se rendre au Parc</h3>
                    </div>
                    
                    <p class="lead mb-4 text-center"><i class="fa-solid fa-location-dot text-danger me-2"></i> <strong>Adresse :</strong> Bois de Fécamp, 27500 Aizier</p>

                    <!-- Intégration simple Google Maps -->
                    <div class="map-container mb-4" style="border-radius:15px; overflow:hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <iframe 
                            src="https://maps.google.com/maps?q=Viking%20Aventure,%20Bois%20de%20F%C3%A9camp,%2027500%20Aizier&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="250" 
                            frameborder="0" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <ul class="features text-start">
                        <li class="mb-2"><i class="fa-solid fa-car text-danger me-2"></i> <strong>En voiture :</strong> Parking privé gratuit et ombragé à disposition pour la clientèle.</li>
                        <li class="mb-2"><i class="fa-solid fa-map-signs text-danger me-2"></i> <strong>Accès facile :</strong> Accessible via Bourg-Achard (suivre Routot puis Bourneville).</li>
                    </ul>
                </div>
            </div>

        </div>

        <hr class="my-5 opacity-25"> 

        <!-- Carrousel des Plannings -->
        <section class="plannings-section mb-5">
            <div class="text-center mb-5">
                <span class="viking-label red">Nos Calendriers</span>
                <h2 class="display-5 fw-bold">Plannings Mensuels</h2>
                <p class="lead">Faites glisser pour découvrir nos horaires mois par mois.</p>
            </div>
            
            <div class="planning-carousel-wrapper">
                <div class="planning-carousel" id="planningCarousel">
                    <?php
                    $current_month = date('Y-m');
                    $planning_args = array(
                        'post_type' => 'planning',
                        'posts_per_page' => -1,
                        'meta_key' => '_planning_month',
                        'orderby' => 'meta_value',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => '_planning_month',
                                'value' => $current_month,
                                'compare' => '>=',
                                'type' => 'CHAR'
                            )
                        )
                    );
                    $planning_query = new WP_Query($planning_args);

                    if ($planning_query->have_posts()) :
                        while ($planning_query->have_posts()) : $planning_query->the_post(); 
                            $img_url = get_the_post_thumbnail_url(null, 'large');
                            if (!$img_url) continue;
                            ?>
                            <div class="planning-slide">
                                <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="planning-img">
                                <div class="planning-title"><?php the_title(); ?></div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <div class="w-100 text-center text-muted">
                            <p>Les plannings à venir seront affichés ici très bientôt.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <hr class="my-5 opacity-25"> 

        <!-- Section Conseils pour votre visite -->
        <section class="tips-section mb-5">
            <div class="text-center mb-5">
                <span class="viking-label red">Pour votre confort et sécurité</span>
                <h2 class="display-5 fw-bold">Conseils pour la visite</h2>
                <p class="lead">Quelques règles d'or pour profiter pleinement de votre activité.</p>
            </div>

            <div class="row align-items-center">
                <div class="col-12">
                    <div class="alert alert-warning d-flex align-items-center p-4 border-0" style="border-radius:15px; box-shadow: 0 5px 15px rgba(255,193,7,0.15);">
                        <i class="fa-solid fa-triangle-exclamation fa-3x me-4 text-warning"></i>
                        <div>
                            <h4 class="alert-heading fw-bold">Équipement Requis</h4>
                            <p class="mb-0">Prévoir une tenue de sport confortable et adaptée à la météo du jour. <strong>Les chaussures fermées (type baskets ou chaussures de rando) sont obligatoires.</strong> Les sandales, tongs ou crocs sont interdits pour l'accrobranche. Pensez également à attacher vos cheveux longs.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center mt-5">
                <div class="col-md-4 mb-4">
                    <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <i class="fa-solid fa-bottle-water fa-2x text-primary mb-3"></i>
                        <h5>Bouteille d'eau</h5>
                        <p class="text-muted small">Pensez à vous hydrater ! Nous vendons également des boissons sur place.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <i class="fa-solid fa-clipboard-user fa-2x text-success mb-3"></i>
                        <h5>Briefing Sécurité</h5>
                        <p class="text-muted small">Le matériel vous est fourni et notre équipe effectuera un briefing avec nos opérateurs et un parcours initiation à votre arrivée.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <i class="fa-solid fa-paw fa-2x text-secondary mb-3"></i>
                        <h5>Animaux de compagnie</h5>
                        <p class="text-muted small">Les chiens sont acceptés au sol à l'intérieur du parc, à condition d'être impérativement tenus en laisse.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php 
// Script pour le carousel interactif
add_action('wp_footer', function() {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector('.planning-carousel');
            if(!carousel) return;
            const slides = document.querySelectorAll('.planning-slide');
            
            if(slides.length === 0) return;

            function updateActiveSlide() {
                let carouselRect = carousel.getBoundingClientRect();
                let centerPoint = carouselRect.left + carouselRect.width / 2;
                let closestSlide = null;
                let minDiff = Infinity;

                slides.forEach(slide => {
                    let rect = slide.getBoundingClientRect();
                    let slideCenter = rect.left + rect.width / 2;
                    let diff = Math.abs(centerPoint - slideCenter);
                    if (diff < minDiff) {
                        minDiff = diff;
                        closestSlide = slide;
                    }
                });

                if (closestSlide && !closestSlide.classList.contains('active')) {
                    slides.forEach(s => s.classList.remove('active'));
                    closestSlide.classList.add('active');
                }
            }

            carousel.addEventListener('scroll', updateActiveSlide);
            window.addEventListener('resize', updateActiveSlide);
            
            // Permettre le clic pour scroller vers un slide (très utile sur PC sans trackpad)
            slides.forEach(slide => {
                slide.addEventListener('click', function() {
                    let rect = slide.getBoundingClientRect();
                    let carouselRect = carousel.getBoundingClientRect();
                    let slideCenter = rect.left + rect.width / 2;
                    let carouselCenter = carouselRect.left + carouselRect.width / 2;
                    
                    carousel.scrollBy({
                        left: slideCenter - carouselCenter,
                        behavior: 'smooth'
                    });
                });
                // Curseur pointer pour indiquer que c'est cliquable
                slide.style.cursor = 'pointer';
            });
            
            // Petite pause pour laisser le CSS et les images se charger avant de calculer le centre
            setTimeout(updateActiveSlide, 100);
        });
    </script>
    <?php
}, 100);

get_footer(); 
?>
