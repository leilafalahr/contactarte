<?php
require 'handlers/header.php'
?>

<div class="contenedor-contenido-2">
    <div class="publicar-obra">
        <div class="publicar-header">
            <h2 class="publicar-titulo">
                <i class="fas fa-pen" aria-hidden="true"></i>
                PUBLICAR
            </h2>
        </div>
        <form method="post" action="index.php">
            <div>
                <input type="text" class="publicar-textarea" placeholder="Describe tu obra..." name="descripcion">
            </div>
            <div>
                <div>
                    <button type="submit" class="boton-publicar final" name="publicar">publicar</button>
                </div>
            </div>
        </form>
    </div>