<?php
require 'handlers/header.php';
?>

<div class="contenedor-perfil">
    <img src="<?php echo $artista['imagen_perfil']; ?>" alt="" class="imagen-perfil">
    <p><?php
        $username = $artista['username'];
        echo "<h2>@" . $username . "</h2>";
        echo $artista['bio']; ?></p>
    <button type="button" onclick="history.go(-1)"> MOSTRAR PERFIL</button>
</div>
