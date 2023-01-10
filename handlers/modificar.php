<?php
require ("config/configBD.php");

$username = $usuario['username'];


if(isset($_POST['salir'])){
    header("location: mi-perfil.php");
    exit();
}

if(isset($_POST['guardar-artista'])){
    //Recibimos los datos que se obtienen del formulario
    $nuevoUsername = $_POST['username-mod'];
    $email = $_POST['email-mod'];
    $password = $_POST['password-mod'];
    $bio = $_POST['bio-mod'];

    //Si los datos recibidos están vacíos, se mantienen los valores anteriores
    if ($nuevoUsername == '' OR empty($nuevoUsername) OR $nuevoUsername==null){
        $nuevoUsername=$username;
    }
    if ($email == '' OR empty($email) OR $email==null){
        $email=$usuario['email'];
    }
    if ($password == '' OR empty($password) OR $password==null){
        $password=$usuario['$password'];
    }
    if ($bio == '' OR empty($bio) OR $bio==null){
        $bio=$artista['bio'];
    }


    //Encripta la contraseña
    $password = md5($password);
    if (empty($error_array)){
        //Queries para editar las tablas
        mysqli_query($con,"UPDATE usuarios SET email='$email',password='$password'WHERE username='$username'");
        mysqli_query($con,"UPDATE artistas SET bio='$bio' WHERE username='$username'");
        //Quitamos la protección de las claves foráneas
        mysqli_query($con, "SET FOREIGN_KEY_CHECKS=0");
        mysqli_query($con,"UPDATE usuarios SET username='$nuevoUsername' WHERE username='$username'");
        mysqli_query($con,"UPDATE artistas SET username='$nuevoUsername' WHERE username='$username'");
        //Volvemos a darle protección de las claves foráneas
        mysqli_query($con, "SET FOREIGN_KEY_CHECKS=1");

        //Editamos en la tabla obras el username
        mysqli_query($con,"UPDATE obras SET username='$nuevoUsername' WHERE username='$username'");

        //Actualizamos la variable de sesión
        $_SESSION['username'] = $nuevoUsername;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;


        //Volvemos a mi perfil
        header("Location: mi-perfil.php");
        exit();
    }
}

if(isset($_POST['guardar-reclutador'])){
    //Recibimos los datos que se obtienen del formulario
    $nuevoUsername = $_POST['username-mod'];
    $email = $_POST['email-mod'];
    $password = $_POST['password-mod'];
    $descripcion = $_POST['$descripcion-mod'];
    $num = $_POST['numtelefono-mod'];


    //Si los datos recibidos están vacíos, se mantienen los valores anteriores
    if ($nuevoUsername == '' OR empty($nuevoUsername) OR $nuevoUsername==null){
        $nuevoUsername=$username;
    }
    if ($email == '' OR empty($email) OR $email==null){
        $email=$usuario['email'];
    }
    if ($password == '' OR empty($password) OR $password==null){
        $password=$usuario['$password'];
    }
    if ($descripcion == '' OR empty($descripcion) OR $descripcion==null){
        $descripcion=$reclutador['descripcion'];
    }
    if ($num == '' OR empty($num) OR $num==null){
        $num=$reclutador['num_de_telefono'];
    }

    //Encripta la contraseña
    $password = md5($password);

    if (empty($error_array)){
        //Queries para editar las tablas
        mysqli_query($con,"UPDATE usuarios SET email='$email',password='$password'WHERE username='$username'");
        mysqli_query($con,"UPDATE reclutadores SET descripcion='$descripcion',num_de_telefono='$num' WHERE username='$username'");
        //Quitamos la protección de las claves foráneas
        mysqli_query($con, "SET FOREIGN_KEY_CHECKS=0");
        mysqli_query($con,"UPDATE usuarios SET username='$nuevoUsername' WHERE username='$username'");
        mysqli_query($con,"UPDATE reclutadores SET username='$nuevoUsername' WHERE username='$username'");
        //Volvemos a darle protección de las claves foráneas
        mysqli_query($con, "SET FOREIGN_KEY_CHECKS=1");

        //Actualizamos la variable de sesión
        $_SESSION['username'] = $nuevoUsername;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;

        //Volvemos a mi perfil
        header("Location: mi-perfil.php");
        exit();
    }
}

//Eliminar las cuentas y por lo tanto, destruir la sesión activa.
if(isset($_POST['eliminar-cuenta-artista'])){
    mysqli_query($con, "SET FOREIGN_KEY_CHECKS=0");
    mysqli_query($con,"DELETE FROM usuarios WHERE username='$username'");
    mysqli_query($con,"DELETE FROM artistas WHERE username='$username'");
    mysqli_query($con, "SET FOREIGN_KEY_CHECKS=1");
    session_destroy();
    header("Location: iniciar-sesion.php");
    exit();
}
if(isset($_POST['eliminar-cuenta-reclutador'])){
    mysqli_query($con, "SET FOREIGN_KEY_CHECKS=0");
    mysqli_query($con,"DELETE FROM usuarios WHERE username='$username'");
    mysqli_query($con,"DELETE FROM reclutadores WHERE username='$username'");
    mysqli_query($con, "SET FOREIGN_KEY_CHECKS=1");
    session_destroy();
    header("Location: iniciar-sesion.php");
    exit();
}

