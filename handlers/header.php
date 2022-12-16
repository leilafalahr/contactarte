<?php
require 'config/configBD.php';

if (isset($_SESSION['username'])){
    $userLoggeado = $_SESSION['username'];
}else{
    header('Location: registro.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact(arte)</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>
<body>
<div class="header"><!--header-->
    <a href="index.php"><img src="images/logo_contactarte_peq2.png" alt="" class="imagen-peq"></a>
    <a href="perfil.php" class="enlace-header" ><i class='fas fa-user-alt'style='color:black;font-size:20px'>  Mi perfil</i>
    </a>
    <a href="#" class="enlace-header"><i class='fas fa-comment-alt' style='color:black;font-size:20px'></i>
    </a>
    <a href="handlers/logout.php" class="enlace-header"><i class='fa fa-gear' style='color:black;font-size:20px'></i>
    </a>

</div> <!--header-->
