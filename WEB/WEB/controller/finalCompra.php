<?php
require_once(__DIR__."/../model/model_connectaDB.php");


$compraRealitzada=false;
if ($_SESSION['usuari'] && $_SESSION['cistella']){
    $compraRealitzada=true;
    $novaDB = new DB();

    $user = $novaDB->comprovaCompte($_SESSION['usuari']);
    $novaDB->pujaComanda($user['id']);

    $_SESSION['cistella']=array(); //buidar cistella
}


require_once __DIR__. "/../view/finalCompra.php";


