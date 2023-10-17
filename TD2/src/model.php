<?php
function getPosts() {
    // We connect to the database.
    try {
        $database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8',
        'blog', 'password');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    // We retrieve the 5 last blog posts.
    $statement = $database->query(
        "SELECT id, title, content, DATE_FORMAT(creation_date,
        '%d/%m/%Y à %Hh%imin%ss') AS creation_date_en FROM billets
        ORDER BY date_creation DESC LIMIT 0, 5"
    );
    $posts = [];
    while (($row = $statement->fetch())) {
        $post = [
            'title' => $row['title'],
            'french_creation_date' => $row['creation_date_en'],
            'content' => $row['content'],
        ];
        $posts[] = $post;
    }
    return $posts;
}
