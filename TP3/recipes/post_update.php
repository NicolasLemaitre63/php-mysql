<?php
session_start();

include_once('../variables.php');

$postData = $_POST;

if (
    !isset($postData['id'])
    || !isset($postData['title'])
    || !isset($postData['recipe'])
)
{
    echo("Il manque des informations pour permettre l\'édition du formulaire.");
    return;
}

try
{
    $db = new PDO(
    'mysql:host=localhost;dbname=my_recipes;charset=utf8',
    'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$id = $postData['id'];
$title = $postData['title'];
$recipe = $postData['recipe'];

$insertRecipeStatement = $db->prepare('UPDATE recipes SET title = :title, recipe = :recipe WHERE recipe_id = :id');
$insertRecipeStatement->execute([
    'title' => $title,
    'recipe' => $recipe,
    'id' => $id,
]);

include_once('../index.php');