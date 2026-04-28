<?php
/*
Template Name: Foire Aux Questions (FAQ)
*/

get_header(); 
?>
<main class="tarifs-page">
    <div class="container py-5">
        
        <!-- En-tête de la page -->
        <div class="section-header text-center mb-5">
            <span class="viking-label">Une question ?</span>
            <h1 class="display-4 fw-bold">Foire Aux Questions</h1>
            <p class="lead">Toutes les réponses indispensables pour préparer votre aventure sans tracas !</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
    <?php
    // Configuration de la requête pour récupérer les FAQ
    $args = array(
        'post_type'      => 'faq',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'ASC',
    );

    $faq_query = new WP_Query($args);

    if ($faq_query->have_posts()) :
        while ($faq_query->have_posts()) : $faq_query->the_post(); ?>
            
            <details class="faq-details">
                <summary class="faq-summary"><?php the_title(); ?></summary>
                <div class="faq-content">
                    <?php the_content(); ?>
                </div>
            </details>

        <?php endwhile;
        wp_reset_postdata(); // Important pour ne pas casser le reste de la page
    else : ?>
        <p class="text-center">Aucune question n'a été trouvée pour le moment.</p>
    <?php endif; ?>
</div>
        </div>

        <!-- Call to Action -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="p-4 viking-cta-box">
                    <h4 class="fw-bold mb-3">Vous ne trouvez pas votre réponse ?</h4>
                    <p class="text-muted mb-4">Notre équipe est à votre entière disposition pour répondre à toutes vos questions.</p>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-reservation px-4 py-2">
                        <i class="fa-solid fa-envelope me-2"></i> Nous contacter
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>

<?php 
get_footer(); 
?>
