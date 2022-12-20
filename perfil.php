<?php
require 'handlers/header.php';
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
        <form method="post" enctype="multipart/form-data" action="perfil.php">
            <div>
                <textarea name="descripcion" class="publicar-textarea" placeholder="Describe tu obra..."></textarea>
            </div>
            <div>
                <div>
                    <button type="submit" class="boton-publicar final" name="post">publicar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="contenedor-obras-publicadas">
        <div class="obras-publicadas">
            <p>hola esto es una prueba de post</p>
        </div>
    </div>
</div>
