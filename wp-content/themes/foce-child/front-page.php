<?php
get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">

        <video class="video-oscars" autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> ">
            <source src="<?php echo get_theme_file_uri() . '/assets/video/studio.koukaki.mp4'; ?>" type="video/mp4">
        </video>
        <img class="logo-koukaki" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
    </section>


    <section id="story" class="story">
        <h2>L'histoire</h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
<!--les personnages avec SWIPERJS-->
        <?php get_template_part('template-parts/characters-swiper'); ?>

        <article id="place">
            <div class="clouds">
                <!-- integration des nuages pour animation-->
                <img class="big-cloud" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="Gros nuage" data-bottom-top="transform:translateX(0px)" data-top-bottom="transform:translateX(-300px)">
                <img class="little-cloud" src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="Petit nuage" data-bottom-top="transform:translateX(0px)" data-top-bottom="transform:translateX(-300px)">
            </div>
            <div>
                <h3>Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
        </article>
    </section>


    <section id="studio">
        <h2>Studio Koukaki</h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <!-- Fleurs juste au-dessus de la section Oscar -->
    <div class="oscars">
        <!-- Image Sunflower -->
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?>" alt="Sunflower" class="sunflower">
        <!-- Image Orchid -->
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Orchid.png'; ?>" alt="Orchid" class="orchid">
</div>
    <!-- Section Oscar -->
    <section id="oscar">
        <?php include(get_stylesheet_directory() . '/template-parts/oscar.php'); ?>
    </section>
</main><!-- #main -->

<?php
get_footer();
?>