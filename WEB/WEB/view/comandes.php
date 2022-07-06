

<section class="films">
    <?php
        foreach ($comandes as $comanda): ?>
            <h3>Import: <?php echo $comanda['import'] ?>   Quantiat: <?php echo $comanda['nProd'] ?></h3><br>

            <?php $productes=$comanda['llistaProd'];
            $productes = unserialize($productes);
            foreach ($productes as $productID):
                $product=$novaDB->getDetallProducte($productID);?>

                <div class="peli" >
                    <img src="<?php echo "../".$product['imatge'] ?>" style="width: 300px">
                    <div class="info">
                        <h2><?php echo $product['tittle'] ?></h2>
                        <p class="price"><?php echo $product['price'] ?>€</p>
                    </div>
                </div>

            <?php endforeach; ?>
        <hr>
        <?php endforeach; ?>


</section>