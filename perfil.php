<?php
require('handlers/header.php');
$username = $_GET['username'];
$imagen_perfil = $_GET['imagen_perfil'];
$bio = $_GET['bio'];

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];


?>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xs-6 ">
                <div class="card" id="card" style="width:300px">
                    <img class="card-img-top" src="<?= $imagen_perfil ?>" alt="imagen_perfil">
                    <div class="card-body">
                        <h4 class="card-title"> <?= $nombre . " " . $apellido?>
                            (@<?= $username ?>)</h4>
                        <span</span>
                        <p class="card-text"><?= $bio ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 col-xs-6">
                <div class="card card-feed-perfil">
                    <div class="gallery">
                        <?php
                        $obra_detalles = mysqli_query($con, "SELECT * FROM obras WHERE username='$username'");
                        while ($obra = mysqli_fetch_array($obra_detalles)) {
                            echo '
                              <div class="card" id="feed-perfil">
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
<?php
