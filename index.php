<?php
require('handlers/header.php');

/*Si es artista, muestra el index del artista, si no, muestra el del reclutador*/
if($consultaCheckArtista == 1) {
    require("handlers/index-artista.php");
}else{
    require("handlers/index-reclutador.php");
}
?>




