<?php // Get customizer options from parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du style personnalisé du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/sass/style.css', array(), '1.0');
    // charger le CSS de SwiperJS
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts()
{
    // Chargement du script simpleParallax
    wp_enqueue_script('scripts-simpleparallax', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js', array(), '5.5.1', true);
    // Charge le fichier script SwiperJS depuis le CDN
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', true);
    // Chargement du script personnalisé avec dépendance à swiper
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/script.js', array('skrollr', 'swiper'), '1.0', true);
}

//fonction pour charger Skrollr.
function ajouter_skrollr()
{
    // Charge le fichier skrollr.min.js de mon thème.
    wp_enqueue_script('skrollr', get_stylesheet_directory_uri() . '/js/skrollr.min.js', array(), false, true);
}

//action pour charger Skrollr
add_action('wp_enqueue_scripts', 'ajouter_skrollr');
