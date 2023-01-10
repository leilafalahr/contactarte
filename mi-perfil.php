<?php
require "handlers/header.php";

if($consultaCheckArtista == 1){ //si eres artista, te muestra el perfil de artista
    require ("handlers/perfil-artista.php");
}else{
    require ("handlers/perfil-reclutador.php");
}