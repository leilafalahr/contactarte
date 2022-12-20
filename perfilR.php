<?php
require "handlers/header.php";
?>
<div class="contenedor-perfil">
    <img src="<?php echo $reclutador['imagen_perfil'];?>" alt="" class="imagen-perfil">
    <p>@<?php echo $reclutador['username'];?></p>
</div>
<div class="contenedor-contenido">
    <div class="publicar-obra">
        <?php
        $usuario = new \classes\Usuario($con,$usuario);
        $obra = new Obra($usuario,$con);
        ?>
    </div>
</div>
