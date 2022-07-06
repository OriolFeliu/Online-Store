<!--<!DOCTYPE html>-->

<script>
    function validarUsuari() {
        var  nombre = document.getElementById("nom").value;
        var  adress = document.getElementById("adreça").value;
        var  poblacio = document.getElementById("poblacio").value;
        var  cp = document.getElementById("codipostal").value;
        var  pass = document.getElementById("password").value;
        var  mail = document.getElementById("mail").value;
        var expresion = /\w+@+\w+\.+[a-z]/;
        var expresion2 = /\w/;
        var expresion3 =  /^\d{5}$/;
        var expresion1 = /[A-z]\s[A-z]/;

        if(nombre === "" || adress === "" || poblacio === "" || cp === "" || pass === "" || mail === "")
        {
            alert("Todos los campos son obligatorios.");
            return false;
        }
        else if(!expresion1.test(nombre))
        {
            alert("El nombre no es válido.");
            return false;
        }
        else if(adress.length > 30)
        {
            alert("La dirección es muy larga.");
            return false;
        }
        else if(poblacio.length > 30)
        {
            alert("El nombre de la poblacion es muy larga.");
            return false;
        }
        else if(!expresion3.test(cp))
        {
            alert("El codigo postal debe tener 5 valores numericos.");
            return false;
        }
        else if(!expresion2.test(pass))
        {
            alert("La contraseña no es válida.");
            return false;
        }
        else if(pass.length > 15)
        {
            alert("La contraseña es muy larga.");
            return false;
        }
        else if(mail.length>30)
        {
            alert("El correo es muy largo.");
            return false;
        }
        else if(!expresion.test(mail))
        {
            alert("El correo no es valido.");
            return false;
        }
    }
</script>


<section class="main"> <!-- tot el que va fora de la barra superior -->
    <h1>Omple el formulari</h1>
    <div class="login">
        <form name='formulari' method="post" autocomplete="on" action="?accio=registre_valid" onsubmit="return validarUsuari()"><!---->

            NOM:<input type="text" id="nom" name="nom" placeholder="ex.: Juan Lopez"><br />
            MAIL:<input type="mail" id="mail" name="mail" placeholder="usuari@exemple.cat"><br />
            CONTRASENYA: <input type="password" id="password" name="password" placeholder="ABcd9876"><br />
            ADREÇA: <input type="text" id="adreça" name="adreça"><br />
            POBLACIÓ: <input type="text" id="poblacio" name="poblacio"><br />
            CODI POSTAL: <input type="text" name="codipostal" placeholder="08000"><br /><br />

            <input id="submit" type="submit" name="submit" value="Registrar-se" /><br />

            <p>Ja tens una compte? <a href="?accio=iniciSessio">Ingresa aqui</a></p>
        </form>
    </div>
</section>

