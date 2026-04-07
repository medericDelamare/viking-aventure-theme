<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
    <nav class="navbar h-100">
        <div class="nav-container w-100">

            <button class="menu-toggle" aria-label="Ouvrir le menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="nav-section left">
                <div class="desktop-only">
                    <ul class="nav-links">
                        <li class="menu-item-has-children">
                            <a href="#">Activités <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo home_url('/paintball'); ?>">Paintball</a></li>
                                <li><a href="<?php echo home_url('/accrobranche'); ?>">Accrobranche</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Groupes & Événements <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo home_url('/ecoles-centres-de-loisirs'); ?>">Écoles & Centres de loisirs</a></li>
                                <li><a href="<?php echo home_url('/entreprises-seminaires'); ?>">Entreprises & Séminaires</a></li>
                                <li><a href="<?php echo home_url('/enterrement-de-vie-evg-evjf'); ?>">EVG/EVJF</a></li>
                                <li><a href="<?php echo home_url('/anniversaires'); ?>">Anniversaire</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="logo-wrapper">
                <a href="<?php echo home_url(); ?>" class="logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Viking Aventure">
                </a>
            </div>

            <div class="nav-section right">
                <div class="desktop-only">
                    <ul class="nav-links">
                        <li><a href="<?php echo home_url('/tarifs'); ?>">Tarifs</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Infos pratiques <i class="fa-solid fa-chevron-down ms-1" style="font-size: 0.8em;"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo home_url('/restauration-snack'); ?>">Restauration / Snack</a></li>
                                <li><a href="<?php echo home_url('/horaires-acces'); ?>">Horaires & Accès</a></li>
                                <li><a href="<?php echo home_url('/faq'); ?>">FAQ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="social-icons">
                    <a href="https://www.facebook.com/vikingaventure" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/parcvikingaventure" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <div id="mobile-drawer">
                <button class="drawer-close" aria-label="Fermer le menu">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="drawer-body">
                    <ul class="nav-links">
                        <li class="menu-item-has-children">
                            <a href="#" class="mobile-sub-toggle">Activités <i class="fa-solid fa-chevron-down float-end mt-1"></i></a>
                            <ul class="sub-menu" style="display: none;">
                                <li><a href="<?php echo home_url('/paintball'); ?>">Paintball</a></li>
                                <li><a href="<?php echo home_url('/accrobranche'); ?>">Accrobranche</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" class="mobile-sub-toggle">Groupes & Événements <i class="fa-solid fa-chevron-down float-end mt-1"></i></a>
                            <ul class="sub-menu" style="display: none;">
                                <li><a href="<?php echo home_url('/ecoles-centres-de-loisirs'); ?>">Écoles & Centres de loisirs</a></li>
                                <li><a href="<?php echo home_url('/entreprises-seminaires'); ?>">Entreprises & Séminaires</a></li>
                                <li><a href="<?php echo home_url('/enterrement-de-vie-evg-evjf'); ?>">EVG/EVJF</a></li>
                                <li><a href="<?php echo home_url('/anniversaires'); ?>">Anniversaire</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo home_url('/tarifs'); ?>">Tarifs</a></li>
                        <li class="menu-item-has-children">
                            <a href="#" class="mobile-sub-toggle">Infos pratiques <i class="fa-solid fa-chevron-down float-end mt-1"></i></a>
                            <ul class="sub-menu" style="display: none;">
                                <li><a href="<?php echo home_url('/restauration-snack'); ?>">Restauration / Snack</a></li>
                                <li><a href="<?php echo home_url('/horaires-acces'); ?>">Horaires & Accès</a></li>
                                <li><a href="<?php echo home_url('/faq'); ?>">FAQ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <div class="drawer-footer-mobile text-center">
                    <span class="viking-label red small mb-3 d-inline-block mx-auto">Suivez-nous</span>
                    <div class="social-icons justify-content-center m-0">
                        <a href="https://www.facebook.com/vikingaventure" target="_blank" aria-label="Facebook Viking Aventure"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/parcvikingaventure" target="_blank" aria-label="Instagram Viking Aventure"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>