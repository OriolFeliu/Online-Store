<?php

function getCategories($connexio)
{
    $sql = 'SELECT * 
                    FROM category';
    $stmt = $connexio->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll();
    return $categories;
}