<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../JavaScript/funcions.js"></script>
</head>





    <section class="layout"><br><br>
        <h3><button id="buidar">Buidar cistella</button></h3>
        <section class="films">
            <?php $preuTotal=0;
            foreach ($_SESSION['cistella'] as $product): ?>
                <?php $preuTotal+=$product["preu"]; ?>
                <div class="peli" >
                    <img src="<?php echo "../".$product['imatge'] ?>" style="width: 300px">
                    <div class="info">
                        <h2><?php echo $product['nom'] ?></h2>
                        <p class="price"><?php echo $product['preu'] ?>€</p>
                        <p><button class="prod" id="<?php echo $product['id'];?>">Obtenir detall</button></p>
                    </div>
                </div>
            <?php endforeach; //es pot afegir boto de retirar producte?>
            <div>
                <h3>Import total: <?php echo $preuTotal; ?></h3>
                <h1><a href="?accio=finalCompra"><button>Finalitzar compra</button></a></h1>
            </div>
        </section>

    </section>

<script>
    $(document).ready(function(){
        $("#buidar").click(function(){
            window.alert("Buidant cistella");
            <?php// $_SESSION['cistella']=[]; ?>
        });
    });
</script>
<script>
    /*$(document).ready(function(){
        $(".categoria").click(function(){
            $.ajax({url: "../controller/productes.php?category=" + $(this).attr('id'), success: function(result){
                    $(".layout").html(result); //canviem layout pel contingut de view prod
                }});
        });
    });
    */
</script>