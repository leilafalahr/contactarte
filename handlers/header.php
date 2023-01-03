<?php
require 'config/configBD.php';
if (isset($_SESSION['username'])) {
    $usuario_loggeado = $_SESSION['username'];

    $usuario_detalles = mysqli_query($con, "SELECT * FROM usuarios WHERE username='$usuario_loggeado'");
    $usuario = mysqli_fetch_array($usuario_detalles);

    $artista_detalles = mysqli_query($con, "SELECT * FROM artistas WHERE username='$usuario_loggeado'");
    $artista = mysqli_fetch_array($artista_detalles);

    $reclutador_detalles = mysqli_query($con, "SELECT * FROM reclutadores WHERE username='$usuario_loggeado'");
    $reclutador = mysqli_fetch_array($reclutador_detalles);

    $checkEsArtista = mysqli_query($con, "SELECT tipo_de_usuario FROM usuarios where tipo_de_usuario=0 AND username='$usuario_loggeado'");
    $consultaCheckArtista = mysqli_num_rows($checkEsArtista);
} else {
    header('Location: iniciar-sesion.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact(arte)</title>
    <!--favicon-->
    <link rel="icon" href="assets/img/favicon-contactarte.ico">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--bootstrap links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/imagenes_logo/logo_contactarte_peq2.png" class="d-inline-block align-top"
                     alt="logo-contactarte">
            </a>
        </div>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </form>

        <div class="d-flex">

            <div class="dropdown">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-bars" style="font-size: 30px"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="handlers/logout.php">Cerrar sesión</a></li>
                </ul>
            </div>

            <?php

                if($consultaCheckArtista == 1){
                    echo '<a class="navbar-brand" href="mi-perfil.php">
                <img src="'. $artista["imagen_perfil"] .'"alt="foto_perfil" style="width:40px;height: 40px;"
                     class="rounded-pill">
            </a> ';
                }else{
                    echo '<a class="navbar-brand" href="mi-perfil.php">
                <img src="'. $reclutador["imagen_perfil"] .'"alt="foto_perfil" style="width:40px;height: 40px;"
                     class="rounded-pill">
            </a> ';
                }

            ?>

        </div>

</nav>
