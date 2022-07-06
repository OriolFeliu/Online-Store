<?php
require_once(__DIR__."/../model/model_connectaDB.php");

$mail=$_POST['mail'];

$psw = $_POST['password'];

$submit=$_POST['submit'];

if(isset($submit)) {
    //TE ALGUN CAMP BUIT
    if(empty($mail) or empty($psw))
    {
        echo "<p> No has omplert el formulari </p>";
    }
    else
    {

        $db = new DB();
        $user = $db->comprovaCompte($mail);

        if($user == false){
            echo "<h1>Correu incorrecte!</h1>";
        }
        else{
            if (password_verify($psw, $user['contrasenya'])) {
                $_SESSION['usuari']= $user['mail'];
                $_SESSION['nom']=$user['nom'];

                echo '<h1>Credencials correctes. <a href="?accio=portada">Torna<a/></h1>';
            }
            else {
                echo '<h1>Contrasenya incorrecte!</h1>';
            }
        }
    }
}