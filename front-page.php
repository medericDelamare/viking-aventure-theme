<?php get_header(); ?>

    <main class="page-home">

        <section class="hero-card-section">
            <div class="container">
                <div class="hero-main-card">
                    <div class="card-overlay">
                        <span class="badge-white">Nouveauté 2026</span>
                        <h1>L'aventure en famille, <br>grandeur nature.</h1>
                        <p>Découvrez nos 12 parcours au cœur de la forêt normande.</p>
                        <div class="hero-btns">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-reservation">NOUS CONTACTER</a>
                            <a href="#univers" class="btn-white-outline">VOIR LES PARCOURS</a>
                        </div>
                    </div>
                    <div class="card-image-bg"></div>
                </div>
            </div>
        </section>

        <section class="welcome-section">
            <div class="container">
                <div class="section-header welcome-content text-center mb-5">
                    <span class="viking-label d-inline-block mb-3">Bienvenue chez Viking Aventure</span>
                    <h2 class="display-4 fw-bold mb-4">L'accrobranche de référence en Normandie</h2>
                    <p class="lead">
                        Plongez au cœur de la forêt et faites le plein de sensations fortes dans un cadre naturel exceptionnel. Que vous soyez un explorateur en herbe ou un aventurier chevronné, venez partager un moment inoubliable en famille ou entre amis, en toute sécurité.
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION ACTUALITÉS (CAROUSEL) -->
        <section class="actus-section section-padding bg-light">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <span class="viking-label red d-inline-block mb-3">Quoi de neuf ?</span>
                    <h2 class="display-4 fw-bold mb-4">Dernières Actualités</h2>
                    <p class="lead">Restez informés des événements, nouveautés et promotions du parc.</p>
                </div>

                <div class="actus-carousel-wrapper">
                    <div class="actus-carousel">
                        <?php
                        $actus_args = array(
                            'post_type'      => 'actualite',
                            'posts_per_page' => 6,
                            'orderby'        => 'date',
                            'order'          => 'DESC'
                        );
                        $actus_query = new WP_Query($actus_args);

                        if ($actus_query->have_posts()) :
                            while ($actus_query->have_posts()) : $actus_query->the_post(); 
                                $bg_image = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url(null, 'large') : get_template_directory_uri() . '/assets/img/acccrobranche.JPG';
                                ?>
                                <div class="actu-card viking-card-light">
                                    <div class="actu-img" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
                                        <div class="actu-date"><?php echo get_the_date('d M Y'); ?></div>
                                    </div>
                                    <div class="actu-content p-4 d-flex flex-column" style="flex-grow: 1;">
                                        <h4 class="fw-bold mb-3"><?php the_title(); ?></h4>
                                        <p class="text-muted mb-4 flex-grow-1" style="font-size: 0.95rem;"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-danger fw-bold w-100 mt-auto">Lire la suite</a>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        else : ?>
                            <div class="text-center text-muted w-100 py-4">
                                <i class="fa-solid fa-newspaper fa-3x mb-3 text-secondary opacity-25"></i><br>
                                Aucune actualité pour le moment. Abonnez-vous à nos réseaux pour ne manquer aucune nouveauté !
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-bar">
            <div class="container">
                <div class="feature-item"><strong>12</strong> Parcours</div>
                <div class="feature-item"><strong>150</strong> Ateliers</div>
                <div class="feature-item"><strong>100%</strong> Sécurisé</div>
                <div class="feature-item"><strong>3h</strong> De plaisir</div>
            </div>
        </section>

        <section class="activities-section section-padding">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <span class="viking-label red d-inline-block mb-3">À ne pas manquer</span>
                    <h2 class="display-4 fw-bold mb-4">Toutes nos activités</h2>
                    <p class="lead">Faites glisser pour découvrir nos différentes aventures.</p>
                </div>

                <div class="activities-slider">
                    <!-- Carte 1: Accrobranche -->
                    <a href="/accrobranche" class="activity-card">
                        <div class="card-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/acccrobranche.JPG');"></div>
                        <div class="card-body">
                            <h3>Accrobranche</h3>
                            <p>Explorez nos 12 parcours en hauteur pour tous les niveaux. Enfilez votre baudrier et partez à l'aventure !</p>
                            <span class="btn-link">Découvrir <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>

                    <!-- Carte 2: Paintball -->
                    <a href="/paintball" class="activity-card">
                        <div class="card-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/paintball.JPG');"></div>
                        <div class="card-body">
                            <h3>Paintball</h3>
                            <p>Venez défier vos amis sur nos terrains aménagés. Stratégie, cohésion et adrénaline garanties !</p>
                            <span class="btn-link">Découvrir <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>


                </div>
            </div>
        </section>
        <section class="faq-section section-padding">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <span class="viking-label d-inline-block mb-3">Des questions ?</span>
                    <h2 class="display-4 fw-bold mb-4">Foire aux questions</h2>
                </div>

                <div class="faq-accordion viking-container-narrow mx-auto">
    <?php
    $featured_args = array(
        'post_type'  => 'faq',
        'posts_per_page' => 5, // Limite à 5 sur l'accueil par exemple
        'meta_query' => array(
            array(
                'key'   => '_faq_featured',
                'value' => '1',
            )
        )
    );

    $featured_faq = new WP_Query($featured_args);

    if ($featured_faq->have_posts()) :
        while ($featured_faq->have_posts()) : $featured_faq->the_post(); ?>
            
            <details class="faq-details">
                <summary class="faq-summary"><?php the_title(); ?></summary>
                <div class="faq-content">
                    <?php the_content(); ?>
                </div>
            </details>

        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p class="text-center">Consultez notre FAQ complète pour plus d'infos !</p>
    <?php endif; ?>
    
    <div class="text-center mt-4">
        <a href="<?php echo home_url('/faq'); ?>" class="btn btn-outline-danger">Voir toutes les questions</a>
    </div>
</div>
            </div>
        </section>
        <section class="agenda-section section-padding">
            <div class="container">
                <div class="section-header text-center mb-5">
                    <span class="viking-label d-inline-block mb-3">Planifiez votre visite</span>
                    <h2 class="display-4 fw-bold mb-4">Dates et Infos Pratiques</h2>
                </div>

                <div class="agenda-grid">
                    <div class="calendar-card">
                        <h3 class="viking-subtitle">Coup d'œil sur l'agenda</h3>
                        <div class="calendar-embed">
                            <?php echo do_shortcode('[wpsbc id="1" title="no" legend="no"]'); ?>
                        </div>

                        <div class="viking-legend">
                            <div class="legend-item">
                                <span class="dot full"></span>
                                <span class="label">10h - 18h</span>
                            </div>
                            <div class="legend-item">
                                <span class="dot half"></span>
                                <span class="label">13h - 18h</span>
                            </div>
                            <div class="legend-item">
                                <span class="dot closed"></span>
                                <span class="label">Fermé</span>
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <h3>Infos Pratiques</h3>
                        <p>Le parc est ouvert selon les conditions météo. Pensez à réserver vos places à l'avance !</p>
                        <ul class="viking-list">
                            <li><i class="fa-solid fa-check text-viking-green"></i> Accès libre aux parcours</li>
                            <li><i class="fa-solid fa-check text-viking-green"></i> Parking gratuit</li>
                            <li><i class="fa-solid fa-check text-viking-green"></i> Animaux admis en laisse</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <section class="reviews-section py-5 bg-light">
            <div class="container text-center">
                <h2 class="fw-bold mb-4">Ils ont survécu à l'aventure !</h2>
                <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>