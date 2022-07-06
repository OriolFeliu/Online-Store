<?php

//CRIDA AL MODEL PER RECARREGAR LES CATEGORIES DE LA BD
require_once(__DIR__."/../model/model_connectaDB.php");



$novaDB = new DB();
$productes = $novaDB->getProductes($_GET['category']);
//$productes = $novaDB->getProductes(1);//per provar ajax

require_once __DIR__. "/../view/productes.php";
