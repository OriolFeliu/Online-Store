<?php

require_once(__DIR__."/../model/model_connectaDB.php");

$pr_id = $_GET['producte'];

$novaDB = new DB();
$prod = $novaDB->getDetallProducte($pr_id);

if(!isset($_SESSION['cistella']))
    $_SESSION['cistella'] = array();


/*$_SESSION['cistella'][$pr_id] = ["id_producte" => $pr_id,
    "nom" => $prod["tittle"],
    "preu" => $prod["price"],
    "descripcio" => $prod["description"],
    "imatge" => $prod["imatge"]];*/

array_push($_SESSION['cistella'], ["id_producte" => $pr_id,
    "nom" => $prod["tittle"],
    "preu" => $prod["price"],
    "descripcio" => $prod["description"],
    "imatge" => $prod["imatge"]]);

//print_r($_SESSION['cistella']);