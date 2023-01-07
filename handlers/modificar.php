<?php
$error_array = "";
$username = $artista['username'];

if(isset($_POST['guardar'])){
    $nuevoUsername = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bio = $_POST['bio'];

    //Verificar que el correo ya está en uso
    $emailExiste = mysqli_query($con, "SELECT email from usuarios WHERE email='$email'");
    $checkEmail = mysqli_num_rows($emailExiste);

    if($checkEmail > 0) {
        array_push($error_array,"El correo electrónico ya está en uso.");
    }
    //Verificar que el username ya está en uso
    $usernameExiste = mysqli_query($con, "SELECT username from usuarios WHERE username='$username'");
    $checkUsername = mysqli_num_rows($usernameExiste);

    if($checkUsername > 0) {
        array_push($error_array,"El username ya está en uso.");
    }

    //Verificar que la contraseña tiene entre 20 y 5 caracteres
    if(strlen($password)>20 OR strlen($password<5)){
        array_push($error_array, "La contraseña tiene que tener entre 20 y 5 caracteres.");
    }
    //encriptar contraseña antes de enviarla a la BD
    if(empty($error_array)) {
        $password = md5($password);
    }

    if($email != "" OR $email != null){
        mysqli_query($con,"UPDATE usuarios SET email='$email' WHERE username='$username' ON CASCADE");
    }
    if($password != "" OR $password != null){
        mysqli_query($con,"UPDATE usuarios SET password='$password' WHERE username='$username' ON CASCADE");
    }
    if($bio != "" OR $bio != null){
        mysqli_query($con,"UPDATE artistas SET bio='$bio' WHERE username='$username'");
    }
    header("location: mi-perfil.php");
    exit();
}

if(isset($_POST['salir'])){
    header("location: mi-perfil.php");
    exit();
}

if(isset($_POST['eliminar-cuenta'])){
    mysqli_query($con,"DELETE FROM usuarios WHERE username='$username'");
    header("Location: iniciar-sesion.php");
}