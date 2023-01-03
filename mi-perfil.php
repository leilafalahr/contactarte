<?php
require "handlers/header.php";

if($consultaCheckArtista == 1){
    require ("handlers/perfil-artista.php");
}else{
    require ("handlers/perfil-reclutador.php");
}