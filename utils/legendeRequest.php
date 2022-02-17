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

