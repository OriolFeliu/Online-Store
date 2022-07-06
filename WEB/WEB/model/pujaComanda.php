<?php
function pujaComanda(){
    if (isset($_SESSION['cistella']))
    {
        $sql = 'INSERT INTO comanda (id, usuari_id, import, nElements)
                        VALUES (0, :usuari_id, :import, :nElements)';

        $stmt = $this->connexio->prepare($sql);

        $preuTotal=0;
        foreach ($_SESSION['cistella'] as $prod){
            $preuTotal+=$prod["preu"];
        }

        $params = [
            'usuari_id' => $_SESSION['usuari'],
            'import' => $preuTotal,
            'nElements' => sizeof($_SESSION['cistella']) ,
        ];

        $stmt->execute($params);
    }
}