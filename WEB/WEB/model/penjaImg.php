<?php
function penjaImg($pathF){
    $sql="UPDATE usuari SET imatge= :nomF 
                  WHERE mail= :mail ";

    $stmt = $this->connexio->prepare($sql);

    $params = [ 'mail' => $_SESSION['usuari'],
        'nomF' => $pathF];

    $stmt->execute($params);

}