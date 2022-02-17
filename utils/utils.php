<?php
/**
 * Enlève les PVs à la cible donnée en fonction des points d'atk de l'attaquant.
 * @param array $attaquant
 * @param array $cible
 * @return int
 */
function attaquer(array $attaquant, array &$cible): int
{
    echo formaterNom($cible['nom']) . ' ! En garde, ma biquette ! Je vais vous découper le gras du cul, ça vous fera ça de moins à trimbaler !';

    return $cible['pv'] -= $attaquant['atk'];
}

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
