<?php

require_once(__DIR__ . "/../model/model_connectaDB.php");

$novaDB = new DB();
$user = $novaDB->comprovaCompte($_SESSION['usuari']);

if(empty($_POST['password']))
    $pswH = $user['contrasenya'];
else{
    $psw = $_POST['password'];
    $pswH = password_hash($psw, PASSWORD_DEFAULT);
}

if(empty($_POST['nom']))
    $nom = $user['nom'];
else
    $nom=$_POST['nom'];

if(empty($_POST['mail']))
    $mail = $user['mail'];
else
    $mail=$_POST['mail'];

if(empty($_POST['adreça']))
    $adreca = $user['adreça'];
else
    $adreca=$_POST['adreça'];

if(empty($_POST['poblacio']))
    $poblacio = $user['poblacio'];
else
    $poblacio=$_POST['poblacio'];

if(empty($_POST['codipostal']))
    $codiPostal = $user['codi_postal'];
else
    $codiPostal=$_POST['codipostal'];

$submit=$_POST['submit'];

$fotoperfil="";

if(isset($submit)) {
    if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image']))
    {
        $filesAbsolutePath = '/home/TDIW/tdiw-k6/public_html/fitxers/';

        $destinationPath=$filesAbsolutePath.'profile_image'.$_SESSION['usuari'].'.jpg';

        move_uploaded_file(
            $_FILES['profile_image']['tmp_name'],
            $destinationPath
        );

        $fotoperfil= 'profile_image'.$_SESSION['usuari'].'.jpg';
    }

    $correcte=true;
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        echo"<p>Adreça mail no valida.</p>";
        $correcte = false;
    }
    if (is_int($codiPostal))
    {
        echo"<p>Codi postal no valid.</p>";
        $correcte=false;
    }

    if($correcte)
    {
        $db = new DB();
        $db->modificaUsuari($nom, $pswH, $mail, $adreca, $poblacio, $codiPostal, $fotoperfil);

        $_SESSION['usuari'] = $mail;
        $_SESSION['nom']=$nom;

    }
}


require_once __DIR__ . "/../view/modificaUsuari.php";