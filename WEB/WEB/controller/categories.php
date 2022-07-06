<?php

//CRIDA AL MODEL PER RECARREGAR LES CATEGORIES DE LA BD
require_once(__DIR__."/../model/model_connectaDB.php");


$novaDB = new DB();
$categories = $novaDB->getCategories();

require_once __DIR__. "/../view/categories.php";
