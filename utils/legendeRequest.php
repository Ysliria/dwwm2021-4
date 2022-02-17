<?php

require_once 'dbconnect.php';

function getListePersonnage($dbconnect): array
{
    return $dbconnect->query('SELECT * FROM legende;')->fetchAll(PDO::FETCH_ASSOC);
}


function getPersonnageById()
{

}