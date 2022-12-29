<?php
require 'handlers/header.php';
require 'handlers/publicarObra.php';
?>

<div class="contenedor-perfil">
    <img src="<?php echo $artista['imagen_perfil']; ?>" alt="" class="imagen-perfil">
    <p><?php
        $username = $artista['username'];
        echo "<h2>@" . $username . "</h2>";
        echo $artista['bio']; ?></p>
</div>
<div class="contenedor-contenido">
    <div class="publicar-obra">
        <div class="publicar-header">
            <h2 class="publicar-titulo">
                <i class="fas fa-pen" aria-hidden="true"></i>
                PUBLICAR
            </h2>
        </div>
        <form method="post" action="perfil.php">
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
    <div class="contenedor-obras-publicadas">
        <div class="obras-publicadas">
            <p>prueba prueba prueba</p>
        </div>
    </div>
</div>
