<?php

//CRIDA AL MODEL PER RECARREGAR LES CATEGORIES DE LA BD
require_once(__DIR__."/../model/model_connectaDB.php");


$novaDB = new DB();

$user = $novaDB->comprovaCompte($_SESSION['usuari']);
$comandes=$novaDB->getComandes($user['id']);





require_once __DIR__. "/../view/comandes.php";
