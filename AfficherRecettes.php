<?php

function isValidRecipe(array $recipe) : bool
{
    if (array_key_exists('is_enabled', $recipe))
    {
        $isEnabled = $recipe['is_enabled'];
    }
    else
    {
        $isEnabled = false;
    }
    return $isEnabled;
}

function getRecipes(array $recipes) : array
{
    $validRecipes = [];
    foreach($recipes as $recipe)
    {
        if (isValidRecipe($recipe))
        {
            $validRecipes[] = $recipe;
        }
    }
    return $validRecipes;
}

function displayAuthor(string $authorEmail, array $users) : string
{
    for ($i = 0; $i < count($users); $i++) 
    {
        $author = $users[$i];
        if ($authorEmail === $author['email']) 
        {
            return $author['full_name'] . '(' . $author['age'] . ' ans)';
        }
    }
}

// Déclaration du tableau des recettes et des utilisateurs

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

$users = [
[
    'full_name' => 'Mickael Andrieu',
    'age' => 27,
    'email' => 'mickael.andrieu@exemple.com',
],
[
    'full_name' => 'Mathieu Nebra',
    'age' => 35,
    'email' => 'mathieu.nebra@exemple.com',
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
        <?php foreach(get_recipes($recipes) as $recipe) : ?>
            <article>
                <h3><?php echo($recipe['title']); ?></h3>
                <div><?php echo($recipe['recipe']); ?></div>
                <i><?php echo(display_author($recipe['author'], $users)); ?></i>
            </article>
        <?php endforeach ?>
    </body>
</html>