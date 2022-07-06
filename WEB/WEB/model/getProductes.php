<?php
function getProductes($connexio, $id)
{
    //S'HAURÀ D CANVIAR
    $sql = 'SELECT * 
                FROM productes
                WHERE category_id = :category_id';
    $stmt = $connexio->prepare($sql);

    $params = [ 'category_id' => $id, ];

    $stmt->execute($params);

    $productes = $stmt->fetchAll();

    return $productes;

}