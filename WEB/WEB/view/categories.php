<head>
    <script src="../JavaScript/funcions.js"></script>
</head>

    <div class="layout">
        <section class="films">
            <?php foreach ($categories as $categoria): ?>
                <div class="peli" >
                    <img src="<?php echo "../".$categoria['imatge'] ?>" alt="harry" id="harry" style="width: 300px">
                    <div class="info">
                        <?php $nomAntiXSS = htmlentities($categoria['nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>
                        <h2><?php echo $nomAntiXSS; ?></h2>
                        <p ><button class="categoria" id="<?php echo $categoria['id'];?>">Anar</button></p>
                    </div>
                </div>

            <?php endforeach; ?>
        </section>
    </div>

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

    <?php /*<a href="?idCategory=<?php echo $categoria['id'] ?>">*/


    /*if(empty($_SESSION['id_usuari']))
    {
        echo "<li class="."registre"."><a href="."?accio=registre".">"."Registrarse"."</a></li>";
        echo "<li class="."login"."><a href="."?accio=login".">"."Iniciar Sesión"."</a></li>";
        if(isset($_SESSION['cart'])) {
            echo "<li class="."carrito"."><a class='icon-basket'><img src='../Imagenes/icono.png' width=20 >" . "(" . count($_SESSION["cart"]) . ")" . "</a></li>";
        }else{
            echo "<li class="."carrito"."><a><img src='../Imagenes/icono.png' width=20 >" .  "(0)" . "</a></li>";
        }
    }*/
    ?>