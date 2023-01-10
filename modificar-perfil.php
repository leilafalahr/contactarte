<?php
require('handlers/header.php');
if ($consultaCheckArtista == 1) {
    require("handlers/modificar-perfil-artista.php");
} else {
    require("handlers/modificar-perfil-reclutador.php");
}
?>

