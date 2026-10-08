<?php
function viking_aventure_setup() {
    register_nav_menus( array(
        'menu-principal' => 'Menu Principal',
    ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'viking_aventure_setup' );

function viking_aventure_enqueue_styles() {
    $uri = get_template_directory_uri();
    $dir = get_template_directory();

    // Version = date de modification du fichier : le navigateur le garde en cache tant qu'il ne change pas
    $styles = array('variables', 'components', 'header', 'contact', 'hero', 'layout', 'faq', 'tarifs', 'accrobranche', 'rgpd', 'actus');
    foreach ($styles as $name) {
        wp_enqueue_style('viking-' . $name, $uri . '/css/' . $name . '.css', array(), filemtime($dir . '/css/' . $name . '.css'));
    }
    wp_enqueue_style('viking-main', get_stylesheet_uri(), array(), filemtime($dir . '/style.css'));

    wp_enqueue_script('viking-rgpd-js', $uri . '/js/rgpd.js', array(), filemtime($dir . '/js/rgpd.js'), true);
}
add_action('wp_enqueue_scripts', 'viking_aventure_enqueue_styles');

function viking_calendar_force_style() {
    ?>
    <style id="viking-force-css" type="text/css">
        /* On cible avec le chemin complet pour écraser le plugin */
        html body .wpsbc-container .wpsbc-calendar .wpsbc-status-free,
        html body .wpsbc-container .wpsbc-calendar .wpsbc-legend .wpsbc-legend-item-free span {
            background-color: #2ecc71 !important;
            background: #2ecc71 !important;
            color: white !important;
        }

        html body .wpsbc-container .wpsbc-calendar .wpsbc-status-booked,
        html body .wpsbc-container .wpsbc-calendar .wpsbc-legend .wpsbc-legend-item-booked span {
            background-color: #e67e22 !important;
            background: #e67e22 !important;
            color: white !important;
        }
    </style>
    <?php
}
add_action('wp_head', 'viking_calendar_force_style', 999);

function viking_register_menus() {
    register_nav_menus( array(
        'header-left'  => 'Header Gauche',
        'header-right' => 'Header Droite',
        'mobile-menu'  => 'Menu Mobile Complet'
    ) );
}
add_action( 'init', 'viking_register_menus' );

function viking_register_faq_cpt() {
    $labels = array(
        'name'               => 'FAQ',
        'singular_name'      => 'Question',
        'menu_name'          => 'FAQ',
        'add_new'            => 'Ajouter une question',
        'add_new_item'       => 'Ajouter une nouvelle question',
        'edit_item'          => 'Modifier la question',
        'all_items'          => 'Toutes les questions',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'menu_icon'          => 'dashicons-editor-help', // Icône point d'interrogation
        'supports'           => array('title', 'editor'), // Titre = Question, Éditeur = Réponse
        'rewrite'            => array('slug' => 'faq'),
    );

    register_post_type('faq', $args);
}
add_action('init', 'viking_register_faq_cpt');

function viking_register_actu_cpt() {
    $labels = array(
        'name'               => 'Actualités',
        'singular_name'      => 'Actualité',
        'menu_name'          => 'Actualités',
        'add_new'            => 'Ajouter une actu',
        'add_new_item'       => 'Ajouter une nouvelle actualité',
        'edit_item'          => 'Modifier l\'actualité',
        'all_items'          => 'Toutes les actus',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-megaphone',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'            => array('slug' => 'actualites'),
        'show_in_rest'       => true,
    );

    register_post_type('actualite', $args);
}
add_action('init', 'viking_register_actu_cpt');

// Ajouter la boîte d'option (Meta Box) pour la FAQ
function viking_add_faq_meta_box() {
    add_meta_box('faq_featured', 'Options de mise en avant', 'viking_faq_meta_callback', 'faq', 'side');
}
add_action('add_meta_boxes', 'viking_add_faq_meta_box');

// Affichage de la checkbox
function viking_faq_meta_callback($post) {
    $value = get_post_meta($post->ID, '_faq_featured', true);
    echo '<label><input type="checkbox" name="faq_featured_checkbox" value="1" ' . checked($value, 1, false) . '> Afficher sur la page d\'accueil</label>';
}

// Sauvegarde de la donnée
function viking_save_faq_meta($post_id) {
    if (isset($_POST['faq_featured_checkbox'])) {
        update_post_meta($post_id, '_faq_featured', 1);
    } else {
        delete_post_meta($post_id, '_faq_featured');
    }
}
add_action('save_post', 'viking_save_faq_meta');

// --- Custom SEO Engine (Zéro Plugin) ---

// Fermeture hivernale en cours (premier et dernier jour fermés inclus) : à mettre à jour chaque année
define('VIKING_CLOSED_FROM', '2026-10-08');
define('VIKING_CLOSED_THROUGH', '2027-03-26');

// Titre et description propres à chaque page (clé = slug de la page, 'home' = accueil)
function viking_seo_pages() {
    return array(
        'home' => array(
            'title' => "Viking Aventure : accrobranche et paintball à Aizier (Eure, Normandie)",
            'desc'  => "Parc accrobranche et paintball en forêt à Aizier (Eure, Normandie) : 12 parcours, 130 ateliers, dès 2 ans. Ligne de vie continue sur tout le parc.",
        ),
        'accrobranche' => array(
            'title' => "Accrobranche à Aizier (Eure) : 12 parcours dès 2 ans",
            'desc'  => "12 parcours d'accrobranche en forêt à Aizier (Eure) : dès 2-3 ans (90 cm), parcours familiaux, parcours rouges et noir. Ligne de vie continue sur tout le parc.",
        ),
        'paintball' => array(
            'title' => "Paintball en forêt à Aizier (Eure, Normandie)",
            'desc'  => "Paintball sur terrains boisés à Aizier (Eure) : 2 heures de jeu, 200 billes par personne, équipement fourni. À partir de 12 ans, en groupe sur réservation.",
        ),
        'tarifs' => array(
            'title' => "Tarifs accrobranche et paintball",
            'desc'  => "Tarifs accrobranche Viking Aventure : de 8 € à 25 € selon la taille, accès illimité aux parcours, équipement et briefing inclus. Pass annuel disponible.",
        ),
        'horaires-acces' => array(
            'title' => "Horaires d'ouverture et accès au parc",
            'desc'  => "Horaires d'ouverture, plannings mensuels et accès au parc Viking Aventure : Bois de Fécamp, 27500 Aizier (Eure). Parking privé gratuit et ombragé.",
        ),
        'anniversaires' => array(
            'title' => "Anniversaire accrobranche à Aizier (Eure)",
            'desc'  => "Anniversaire accrobranche à Aizier (Eure) : table de goûter réservée en forêt, parcours dès 90 cm, entrée offerte à l'enfant fêté dès 6 enfants payants.",
        ),
        'enterrement-de-vie-evg-evjf' => array(
            'title' => "EVG / EVJF en Normandie : accrobranche et paintball",
            'desc'  => "EVG ou EVJF en Normandie : accrobranche et paintball à Aizier (Eure). Entrée accrobranche offerte au futur marié ou à la future mariée dès 6 entrées payantes.",
        ),
        'ecoles-centres-de-loisirs' => array(
            'title' => "Sorties scolaires et centres de loisirs à l'accrobranche",
            'desc'  => "Sorties scolaires et centres de loisirs à l'accrobranche : parcours dès 90 cm, ligne de vie continue, parking bus, aires de pique-nique. Tarifs sur devis.",
        ),
        'entreprises-seminaires' => array(
            'title' => "Team building, séminaires et CSE en forêt",
            'desc'  => "Team building, séminaire ou sortie CSE à Aizier (Eure) : accrobranche, privatisation du parc, terrasse ombragée et restauration. Formules sur mesure.",
        ),
        'restauration-snack' => array(
            'title' => "Snack et terrasse ombragée au cœur du parc",
            'desc'  => "Snack et terrasse ombragée au cœur du parc : frites fraîches, hot dogs, menus enfant, bière Ragnar en pression et produits de partenaires normands.",
        ),
        'faq' => array(
            'title' => "Questions fréquentes sur le parc",
            'desc'  => "Les réponses aux questions fréquentes pour préparer votre visite au parc accrobranche et paintball Viking Aventure, à Aizier (Eure).",
        ),
        'contact' => array(
            'title' => "Contact et réservation",
            'desc'  => "Contactez Viking Aventure au 06 73 04 51 54 ou à contact@viking-aventure.fr. Parc accrobranche et paintball, Bois de Fécamp, 27500 Aizier (Eure).",
        ),
    );
}

// Renvoie le titre/description SEO de la page affichée, ou null si elle n'est pas dans la liste
function viking_seo_current() {
    if (is_front_page()) {
        $key = 'home';
    } elseif (is_page()) {
        $key = get_post_field('post_name', get_queried_object_id());
    } else {
        return null;
    }

    $pages = viking_seo_pages();
    return isset($pages[$key]) ? $pages[$key] : null;
}

// Balise <title> : "Titre SEO – Viking Aventure" (titre seul sur l'accueil)
function viking_seo_title_parts($parts) {
    $seo = viking_seo_current();
    if ($seo) {
        $parts['title'] = $seo['title'];
        if (is_front_page()) {
            unset($parts['tagline'], $parts['site']);
        }
    }
    return $parts;
}
add_filter('document_title_parts', 'viking_seo_title_parts');

function viking_seo_meta_tags() {
    global $post;

    // Définir la description par défaut
    $default_desc = "Parc d'accrobranche, paintball et activités en plein air en Normandie. Venez vivre l'expérience Viking Aventure en famille ou entre amis !";
    $desc = $default_desc;
    $seo = viking_seo_current();

    // Récupération dynamique
    if ($seo) {
        $desc = $seo['desc'];
    } elseif (is_singular()) {
        if (has_excerpt($post->ID)) {
            $desc = wp_strip_all_tags(get_the_excerpt($post->ID));
        } else {
            $content = $post->post_content;
            $content = strip_shortcodes($content);
            $content = wp_strip_all_tags($content);
            if (!empty(trim($content))) {
                $desc = wp_trim_words($content, 25, '...');
            }
        }
    }

    $desc = esc_attr(trim($desc));
    if ($seo) {
        $title = $seo['title'];
    } else {
        $title = is_singular() ? get_the_title() : get_bloginfo('name') . ' - ' . get_bloginfo('description');
    }

    // Photo du parc par défaut (le logo seul rend mal dans les aperçus de partage)
    $img = get_template_directory_uri() . '/assets/img/home.jpeg';
    if (is_singular() && has_post_thumbnail()) {
        $img = get_the_post_thumbnail_url(null, 'large');
    }
    $url = is_singular() ? get_permalink() : home_url('/');

    // Injection dans le <head>
    echo "\n<!-- SEO by Viking Custom Engine -->\n";
    echo '<meta name="description" content="' . $desc . '" />' . "\n";
    // WordPress ajoute déjà le canonical sur les pages et articles, pas sur un accueil "derniers articles"
    if (is_front_page() && !is_singular()) {
        echo '<link rel="canonical" href="' . esc_url(home_url('/')) . '" />' . "\n";
    }
    echo '<meta property="og:locale" content="fr_FR" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '" />' . "\n";
    echo '<meta property="og:description" content="' . $desc . '" />' . "\n";
    echo '<meta property="og:type" content="website" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '" />' . "\n";
    echo '<meta property="og:image" content="' . esc_url($img) . '" />' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo "<!-- /SEO -->\n";
}
add_action('wp_head', 'viking_seo_meta_tags', 1);

// --- Données structurées schema.org (JSON-LD) ---

// Fiche du parc, reprise sur toutes les pages
function viking_schema_business() {
    $img_uri = get_template_directory_uri() . '/assets/img';

    $hours = array(
        array(
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => array('Saturday', 'Sunday'),
            'opens'     => '10:00',
            'closes'    => '18:00',
        ),
        array(
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Wednesday',
            'opens'     => '13:00',
            'closes'    => '18:00',
        ),
    );

    // Tant que la fermeture hivernale n'est pas passée, on la déclare (00:00 - 00:00 = fermé)
    if (wp_date('Y-m-d') <= VIKING_CLOSED_THROUGH) {
        $hours[] = array(
            '@type'        => 'OpeningHoursSpecification',
            'dayOfWeek'    => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'),
            'opens'        => '00:00',
            'closes'       => '00:00',
            'validFrom'    => VIKING_CLOSED_FROM,
            'validThrough' => VIKING_CLOSED_THROUGH,
        );
    }

    return array(
        '@type'       => array('AmusementPark', 'SportsActivityLocation'),
        '@id'         => home_url('/#parc'),
        'name'        => 'Viking Aventure',
        'description' => "Parc accrobranche et paintball en forêt à Aizier (Eure, Normandie) : 12 parcours et 130 ateliers, accessibles dès 2 ans (90 cm), équipés en ligne de vie continue.",
        'url'         => home_url('/'),
        'image'       => $img_uri . '/home.jpeg',
        'logo'        => $img_uri . '/logo.png',
        'telephone'   => '+33673045154',
        'email'       => 'contact@viking-aventure.fr',
        'priceRange'  => '8 € - 25 €',
        'address'     => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Bois de Fécamp',
            'postalCode'      => '27500',
            'addressLocality' => 'Aizier',
            'addressRegion'   => 'Normandie',
            'addressCountry'  => 'FR',
        ),
        'geo'         => array(
            '@type'     => 'GeoCoordinates',
            'latitude'  => 49.43,
            'longitude' => 0.626667,
        ),
        'hasMap'      => 'https://www.google.com/maps/search/?api=1&query=Viking+Aventure+Aizier',
        'sameAs'      => array(
            'https://www.facebook.com/vikingaventure',
            'https://www.instagram.com/parcvikingaventure',
        ),
        'amenityFeature' => array(
            array('@type' => 'LocationFeatureSpecification', 'name' => 'Parking privé gratuit', 'value' => true),
            array('@type' => 'LocationFeatureSpecification', 'name' => 'Snack et terrasse ombragée', 'value' => true),
            array('@type' => 'LocationFeatureSpecification', 'name' => 'Aires de pique-nique', 'value' => true),
            array('@type' => 'LocationFeatureSpecification', 'name' => 'Chiens acceptés en laisse', 'value' => true),
        ),
        'openingHoursSpecification' => $hours,
    );
}

// Formules accrobranche : à garder identiques aux prix affichés dans page-tarifs.php
function viking_schema_offers() {
    $formules = array(
        array('Village Viking (de 90 cm à 110 cm)', '8'),
        array('Formule facile (taille supérieure à 110 cm)', '15'),
        array('Formule moyenne (taille supérieure à 125 cm)', '20'),
        array('Formule difficile (taille supérieure à 150 cm)', '25'),
    );

    $offers = array();
    foreach ($formules as $formule) {
        $offers[] = array(
            '@type'         => 'Offer',
            'name'          => $formule[0],
            'description'   => 'Accès illimité aux parcours de la formule, équipement et briefing inclus.',
            'price'         => $formule[1],
            'priceCurrency' => 'EUR',
        );
    }

    return array(
        '@type'           => 'OfferCatalog',
        'name'            => 'Tarifs accrobranche',
        'itemListElement' => $offers,
    );
}

// Questions/réponses de la FAQ (contenus saisis dans l'admin)
function viking_schema_faq() {
    $questions = array();
    $faqs = get_posts(array(
        'post_type'      => 'faq',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'ASC',
    ));

    foreach ($faqs as $faq) {
        $answer = trim(wp_strip_all_tags(strip_shortcodes($faq->post_content)));
        if ($answer === '') {
            continue;
        }
        $questions[] = array(
            '@type'          => 'Question',
            'name'           => get_the_title($faq),
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => $answer),
        );
    }

    if (empty($questions)) {
        return null;
    }

    return array(
        '@type'      => 'FAQPage',
        '@id'        => get_permalink() . '#faq',
        'mainEntity' => $questions,
    );
}

