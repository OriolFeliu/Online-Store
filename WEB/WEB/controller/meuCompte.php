<?php
require_once(__DIR__."/../model/model_connectaDB.php");

$novaDB = new DB();
//$categories = $novaDB->getComandes();
$usuari=$novaDB->comprovaCompte($_SESSION['usuari']);

require_once __DIR__. "/../view/meuCompte.php";