<?php

function getDetallProducte($idProd){
    //echo "<h3>sql detall prod ". $idProd ."</h3>";
    $sql = 'SELECT * 
                    FROM productes
                    WHERE id = :idP';
    $stmt = $this->connexio->prepare($sql);

    $params = [ 'idP' => $idProd, ];

    $stmt->execute($params);

    $detallProducte = $stmt->fetch();

    //echo "<h3>titol: ". $detallProducte['id'] ."</h3>";

    return $detallProducte;
}