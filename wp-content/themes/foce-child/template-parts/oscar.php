<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $chemin_image = get_theme_file_uri('/template-parts/orange.png');
    ?>
    <img src="<?php echo $chemin_image; ?>" alt="Nomination Oscars" class="orange-image">
</body>

</html>