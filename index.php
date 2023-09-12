<!-- index.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site de recettes - Page d'accueil</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body class="d-flex flex-column min-vh-100">
        <div class="container">
            <?php include_once('header.php'); ?>
            <h1>Site de recettes</h1>
            <!-- inclusion des variables et fonctions -->
            <?php
                include_once('variables.php');
                include_once('functions.php');
            ?>
            <!-- inclusion de l'entête du site -->
            <?php include_once('header.php'); ?>
            <?php foreach(getRecipes($recipes) as $recipe) : ?>
                <article>
                <h3><?php echo $recipe['title']; ?> </h3>
                <div><?php echo $recipe['recipe']; ?> </div>
                <i><?php echo displayAuthor($recipe['author'], $users); ?> </i>
                </article>
            <?php endforeach ?>
            <br>
            <a href="contact.php">Contact</a>
        </div>
        <!-- inclusion du bas de page du site -->
        <?php include_once('footer.php'); ?>
    </body>
</html>