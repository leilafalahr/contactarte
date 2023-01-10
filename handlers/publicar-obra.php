<?php
$error_array=array();

if (isset($_POST['publicar'])) {
    $descripcion = filter_var($_POST['descripcion'],FILTER_SANITIZE_STRING);
    if ($descripcion == '' OR empty($descripcion) OR $descripcion==null){
        array_push($error_array, "La publicación no puede estar vacía.");
    }else{
        if (empty($_FILES['imagen']['name'])){
            mysqli_query($con,"INSERT INTO obras (id_obra, username, descripcion,fecha_publicacion) VALUES (null,'$username','$descripcion',now())");
            header("Location: mi-perfil.php");
            exit();
        }else{
            $nombre_imagen = $_FILES['imagen']['name'];
            $ruta_imagen = $_FILES['imagen']['tmp'];
            if (is_uploaded_file($ruta_imagen)){
                $destino = 'assets/img/uploads/'.$nombre_imagen;
                $imagen_subida = $nombre_imagen;
                copy($ruta_imagen,$destino);
                mysqli_query($con,"INSERT INTO obras (id_obra, username, descripcion,contenido,fecha_publicacion) VALUES (null,'$username','$descripcion','$imagen_subida',now())");
            }
        }
    }

}