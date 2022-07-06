
<?php

if(isset($_SESSION['cistella'])){
    $preuTotal=0;
    foreach ($_SESSION['cistella'] as $prod){
        $preuTotal+=$prod["preu"];
    }

    echo "<h1>Cistella: ". sizeof($_SESSION['cistella']) . "  Total a pagar: " . $preuTotal."€</h1>" ;
}
else{
    echo "<h1>Cistella: 0 productes. Total a pagar: 0€</h1>";
}
?>