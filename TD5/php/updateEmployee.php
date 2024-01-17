<?php

require_once('config.php');

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];

$stmt = $pdo->prepare(
    'UPDATE employees
    SET name = :name, address = :address, salary = :salary
    WHERE id = :id'
);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':salary', $salary);
$stmt->execute();

header('Location : index.php');
exit();