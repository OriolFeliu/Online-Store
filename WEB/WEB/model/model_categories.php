<?php
function getCategories($connexio){
    try{
        $consulta = $connexio->prepare("SELECT nom,descripcio FROM 'categories'");
        $consulta->execute();
        $categories = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo "Error: " . $e->getMessage();}
    return($categories);
}
?>