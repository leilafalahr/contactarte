<?php
$username = $artista['username'];
require("publicar-obra.php");
?>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xs-6 ">
                <div class="card" id="card" style="width:300px">
                    <img class="card-img-top" src="<?= $artista['imagen_perfil'] ?>" alt="imagen_perfil">
                    <div class="card-body">
                        <h4 class="card-title"> <?= $usuario['nombre'] . " " . $usuario['apellido'] ?>
                            (@<?= $username ?>)</h4>
                        <span</span>
                        <p class="card-text"><?= $artista['bio'] ?></p>
                        <a href="modificarPerfil.php" class="btn btn-dark btn-lg btn-block">Modificar perfil</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 col-xs-6">
                <div class="grid">
                    <div class="card card-post">
                        <div>
                            <div class="publicar-obra">
                                <div class="publicar-header">
                                    <h1 class="publicar-titulo">
                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                        PUBLICAR
                                    </h1>
                                </div>
                                <form action="mi-perfil.php" method="post">
                                    <div>
                                        <input type="text" class="publicar-textarea" placeholder="Escribe o describe tu obra..." name="descripcion">
<!--                                        <input class="form-control" type="file" id="formFileMultiple" style="width:max-content ">-->
                                        <input type="submit" class="btn btn-dark btn-lg btn-block already-account" name="publicar" value="publicar">
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                    <div class="card card-feed-perfil">
                        <div class="gallery">
                            <?php
                            $obra_detalles = mysqli_query($con, "SELECT * FROM obras WHERE username='$username'");
                            while ($obra = mysqli_fetch_array($obra_detalles)) {
                                echo '
                              <div class="card" id="feed-perfil">
                                <div class="card-header">
                                 <h6>' . $obra['fecha_publicacion'] . '</h6>
                                </div>
                                <img class="card-img-top" src="' . $obra['contenido'] . '">
                                <div class="card-body">
                                  <h5 class="card-title">' . $obra['descripcion'] . '</h5>
                                </div>
                              </div>
                          ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

