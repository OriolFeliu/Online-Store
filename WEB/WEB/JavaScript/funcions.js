//canviar de categoria a productes
$(document).ready(function(){
    $(".categoria").click(function(){
        $.ajax({url: "?accio=productes&category=" + $(this).attr('id'), success: function(result){
                $(".layout").html(result); //canviem layout pel contingut de view prod
            }});
    });
});

//obtenir detall prod
$(document).ready(function(){
    $(".prod").on("click", function(){
        //window.alert("detall producte amb id:"+ $(this).attr('id'));

        $.ajax({url: "?accio=detall_prod&producte=" + $(this).attr('id'), success: function(result){
                $(".layout").html(result); //canviem layout pel contingut de view prod
            }});
    });
});

$(document).ready(function(){
    $("#registrarse").on("click", function(){
        //window.alert("detall producte amb id:"+ $(this).attr('id'));

        $.ajax({url: "?accio=registre_valid", success: function(result){
                $(".layout").html(result); //canviem layout pel contingut de view prod
            }});
    });
});

$(document).ready(function(){
    $("#compte").on("click", function(){
        //window.alert("detall producte amb id:"+ $(this).attr('id'));

        $.ajax({url: "?accio=registre", success: function(result){
                $(".layout").html(result); //canviem layout pel contingut de view prod
            }});
    });
});

$(document).ready(function(){
    $("#iniciaSessio").on("click", function(){
        //window.alert("detall producte amb id:"+ $(this).attr('id'));

        $.ajax({url: "?accio=iniciSessio", success: function(result){
                $(".layout").html(result); //canviem layout pel contingut de view prod
            }});
    });
});

$(document).ready(function(){
    $(".cabas").on("click", function(){
        //window.alert("detall producte amb id:"+ $(this).attr('id'));
        window.alert("Producte afegit a la cistella");
        $.ajax({url: "?accio=afegir_cabas&producte=" + $(this).attr('id'), success: function(result){

                $(".layout").html(result); //canviem layout pel contingut de view prod
            }});
    });
});


//buidar cistella

