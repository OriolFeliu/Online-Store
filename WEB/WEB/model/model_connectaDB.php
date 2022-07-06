<?php

class DB{

    public $servidor = "localhost";
    public $usuari = "tdiw-k6";
    public $clau = "vvuRCj7L";
    public $connexio;

        function __construct(){
            try{
                $this->connexio = new PDO("mysql:host=$this->servidor; dbname=tdiwk6; charset=UTF8", $this->usuari, $this->clau);
                $this->connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){ echo "Error: " . $e->getMessage(); }
        }

        function getCategories()
        {
            $sql = 'SELECT * 
                    FROM category';
            $stmt = $this->connexio->prepare($sql);
            $stmt->execute();
            $categories = $stmt->fetchAll();
            return $categories;
        }

        function getProductes($id)
        {
            //S'HAURÀ D CANVIAR
            $sql = 'SELECT * 
                    FROM productes
                    WHERE category_id = :category_id';
            $stmt = $this->connexio->prepare($sql);

            $params = [ 'category_id' => $id, ];

            $stmt->execute($params);

            $productes = $stmt->fetchAll();

            return $productes;

        }

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

        function setCompte($nom, $passHash, $email, $adreca, $poblacio, $cp){
            $sql = 'INSERT INTO usuari (id, mail, nom, contrasenya, adreça, poblacio, codi_postal)
                        VALUES (0, :mail, :nom, :pass, :adreca, :poblacio, :cp)';

            $stmt = $this->connexio->prepare($sql);

            $params = [
                'mail' => $email,
                'nom' => $nom,
                'pass' => $passHash ,
                'adreca' => $adreca,
                'poblacio' => $poblacio,
                'cp' => $cp,
            ];

            $stmt->execute($params);
        }

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

        function pujaComanda($user_id){
            if (isset($_SESSION['cistella']))
            {
                //print_r($_SESSION['cistella']);

                $sql = 'INSERT INTO comanda ( usuari_id, import, nProd, llistaProd)
                        VALUES ( :usuari_id, :import, :nProd, :llistaProd)';

                $stmt = $this->connexio->prepare($sql);

                $preuTotal=0;
                $llistaProd=array();
                foreach ($_SESSION['cistella'] as $prod){
                    $preuTotal+=$prod["preu"];
                    array_push($llistaProd, $prod['id_producte']);
                }

                $params = [
                    'usuari_id' => $user_id,
                    'import' => $preuTotal,
                    'nProd' => sizeof($_SESSION['cistella']) ,
                    'llistaProd' =>serialize($llistaProd)
                ];

                $stmt->execute($params);
            }
        }

        function getComandes($userID){
            $sql = 'SELECT * 
                    FROM comanda
                    WHERE usuari_id = :userID';

            $stmt = $this->connexio->prepare($sql);

            $params = [ 'userID' => $userID];

            $stmt->execute($params);

            $comandes = $stmt->fetchAll();

            return $comandes;
        }

        function modificaUsuari($nom, $passHash, $email, $adreca, $poblacio, $cp, $pathF){
            $sql="UPDATE usuari SET mail= :mail, nom= :nom, contrasenya= :pass, adreça= :adress, 
                    poblacio= :poblacio, codi_postal= :cp, imatge= :nomF
                  WHERE mail= :mail ";

            $stmt = $this->connexio->prepare($sql);

            $params = [ 'mail' => $email,
                'nomF' => $pathF,
                'nom' => $nom,
                'pass' => $passHash,
                'adress'=>$adreca,
                'poblacio' =>$poblacio,
                'cp'=>$cp];

            $stmt->execute($params);
        }



}

?>