<?php

require_once 'dbconnect.php';

/**
 * @param PDO $dbconnect
 * @return array
 */
function getListePersonnage(PDO $dbconnect): array
{
    return $dbconnect->query('SELECT * FROM legende;')->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param PDO $dbconnect
 * @param int $id
 * @return array
 */
function getPersonnageById(PDO $dbconnect, int $id): array
{
    $request = $dbconnect->prepare('SELECT * FROM legende WHERE id = :id');
    $request->execute([':id' => $id]);

    return $request->fetch(PDO::FETCH_ASSOC);
}

/**
 * @param PDO   $dbconnect
 * @param array $personnage
 * @return bool
 */
function createPersonnage(PDO $dbconnect, array $personnage): bool
{
    // INSERT INTO `legende` (`id`, `nom`, `profession`, `pv`, `atk`) VALUES (NULL, 'Lancelot', 'Chevalier', '300', '30');
    $request = $dbconnect->prepare(
        'INSERT INTO legende (nom, profession, pv, atk) VALUES (:nom, :profession, :pv, :atk);'
    );

    return $request->execute(
        [
            ':nom'        => $personnage['nom'],
            ':profession' => $personnage['profession'],
            ':pv'         => $personnage['pv'],
            ':atk'        => $personnage['atk']
        ]
    );
}