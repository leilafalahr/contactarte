<?php
if (isset($_POST['publicar'])) {
    $descripcion = filter_var($_POST['descripcion'],FILTER_SANITIZE_STRING);
    mysqli_query($con,"INSERT INTO obras (id_obra, username, descripcion,fecha_publicacion) VALUES (null,'$username','$descripcion',now())");
    header("Location: mi-perfil.php");
    exit();
}