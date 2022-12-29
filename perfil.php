<?php
require 'handlers/header.php';
require 'handlers/publicarObra.php';
require 'handlers/upload.php'
?>

<div class="contenedor-perfil">
    <img src="<?php echo $artista['imagen_perfil']; ?>" alt="" class="imagen-perfil">
    <p><?php
        $username = $artista['username'];
        echo "<h2>@" . $username . "</h2>";
        echo $artista['bio']; ?></p>
    <button type="button" onclick="">MODIFICAR PERFIL</button>
</div>
<div class="contenedor-contenido">
    <div class="publicar-obra">
        <div class="publicar-header">
            <h2 class="publicar-titulo">
                <i class="fas fa-pen" aria-hidden="true"></i>
                PUBLICAR
            </h2>
        </div>
        <form action="perfil.php" method="post" enctype="multipart/form-data">
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
    <div class="contenedor-grid">

        <?php
        $obra_detalles = mysqli_query($con, "SELECT * FROM obras WHERE username='$username'");
        while($obra = mysqli_fetch_array($obra_detalles)){
            echo " <div class='contenedor-contenido-2'>
                    <img src=".$obra['contenido']." style='position:relative; margin:10px auto; width:200px; height:200px;'/>
                    <p>".$obra['descripcion']."</p>
            </div> ";
        }
        ?>
    </div>
</div>

