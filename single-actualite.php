<?php
/*
Template Name: Modèle Actualité
Template Post Type: actualite
*/

get_header(); 
?>

<main class="single-actu-page" style="padding-top: 180px; padding-bottom: 80px; background-color: #fdfcfa;">
    <?php while (have_posts()) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        
                        <!-- En-tête de l'article -->
                        <div class="actu-header text-center mb-5">
                            <span class="viking-label red mb-3 d-inline-block">Publié le <?php echo get_the_date('d F Y'); ?></span>
                            <h1 class="display-3 fw-bold mb-4"><?php the_title(); ?></h1>
                            <?php if (has_excerpt()) : ?>
                                <p class="lead text-muted mx-auto" style="max-width: 800px;"><?php echo get_the_excerpt(); ?></p>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Image mise en avant -->
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="actu-featured-image mb-5" style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.1);">
                                <?php the_post_thumbnail('full', array(
                                    'class' => 'img-fluid w-100',
                                    'style' => 'max-height: 550px; object-fit: cover;'
                                )); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Contenu principal -->
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="actu-content pt-3" style="font-size: 1.15rem; line-height: 1.8; color: #444;">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>

                        <hr class="my-5 opacity-25">

                        <!-- Bouton Retour -->
                        <div class="text-center">
                            <a href="<?php echo home_url('/'); ?>#accueil-actus" class="btn btn-outline-danger px-4 py-2 fw-bold" style="border-radius: 12px;">
                                <i class="fa-solid fa-arrow-left me-2"></i> Retour à l'accueil
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>

        </article>
        
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
