<?php

require 'router.php';
require 'functions.php';

$dsn = 'mysql:host=localhost;port=3306;dbname=jottings;user=root;charset=utf8mb4';
$pdo = new PDO($dsn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $comment = $_POST['comment'] ?? '';

    $statement = $pdo->prepare('INSERT INTO jottings (name, comment) VALUES (:name, :comment)');
    $statement->bindParam(':name', $name);
    $statement->bindParam(':comment', $comment);

    $statement->execute();
}


