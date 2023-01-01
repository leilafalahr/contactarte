<?php
require('handlers/header.php');
if($consultaCheckArtista == 1) {
    require("handlers/index-artista.php");
}else{
    require("handlers/index-reclutador.php");
}
?>




