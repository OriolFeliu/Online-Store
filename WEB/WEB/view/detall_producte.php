<head>
    <script src="../JavaScript/funcions.js"></script>
</head>


<section class="films">
    <!-- canviar css per a mostrar detall -->
    <div class="peli" id="detall">
        <img src="<?php echo "../".$detallProducte['imatge']; ?>" style="width: 300px">
        <div class="info">
            <h2><?php echo $detallProducte['tittle']; ?></h2>
            <p class="price"><?php echo $detallProducte['price']; ?>€</p>
            <p><?php echo $detallProducte['description']; ?></p>
            <p><button class="cabas" id="<?php echo $detallProducte['id'];?>">Afegir al cabàs</button></p>
        </div>
    </div>
</section>