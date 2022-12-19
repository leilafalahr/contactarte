<?php
require 'handlers/header.php';
//si se le da click al submit postear obra
?>

<div class="contenedor-perfil">
    <img src="<?php echo $artista['imagen_perfil'];?>" alt="" class="imagen-perfil">
    <p><?php
        $username = $artista['username'];
        echo "<h2>@".$username."</h2>";
        echo $artista['bio'];?></p>
</div>
<div class="contenedor-contenido">
    <div class="publicar-obra">

<!--            --><?php
//            if (isset($_POST['post'])) {
//                $descripcion = $_POST['descripcion'];
//                $fecha_publicacion = date('d-m-Y H:i:s');
//                $publicadoPor = $username;
//
//                mysqli_query($con,"INSERT INTO obras(id_obra,username,descripcion,fecha_publicacion,contenido) VALUES (null, '$publicadoPor','$descripcion',$fecha_publicacion,null)");
//            }
//
//            ?>

            <div class="publicar-header">
                <h2 class="publicar-titulo">
                    <i class="fas fa-pen" aria-hidden="true"></i>
                    PUBLICAR
                </h2>
            </div>
            <form method="post" enctype="multipart/form-data" action="perfil.php">
                <div>
                    <textarea name="post" class="publicar-textarea" placeholder="Describe tu obra..."></textarea>
                </div>

                <div>
                    <div>
                        <button type="button" class="boton-publicar primero">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                subir
                        </button>
                        <input type="file" id="upload-image" multiple>
                    </div>
                    <div>
                        <button class="boton-publicar final">publicar</button>
                    </div>
                </div>
            </form>
    </div>

    <div class="obras-publicadas">
    </div>
</div>
