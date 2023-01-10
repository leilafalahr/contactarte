<?php

$consulta_artistas= mysqli_query($con,"SELECT * FROM artistas");

$consulta_usuarios = mysqli_query($con, "SELECT * FROM usuarios WHERE tipo_de_usuario=0");
$fila_usuario = mysqli_fetch_array($consulta_usuarios);


//Se busca al artista por el username
if (isset($_GET['buscar'])){
    $busqueda = $_GET['busqueda'];
    $consulta_busqueda = mysqli_query($con,"SELECT * FROM artistas WHERE username LIKE '%$busqueda%'");

    while ($fila_busqueda = mysqli_fetch_array($consulta_busqueda)){

        echo '<div class="card mb-3 mx-auto" id="perfiles">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="'.  $fila_busqueda ['imagen_perfil'].'" class="img-fluid rounded-start" alt="imagen_perfil'.$fila_busqueda['username'].'">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">'.$fila_busqueda['username'].'</h5>
                        <p class="card-text">'. $fila_busqueda ['bio'].'</p>
                        <form action="perfil.php" method="get">
                        <!--Pasamos en un formulario los valores que obtenemos en esta página-->
                            <input type="hidden" name="username" value="'.$fila_busqueda['username'].'">
                            <input type="hidden" name="imagen_perfil" value="'. $fila_busqueda ['imagen_perfil'].'">
                            <input type="hidden" name="bio" value="'. $fila_busqueda ['bio'].'">
                            <input type="hidden" name="nombre" value="'.$fila_busqueda['nombre'].'">
                            <input type="hidden" name="apellido" value="'.$fila_busqueda['apellido'].'">
                            <input type="submit" class="btn btn-dark btn-block" value="Ver perfil">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>';
    }
}else{
    while($fila_artista = mysqli_fetch_array($consulta_artistas)){
        echo '<div class="card mb-3 mx-auto" id="perfiles">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="'. $fila_artista['imagen_perfil'].'" class="img-fluid rounded-start" alt="imagen_perfil'.$fila_artista['username'].'">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">'.$fila_artista['username'].'</h5>
                        <p class="card-text">'.$fila_artista['bio'].'</p>
                        <form action="perfil.php" method="get">
                        <!--Pasamos en un formulario los valores que obtenemos en esta página-->
                            <input type="hidden" name="username" value="'.$fila_artista['username'].'">
                            <input type="hidden" name="imagen_perfil" value="'.$fila_artista['imagen_perfil'].'">
                            <input type="hidden" name="bio" value="'.$fila_artista['bio'].'">
                            <input type="hidden" name="nombre" value="'.$fila_usuario['nombre'].'">
                            <input type="hidden" name="apellido" value="'.$fila_usuario['apellido'].'">
                            <input type="submit" class="btn btn-dark btn-block" value="Ver perfil">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>';
    }
}

 ?>

