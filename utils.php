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


$toto = 'toto';