<?php

require_once 'utils/legendeRequest.php';

session_start();

$nom        = htmlentities($_POST['nom']);
$profession = htmlentities($_POST['profession']);
$pv         = (int)htmlentities($_POST['pv']);
$atk        = (int)htmlentities($_POST['atk']);

$personnage               = [];
$personnage['nom']        = $nom ?? 'aucun';
$personnage['profession'] = $profession ?? 'aucune';
$personnage['pv']         = abs($pv) ?? '0';
$personnage['atk']        = abs($atk) ?? '0';


if (createPersonnage($dbconnect, $personnage)) {
    $_SESSION['creation'] = 'success';
    header('Location: /');
} else {
    $_SESSION['creation'] = 'danger';
}

