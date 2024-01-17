<?php

require_once('config.php');

$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];

$stmt = $pdo->prepare(
    'INSERT INTO employees (name, address, salary)
    VALUES (:name, :address, :salary)'
);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':salary', $salary);
$stmt->execute();

header('Location : index.php');
exit();