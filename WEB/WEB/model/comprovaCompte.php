<?php
function comprovaCompte($mail){
    //echo "<h3>sql detall prod ". $idProd ."</h3>";

    $sql = 'SELECT * 
                    FROM usuari
                    WHERE mail = :mailU';
    $stmt = $this->connexio->prepare($sql);

    $params = [ 'mailU' => $mail, ];

    $stmt->execute($params);

    $user = $stmt->fetch();

    return $user;
}