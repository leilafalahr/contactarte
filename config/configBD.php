<?php
require ('config.php');
ob_start(); //Turns on output buffering
session_start();

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); //Connection variable

if (mysqli_connect_errno()) {
    echo "Error al conectarse a la base de datos. " . mysqli_connect_errno();
}

?>