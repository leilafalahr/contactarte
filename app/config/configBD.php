<?php

ob_start(); //Turns on output buffering
session_start();

$con = mysqli_connect("localhost", "admin", "admin", "contactarte"); //Connection variable

if (mysqli_connect_errno()) {
    echo "Error al conectarse a la base de datos. " . mysqli_connect_errno();
}

?>