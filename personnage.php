<?php

include_once 'includes/header.php';

echo $_GET['id'];

try {
    $dbconnect = new PDO('mysql:dbname=dwwm2021-4;host=127.0.0.1', 'root');
} catch (PDOException $exception) {
    print "Erreur !: " . $exception->getMessage() . "<br/>";
    die();
}

$personnage = $dbconnect->prepare('SELECT nom FROM legende WHERE id = :id');
$personnage->execute([':id' => 1]);

include_once 'includes/footer.php';