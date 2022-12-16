<?php
require 'config/configBD.php';

if (isset($_POST['iniciarsesion'])){
$emailLog = filter_var($_POST['emailLog'],FILTER_SANITIZE_EMAIL);
$_SESSION['emailLog'] = $emailLog;

$passwordLog = md5($_POST['passwordLog']);

$check_bd = mysqli_query($con, "SELECT * from usuarios WHERE email='$emailLog' AND password='$passwordLog'");
$check_login = mysqli_num_rows($check_bd);

//
$checkEsReclutador = mysqli_query($con,"SELECT tipo_de_usuario FROM usuarios where tipo_de_usuario=1 AND username='$username'");
$consultaCheckReclutador = mysqli_num_rows($checkEsReclutador);

    if($check_login == 1) {
        $row = mysqli_fetch_array($check_bd);
        $username = $row['username'];

        $_SESSION['username'] = $username;

        if($consultaCheckReclutador == 1){
            header("Location: indexReclutador.php");
            exit();
        }else{

            header("Location: index.php");
            exit();
        }
    }else{
        array_push($error_array, "El email o la contraseña son incorrectos");
    }



}//iniciarsesion
