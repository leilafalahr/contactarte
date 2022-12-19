<?php
require 'handlers/header.php';
require 'classes/Usuario.php';
require 'classes/Obra.php';
?>

<div class="contenedor-perfil">
    <img src="<?php echo $artista['imagen_perfil'];?>" alt="" class="imagen-perfil">
    <p>@<?php echo $artista['username'];?></p>
</div>
<div class="contenedor-contenido">
    <div class="publicar-obra">
    <?php
    $usuario = new \classes\Usuario($con,$usuario);
    $obra = new Obra($usuario,$con);
    ?>
    </div>
    <form action="perfil.php" enctype="multipart/form-data">
        <input type="text">

    </form>
    <div class="obras-publicadas">

    </div>
</div>