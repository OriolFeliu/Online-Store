
<section class="main"> <!-- tot el que va fora de la barra superior -->
    <br><br><h1>Modificar la meva compte</h1>
    <div class="login">
        <form name='formulari' method="post" autocomplete="on" action="?accio=modificaUsuari" onsubmit="" enctype="multipart/form-data"><!---->

            NOM:<input type="text" id="nom" name="nom" placeholder="<?php echo $usuari['nom'];  ?>"><br />
            MAIL:<input type="mail" id="mail" name="mail" placeholder="<?php echo $usuari['mail']; ?>"><br />
            CONTRASENYA: <input type="password" id="password" name="password"><br />
            ADREÇA: <input type="text" id="adreça" name="adreça" placeholder="<?php echo $usuari['adreça']; ?>"><br />
            POBLACIÓ: <input type="text" id="poblacio" name="poblacio" placeholder="<?php echo $usuari['poblacio']; ?>"><br />
            CODI POSTAL: <input type="text" name="codipostal" placeholder="<?php echo $usuari['codi_postal']; ?>"><br />
            IMATGE PERFIL: <input type="file" name="profile_image" />

            <p>Imatge actual:</p>
                <img src="<?php echo "/../fitxers/profile_image".$_SESSION['usuari'].".jpg";?>" alt="<?php echo $_SESSION['usuari'] ?>" width="300" />
            <br /><br />

            <input id="submit" type="submit" name="submit" value="Modificar" /><br />
        </form>
    </div>
</section>