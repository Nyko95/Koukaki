<?php
// Définit les arguments pour la requête WP_Query pour récupérer les personnages
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',
);

// Exécute la requête WP_Query avec les arguments définis
$characters_query = new WP_Query($args);
?>

<article id="characters"> <!-- Balise article pour regrouper le contenu des personnages -->
    <div class="main-character"> <!-- Div pour contenir le titre et le conteneur Swiper -->
        <h3>Les personnages</h3> <!-- Titre pour indiquer la liste des personnages -->

        <!-- Conteneur Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper"> <!-- Wrapper pour les diapositives Swiper -->

                <?php
                // Démarre la boucle pour chaque personnage dans la requête
                while ($characters_query->have_posts()) {
                    $characters_query->the_post(); // Définit le contexte de la publication actuelle

                    // Début de la diapositive Swiper pour chaque personnage
                    echo '<div class="swiper-slide">';
                    echo '<figure>'; // Début de la figure pour l'image du personnage
                    echo get_the_post_thumbnail(get_the_ID(), 'full'); // Affiche l'image en vedette du personnage
                    echo '<figcaption>'; // Début de la légende pour le titre du personnage
                    the_title(); // Affiche le titre du personnage
                    echo '</figcaption>'; // Fin de la légende du titre du personnage
                    echo '</figure>'; // Fin de la figure pour l'image du personnage
                    echo '</div>'; // Fin de la diapositive Swiper pour chaque personnage
                }
                ?>

            </div>
        </div>
    </div>
</article>