<?php
session_start();

// Verification du formulaire soumis
if (!isset($_POST['title']) || !isset($_POST['recipe']))
{
    echo 'Il faut un titre et une recette pour soumettre le formulaire';
    return;
}

$title = $_POST['title'];
$recipe = $_POST['recipe'];

// Faire l'insertion en base
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

// Ecriture de la requête
$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled)
VALUES (:title, :recipe, :author, :is_enabled)';

// Préparation
$insertRecipe = $db->prepare($sqlQuery);

// Exécution ! La recette est maintenant en base de données
$insertRecipe->execute([
'title' => $title,
'recipe' => $recipe,
'author' => $_SESSION['LOGGED_USER'],
'is_enabled' => 1, // 1 = true, 0 = false
]);

include_once('../index.php');