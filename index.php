<?php
declare(strict_types=1);

include_once 'includes/header.php';
//require_once 'utils.php';

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
    'nom'        => 'Mordred',
    'profession' => 'Chevalier',
    'pv'         => 400,
    'atk'        => 40
];

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


/**
 * Affiche un message en fonction de la valeu des PVs.
 * @param int $pv
 * @return void
 */
function messagePV(int $pv): void
{
    if ($pv === 0) {
        echo 'Vous avez toujours une mine de chiotte mais là... j\'sais pas si c\'est la lumière du feu ou quoi mais on dirait que vous êtes mort. <br>';
    } elseif ($pv <= 50) {
        echo 'Vous allez me faire le plaisir de faire péter cette saloperie que je puisse faire sortir la machine, hein! <br>';
    } else {
        echo 'Ce qu\'il y a de bien avec les opinions tranchées, c\'est qu\'ça relance le débat. En somme vous êtes une sorte de provocateur, quoi. <br>';
    }
}

/**
 * Formate le nom avec la convention : première lettre en majuscule et le reste minuscule
 * @param string $nom
 * @return string
 */
function formaterNom(string $nom): string
{
    return ucfirst(strtolower($nom));
}
