<?php
$username = $artista['username'];

?>
    <div class="gallery">
        <?php
        $obra_detalles = mysqli_query($con, "SELECT * FROM obras WHERE NOT username='$username'");
        while ($obra = mysqli_fetch_array($obra_detalles)) {
            echo '
                              <div class="card" id="feed-perfil">
                              <div class="card-header">
                                  <h6>@' . $obra['username'] . '</h6>
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
