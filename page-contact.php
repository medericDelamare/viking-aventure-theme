<?php
/*
Template Name: Contact
*/

get_header(); 
?>

<main class="tarifs-page">
    <div class="container py-5">
        
        <!-- En-tête de la page -->
        <div class="section-header text-center mb-5 pt-header">
            <span class="viking-label highlight mb-3">Besoin d'aide ?</span>
            <h1 class="display-3 fw-bold">Contactez-nous</h1>
            <p class="lead">L'équipe Viking Aventure répond à toutes vos questions pour préparer votre expédition.</p>
        </div>

        <div class="row g-5 mb-5 mt-4">
            
            <!-- Informations de Contact (Colonne Gauche) -->
            <div class="col-lg-5">
                <div class="pricing-card h-100 p-4 viking-card-feature">
                    <h3 class="fw-bold mb-4">Informations Pratiques</h3>
                    
                    <!-- Adresse -->
                    <div class="d-flex align-items-center justify-content-start mb-4 p-3 viking-tint-danger">
                        <div class="viking-icon-box-sm">
                            <i class="fa-solid fa-location-dot text-danger fa-xl"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Localisation du Parc</h6>
                            <p class="text-muted small mb-0">Bois de Fécamp<br>27500 Aizier, Normandie</p>
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class="d-flex align-items-center justify-content-start mb-4 p-3 viking-tint-success">
                        <div class="viking-icon-box-sm">
                            <i class="fa-solid fa-phone text-success fa-xl"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Téléphone</h6>
                            <p class="text-muted small mb-0">
                                <a href="tel:+33673045154" class="text-success fw-bold text-decoration-none" style="font-size: 1.1rem;">06 73 04 51 54</a>
                                <br>
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="d-flex align-items-center justify-content-start mb-4 p-3 viking-tint-primary">
                        <div class="viking-icon-box-sm">
                            <i class="fa-solid fa-envelope text-primary fa-xl"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">E-mail</h6>
                            <p class="text-muted small mb-0">
                                <a href="mailto:contact@viking-aventure.fr" class="text-primary fw-bold text-decoration-none" style="font-size: 1.1rem;">contact@viking-aventure.fr</a>
                            </p>
                        </div>
                    </div>



                    <hr class="my-4 opacity-25">

                    <!-- Rappel FAQ -->
                    <div class="p-4 text-center viking-card-dark border border-light border-opacity-10">
                        <i class="fa-solid fa-circle-question fa-2x text-warning mb-3"></i>
                        <h6 class="fw-bold text-white">Une question rapide ?</h6>
                        <p class="text-light small mb-3">La réponse se trouve probablement déjà dans notre section d'aide détaillée.</p>
                        <a href="<?php echo home_url('/faq'); ?>" class="btn btn-sm fw-bold text-dark w-100 bg-white rounded">
                            Consulter la FAQ
                        </a>
                    </div>

                </div>
            </div>

            <!-- Formulaire de Contact (Colonne Droite) -->
            <div class="col-lg-7">
                <div class="p-5 h-100 viking-card-premium-light">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-bold mb-0">Écrivez-nous</h3>
                        <i class="fa-solid fa-paper-plane fa-2x text-danger opacity-25"></i>
                    </div>
                    
                    <!-- 
                        NOTE POUR LE CLIENT WORDPRESS :
                        Si vous possédez un plugin de formulaire comme "Contact Form 7" ou "WPForms", 
                        vous pouvez remplacer entièrement la balise <form> ci-dessous par la ligne PHP suivante :
                        <?php echo do_shortcode('[votre_shortcode_formulaire]'); ?> 
                    -->

                
                    <div class="viking-contact-form-wrapper">
                        <?php echo do_shortcode('[wpforms id="75" title="false" description="false"]'); ?>
                    </div>
                    <!-- Fin du formulaire HTML pur -->

                </div>
            </div>

        </div>


    </div>
</main>

<?php get_footer(); ?>
