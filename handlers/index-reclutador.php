<?php

$consulta = mysqli_query($con,"SELECT * FROM artistas");

while($fila = mysqli_fetch_array($consulta)){
            echo '<div class="card mb-3 mx-auto" id="perfiles">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="'. $fila['imagen_perfil'].'" class="img-fluid rounded-start" alt="imagen_perfil'.$fila['username'].'">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">'.$fila['username'].'</h5>
                        <p class="card-text">'.$fila['bio'].'</p>
                        <a href="perfil.php" class="btn btn-dark btn-block">Ver perfil</a>
                      </div>
                    </div>
                  </div>
                </div>';
        }
 ?>

