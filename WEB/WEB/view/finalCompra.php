<div>
    <?php
        if($compraRealitzada){
            echo "<h1>La compra s'ha realitzat correctament</h1>";
        }
        else{
            echo "<h1>La compra no s'ha realitzat correctament</h1>";

            if(!isset($_SESSION['cistella'])) {
                echo "<h3>Cistella buida</h3>";
            }
            if(!isset($_SESSION['usuari'])) {
                //echo $_SESSION['usuari'];
                echo "<h3>Has d'iniciar sessió per fer comanda</h3>";
            }
        }

    ?>
</div>

    
    