function viking_schema_json_ld() {
    $business = viking_schema_business();
    if (is_page('tarifs') || is_page_template('page-tarifs.php')) {
        $business['hasOfferCatalog'] = viking_schema_offers();
    }

    $graph = array($business);

    if (is_front_page()) {
        $graph[] = array(
            '@type'      => 'WebSite',
            '@id'        => home_url('/#site'),
            'name'       => 'Viking Aventure',
            'url'        => home_url('/'),
            'inLanguage' => 'fr-FR',
            'publisher'  => array('@id' => home_url('/#parc')),
        );
    }

    if (is_page('faq') || is_page_template('page-faq.php')) {
        $faq = viking_schema_faq();
        if ($faq) {
            $graph[] = $faq;
        }
    }

    $data = array('@context' => 'https://schema.org', '@graph' => $graph);
    echo '<script type="application/ld+json">' . wp_json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'viking_schema_json_ld', 2);

// --- Custom Post Type: Planning ---
function viking_register_planning_cpt() {
    $labels = array(
        'name'               => 'Plannings',
        'singular_name'      => 'Planning',
        'menu_name'          => 'Plannings',
        'add_new'            => 'Ajouter',
        'add_new_item'       => 'Ajouter un planning',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'menu_icon'          => 'dashicons-calendar-alt',
        'supports'           => array('title', 'thumbnail'),
    );
    register_post_type('planning', $args);
}
add_action('init', 'viking_register_planning_cpt');

