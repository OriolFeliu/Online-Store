
<head>
    <script src="../JavaScript/funcions.js"></script>
</head>


<section class="films">
    <?php foreach ($productes as $product): ?>
        <div class="peli" >
            <img src="<?php echo "../".$product['imatge'] ?>" style="width: 300px">
            <div class="info">
                <h2><?php echo $product['tittle'] ?></h2>
                <p class="price"><?php echo $product['price'] ?>€</p>
                <p><button class="prod" id="<?php echo $product['id'];?>">Obtenir detall</button></p>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<script>
    /*$(document).ready(function(){
        $(".prod").click(function(){
            window.alert("detall producte amb id:"+ $(this).attr('id'));
            $.ajax({url: "../controller/detall_producte.php?producte=" + $(this).attr('id'), success: function(result){
                    $(".layout").html(result); //canviem layout pel contingut de view prod
                }});
        });
    });*/
</script>
