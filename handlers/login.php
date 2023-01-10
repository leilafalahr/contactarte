<?php
require 'config/configBD.php';

if (isset($_POST['sign-in'])){
    //Recibimos los datos del formulario
$emailLog = filter_var($_POST['emailLog'],FILTER_SANITIZE_EMAIL);
    //Abrimos una variable de sesión con el email insertado.
$_SESSION['emailLog'] = $emailLog;

    //Encriptamos la contraseña para que coincida con la que está en la BD
$passwordLog = md5($_POST['passwordLog']);

    //Consultamos que se encuentra en la BD
$check_bd = mysqli_query($con, "SELECT * from usuarios WHERE email='$emailLog' AND password='$passwordLog'");
$check_login = mysqli_num_rows($check_bd);


 if($check_login == 1) {
        $row = mysqli_fetch_array($check_bd);
        $username = $row['username'];

        $checkEsReclutador = mysqli_query($con,"SELECT tipo_de_usuario FROM usuarios where tipo_de_usuario=1 AND username='$username'");
        $consultaCheckReclutador = mysqli_num_rows($checkEsReclutador);

        $_SESSION['username'] = $username;

        if($consultaCheckReclutador == 1){
            //abrir sesion como reclutador
            $check_artista = mysqli_query($con, "SELECT * FROM reclutadores WHERE username='$username'");
            $filaReclutador = mysqli_fetch_array($check_artista);
            $usernameReclutador = $filaReclutador['username'];
            $_SESSION['username'] = $usernameReclutador;

            header("Location: index.php");
            exit();
        }else{
            //abrir sesion como artista
            $check_artista = mysqli_query($con, "SELECT * FROM artistas WHERE username='$username'");
            $filaArtista = mysqli_fetch_array($check_artista);
            $usernameArtista = $filaArtista['username'];
            $_SESSION['username'] = $usernameArtista;

            header("Location: index.php");
            exit();
        }
    }else{ //
        array_push($error_array, "El email o la contraseña son incorrectos o no existen.");
    }



}//iniciarsesion
