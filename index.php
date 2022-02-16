<?php
declare(strict_types=1);

include_once 'includes/header.php';
require_once 'utils.php';





$merlin    = [
    'nom'        => 'Merlin',
    'profession' => 'Druide',
    'pv'         => 200,
    'atk'        => 80
];
$arthur    = [
    'nom'        => 'Arthur',
    'profession' => 'Roi',
    'pv'         => 400,
    'atk'        => 60
];
$guenievre = [
    'nom'        => 'Guenièvre',
    'profession' => 'Reine',
    'pv'         => 100,
    'atk'        => 20
];
$perceval  = [
    'nom'        => 'Perceval',
    'profession' => 'Chevalier',
    'pv'         => 300,
    'atk'        => 40
];
$mordred   = [
    'Mordred',
    'Chevalier',
    400,
    40
];

?>
    <form action="traitement.php" method="post">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">

        <input type="submit" value="valider">
    </form>

<?php



/*switch ($arthur['profession']) {
    case 'Chevalier':
        echo 'Sir ! On en a gros ! <br>';
        break;
    case 'Druide':
        echo 'Franchement, une potion pour faire pisser bleu, ça presse forcément la minute ? <br>';
        break;
    case 'Reine':
        echo 'Ah d\'accord, vous me prenez vraiment, pour la reine des pécores. <br>';
        break;
    case 'Roi':
        echo 'Rangez moi ça, débile, la Table Ronde, c\'est pas la fête de l\'artisanat ! <br>';
        break;
    default:
        echo 'Où elle est la poulette ? <br>';
}*/

include_once 'includes/footer.php';