function viking_add_planning_meta_box() {
    add_meta_box('planning_month_meta', 'Période du planning (Année - Mois)', 'viking_planning_meta_callback', 'planning', 'normal', 'high');
}
add_action('add_meta_boxes', 'viking_add_planning_meta_box');

function viking_planning_meta_callback($post) {
    wp_nonce_field('viking_save_planning_data', 'viking_planning_meta_nonce');
    $value = get_post_meta($post->ID, '_planning_month', true);
    if (!$value) {
        $value = date('Y-m');
    }
    echo '<label for="planning_month_field">Sélectionnez le mois concerné par l\'image : </label><br><br>';
    echo '<input type="month" id="planning_month_field" name="planning_month_field" value="' . esc_attr($value) . '" style="padding:5px;">';
    echo '<p class="description" style="margin-top:10px;">Dès que ce mois sera terminé, l\'image ne s\'affichera plus sur le site.</p>';
}

// Sauvegarde de la donnée
function viking_save_planning_meta($post_id) {
    if (!isset($_POST['viking_planning_meta_nonce'])) return;
    if (!wp_verify_nonce($_POST['viking_planning_meta_nonce'], 'viking_save_planning_data')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    
    if (isset($_POST['planning_month_field'])) {
        update_post_meta($post_id, '_planning_month', sanitize_text_field($_POST['planning_month_field']));
    }
}
add_action('save_post', 'viking_save_planning_meta');

// --- ACF Fields for Pages (Paintball & Anniversaire) ---
add_action('acf/init', 'viking_register_custom_acf');
function viking_register_custom_acf() {
    if( function_exists('acf_add_local_field_group') ):
        
        // Carousel Paintball
        acf_add_local_field_group(array(
            'key' => 'group_paintball_carousel',
            'title' => 'Carousel de la page Paintball',
            'fields' => array(
                array(
                    'key' => 'field_photo_carousel_1',
                    'label' => 'Photo 1',
                    'name' => 'photo_carousel_1',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => 'field_photo_carousel_2',
                    'label' => 'Photo 2',
                    'name' => 'photo_carousel_2',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => 'field_photo_carousel_3',
                    'label' => 'Photo 3',
                    'name' => 'photo_carousel_3',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => 'field_photo_carousel_4',
                    'label' => 'Photo 4',
                    'name' => 'photo_carousel_4',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => 'field_photo_carousel_5',
                    'label' => 'Photo 5',
                    'name' => 'photo_carousel_5',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-paintball.php',
                    ),
                ),
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => '28',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => 'Ajoutez jusqu\'à 5 photos pour le carousel de la page Paintball',
        ));

        // PDF Anniversaires
        acf_add_local_field_group(array(
            'key' => 'group_anniversaire_docs',
            'title' => 'Documents à télécharger (Anniversaire)',
            'fields' => array(
                array(
                    'key' => 'field_formulaire_resa',
                    'label' => 'Formulaire de réservation',
                    'name' => 'formulaire_reservation',
                    'type' => 'file',
                    'return_format' => 'url',
                    'instructions' => 'Uploadez le PDF du formulaire de réservation',
                ),
                array(
                    'key' => 'field_cartons_invit',
                    'label' => 'Cartons d\'invitation',
                    'name' => 'cartons_invitation',
                    'type' => 'file',
                    'return_format' => 'url',
                    'instructions' => 'Uploadez le PDF des cartons d\'invitation à imprimer',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-anniversaires.php',
                    ),
                ),
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => '36',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'active' => true,
        ));
        
    endif;
}
