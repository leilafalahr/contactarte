<?php
require 'config/configBD.php';

if (isset($_POST['iniciarsesion'])){
$emailLog = filter_var($_POST['emailLog'],FILTER_SANITIZE_EMAIL);
$_SESSION['emailLog'] = $emailLog;

$passwordLog = md5($_POST['passwordLog']);

$check_bd = mysqli_query($con, "SELECT * from usuarios WHERE email='$emailLog' AND password='$passwordLog'");
$check_login = mysqli_num_rows($check_bd);

    if($check_login == 1) {
        $row = mysqli_fetch_array($check_bd);
        $username = $row['username'];

        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    }
    else {
        array_push($error_array, "Email or password was incorrect<br>");
    }




}//iniciarsesion
