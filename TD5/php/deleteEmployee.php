<?php

require_once('config.php');

$stmt = $pdo->prepare('
DELETE FROM employees
WHERE id = :id
');
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();

header('Location : index.php');
exit();