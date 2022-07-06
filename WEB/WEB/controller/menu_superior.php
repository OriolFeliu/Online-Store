<?php

require_once(__DIR__."/../model/model_connectaDB.php");


$novaDB = new DB();
$categories = $novaDB->getCategories();

include ('view/menu_superior.php');

