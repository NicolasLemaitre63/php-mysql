<?php

// Déclaration du tableau des recettes

$recipes = [
[
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets !',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
],
[
    'title' => 'Couscous',
    'recipe' => 'Etape 1 : prenez une belle escalope !',
    'author' => 'mathieu.nebra@exemple.com',
    'enabled' => false,
]];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Affichage des recettes</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Affichage des recettes</h1>
        <?php foreach($recipes as $recipe):?>
            <h3><?php echo $recipe['title'];?></h3>
            <p><?php echo $recipe['recipe']?></p>
            <p class="italic"><?php echo $recipe['author']?></p>
            <br>
        <?php endforeach; ?>
    </body>
</html>