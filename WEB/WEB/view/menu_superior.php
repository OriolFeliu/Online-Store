

<header class="barraNav">
    <ul>
        <li><a class="activa" href="/">FICTION'S CORNER</a></li>

        <?php foreach ($categories as $cat) { ?>
            <?php $nomAntiXSS = htmlentities($cat['nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>
            <li><a type="button" class="categoria"  id="<?php echo $cat['id'];?>" ><?php echo $nomAntiXSS; ?></a> </li>
        <?php } ?>

        <li><a href="#barra_cerca">
                <!-- Barra de cerca -->
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="Que busques?">
                    <button type="submit" class="searchButton">
                    </button>
                </div>
            </a>
        </li>

        <li><img src="../imatges/silueta.png" style="width: 30px" >
            <ul id="menu">
                <?php if (empty($_SESSION['usuari'])) {?>
                    <li><a href="?accio=iniciSessio">Iniciar Sessió</a></li>
                    <li><a href="?accio=registre">Registrar-me</a></li>
                <?php }
                else{ ?>
                    <li><a href="?accio=meuCompte">El meu compte</a></li>
                    <li><a href="?accio=llistatComandes">Llistat de comandes</a></li>
                    <li><a href="?accio=sortir">Sortir</a></li>
                <?php } ?>

                <script>

                </script>

            </ul>
        </li>

        <li<button><a href="?accio=cistella"><img src="../imatges/cistella.png" style="width: 30px"></a></button>
    </ul>
</header>
