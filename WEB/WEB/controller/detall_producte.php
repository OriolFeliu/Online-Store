<?php
//CRIDA AL MODEL PER RECARREGAR LES CATEGORIES DE LA BD
require_once(__DIR__."/../model/model_connectaDB.php");


$novaDB = new DB();
$detallProducte = $novaDB->getDetallProducte($_GET['producte']);
//$detallProducte = $novaDB->getDetallProducte(10);//per provar ajax

require_once __DIR__. "/../view/detall_producte.php";
