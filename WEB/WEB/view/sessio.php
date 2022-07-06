<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FICTION'S CORNER</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/styleC.css">
    <link rel="stylesheet" type="text/css" href="/css/styleRS.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="Funcions.js"></script>
</head>
</html>

<section class="main"> <!-- tot el que va fora de la barra superior -->

        <div id="contenedor">

            <div class="login">
                <form id="form-login" action="?accio=sessio_valid" method="post" autocomplete="on">
                    <p><label >Usuario:</label></p>
                    <input name="mail" type="text" id="mail" placeholder="Ingresa correu electrònic" autofocus="" required=""></p>

                    <p><label>Contraseña:</label></p>
                    <input name="password" type="password" id="password" placeholder="Ingresa Password" required=""></p>

                    <input type="submit" id="submit" name="submit" value="Ingresar" class="boton">
                </form>
                <div id="registrar">
                    <a href="?accio=registre" > Registrarse </a>
                </div>
            </div>
        </div>


</section>