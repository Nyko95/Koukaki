<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style>
        /* Styles CSS pour le menu burger */
        .burger-menu {
            display: none;
            /* Masquer le menu burger par défaut */
        }

        .menu-toggle {
            display: block;
            /* Afficher le bouton du menu burger */
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <!-- Navigation principale -->
            <nav id="site-navigation" class="main-navigation">
                <ul class="nav-menu">
                    <li class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
                </ul>
            </nav><!-- #site-navigation -->

            <!-- Bouton du menu burger -->
            <button class="menu-toggle" aria-controls="burger-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <!-- Menu burger -->
            <nav id="burger-menu" class="burger-menu">
                <ul>
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                </ul>
            </nav><!-- #burger-menu -->
        </header><!-- #masthead -->

        <!-- Contenu de la page -->
        <div id="content">
            <!-- Vos sections de contenu vont ici -->
        </div><!-- #content -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
</body>

</html>