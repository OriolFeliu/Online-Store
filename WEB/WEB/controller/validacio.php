<?php

require_once(__DIR__."/../model/model_connectaDB.php");

$psw = $_POST['password'];
$pswH = password_hash($psw, PASSWORD_DEFAULT);

$nom=$_POST['nom'];

$mail=$_POST['mail'];

$adreca=$_POST['adreça'];

$poblacio=$_POST['poblacio'];

$codiPostal=$_POST['codipostal'];

$submit=$_POST['submit'];

//COMPROVAR QUE UNA VARIABLE EXISTEIX
if(isset($submit)) {
    //TE ALGUN CAMP BUIT
    $correcte=true;
    if(empty($nom) or empty($mail) or empty($adreca) or empty($poblacio) or empty($codiPostal) or empty($psw))
    {
        echo "<p>No has omplert el formulari </p>";
        $correcte=false;
    }
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        echo"<p>Adreça mail no valida.</p>";
        $correcte=false;
    }
    if(is_int($codiPostal))
    {
        echo "<p>Codi postal no valid</p>";
        $correcte=false;
    }

    if($correcte)
    {
        $db = new DB();
        $db->setCompte($nom, $pswH, $mail, $adreca, $poblacio, $codiPostal);//mood menos $contrasenya

        echo "<p>Registre realitzat correctament!</p>";

        $_SESSION['usuari'] = $mail;
        $_SESSION['nom']=$nom;

    }

    echo "<button><a href=\"?accio=portada\"><h3>Tornar pagina prinipal</h3></a></button>";

}

