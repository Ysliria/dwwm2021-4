<?php

try {
    $dbconnect = new PDO('mysql:dbname=dwwm2021-4;host=127.0.0.1', 'root');
} catch (PDOException $exception) {
    print "Erreur !: " . $exception->getMessage() . "<br/>";
    die();
}