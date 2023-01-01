<?php
require 'handlers/header.php';
?>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xs-6 ">
            <div class="card" id="card" style="width:300px">
                <img class="card-img-top" src="<?= $artista['imagen_perfil'] ?>" alt="imagen_perfil">
                <div class="card-body">
                    <h4 class="card-title"> <?=$usuario['nombre']." ".$usuario['apellido']?> (@<?= $artista['username']?>)</h4>
                    <span</span>
                    <p class="card-text"><?=$artista['bio']?></p>
                    <a href="modificarPerfil.php" class="btn btn-dark btn-lg btn-block">Modificar perfil</a>
                </div>
            </div>
        </div>