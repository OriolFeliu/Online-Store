<?php
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