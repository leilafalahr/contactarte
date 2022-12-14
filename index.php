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
</head>
<body>
<center><h1>HOLA MUNDO</h1></center>
</body>
</html>