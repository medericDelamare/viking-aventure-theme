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
    $v = time();

    wp_enqueue_style('viking-variables', $uri . '/css/variables.css', array(), $v);
    wp_enqueue_style('viking-components', $uri . '/css/components.css', array(), $v);
    wp_enqueue_style('viking-header', $uri . '/css/header.css', array(), $v);
    wp_enqueue_style('viking-contact', $uri . '/css/contact.css', array(), $v);
    wp_enqueue_style('viking-hero', $uri . '/css/hero.css', array(), $v);
    wp_enqueue_style('viking-layout', $uri . '/css/layout.css', array(), $v);
    wp_enqueue_style('viking-faq', $uri . '/css/faq.css', array(), $v);
    wp_enqueue_style('viking-tarifs', $uri . '/css/tarifs.css', array(), $v);
    wp_enqueue_style('viking-accrobranche', $uri . '/css/accrobranche.css', array(), $v);
    wp_enqueue_style('viking-rgpd', $uri . '/css/rgpd.css', array(), $v);
    wp_enqueue_style('viking-actus', $uri . '/css/actus.css', array(), $v);
    wp_enqueue_style('viking-main', get_stylesheet_uri(), array(), $v);

    wp_enqueue_script('viking-rgpd-js', $uri . '/js/rgpd.js', array(), $v, true);
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

        /* Test visuel immédiat pour voir si le CSS est lu */
        .wpsbc-container {
            outline: 5px solid red !important;
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
function viking_seo_meta_tags() {
    global $post;

    // Définir la description par défaut
    $default_desc = "Parc d'accrobranche, paintball et activités en plein air en Normandie. Venez vivre l'expérience Viking Aventure en famille ou entre amis !";
    $desc = $default_desc;

    // Récupération dynamique
    if (is_singular()) {
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
    $title = is_singular() ? get_the_title() : get_bloginfo('name') . ' - ' . get_bloginfo('description');
    
    $img = get_template_directory_uri() . '/assets/img/logo.png';
    if (is_singular() && has_post_thumbnail()) {
        $img = get_the_post_thumbnail_url(null, 'large');
    }
    $url = is_singular() ? get_permalink() : home_url('/');

    // Injection dans le <head>
    echo "\n<!-- SEO by Viking Custom Engine -->\n";
    echo '<meta name="description" content="' . $desc . '" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '" />' . "\n";
    echo '<meta property="og:description" content="' . $desc . '" />' . "\n";
    echo '<meta property="og:type" content="website" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '" />' . "\n";
    echo '<meta property="og:image" content="' . esc_url($img) . '" />' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo "<!-- /SEO -->\n";
}
add_action('wp_head', 'viking_seo_meta_tags', 1);

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

function viking_save_planning_meta($post_id) {
    if (!isset($_POST['viking_planning_meta_nonce'])) return;
    if (!wp_verify_nonce($_POST['viking_planning_meta_nonce'], 'viking_save_planning_data')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    
    if (isset($_POST['planning_month_field'])) {
        update_post_meta($post_id, '_planning_month', sanitize_text_field($_POST['planning_month_field']));
    }
}
add_action('save_post', 'viking_save_planning_meta');