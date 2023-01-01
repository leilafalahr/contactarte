<?php

require "config/configBD.php";

if (isset($_SESSION['username'])){
    $usuario_loggeado = $_SESSION['username'];

    if (isset($_POST['post'])) {
        $descripcion = $_POST['descripcion'];

        mysqli_query($con,"INSERT INTO `obras` (`id_obra`, `username`, `descripcion`, `contenido`) VALUES ('', '$usuario_loggeado', '$descripcion', NULL)");


    }
}