$(document).ready(function() {

    //On click signup, hide login and show registration form
    $(".registrate").click(function() {
        $(".contenedor-tabla-1").slideUp("slow", function(){
            $(".contenedor-tabla-2").slideDown("slow");
        });
    });

    //On click signup, hide registration and show login form
    $(".inicia").click(function() {
        $(".contenedor-tabla-2").slideUp("slow", function(){
            $(".contenedor-tabla-1").slideDown("slow");
        });
    });


});