<?php
require 'config/configBD.php';

if (isset($_POST['registrar'])) {

    //recibir los datos del post
    $nombre = filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
    $nombre = ucfirst(strtolower($nombre));//poner la primera letra en mayúscula
    $_SESSION['nombre'] = $nombre; //Recupera la variable de la sesión anterior

    $apellido = filter_var($_POST['apellido'],FILTER_SANITIZE_STRING);
    $apellido = ucfirst(strtolower($apellido));//poner la primera letra en mayúscula
    $_SESSION['apellido'] = $apellido; //Recupera la variable de la sesión anterior

    $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $_SESSION['username'] = $username; //Recupera la variable de la sesión anterior

    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $_SESSION['email'] = $email; //Recupera la variable de la sesión anterior

    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($_POST['tipoUsuario']=="artista"){
        $tipo_de_usuario = 0;
    } else{
        if($_POST['tipoUsuario']=="reclutador") {
            $tipo_de_usuario = 1;
        }
    }
    //Verificar que el email esta en formato correcto

    //Verificar que las contraseñas están correctas

    //Verificar que la contraseña tiene entre 30 y 5 caracteres

    //encriptar contraseña antes de enviarla a la BD
    $password = md5($password);

    //mandar los datos a la BD
    $query = mysqli_query($con, "INSERT INTO usuarios (id,nombre,apellido,username,email,password,tipo_de_usuario) VALUES (null, '$nombre', '$apellido', '$username', '$email', '$password', '$tipo_de_usuario')");

    //Limpiar las variables de sesión
    $_SESSION['nombre'] = "";
    $_SESSION['apellido'] = "";
    $_SESSION['username'] = "";
    $_SESSION['email'] = "";
    $_SESSION['password'] = "";
}//registrar
