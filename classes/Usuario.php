<?php

namespace classes;

class Usuario
{
    private $usuario;
    private $conexion;

    public function __construct($conexion,$usuario)
    {
        $this->conexion = $conexion;
        $detalles_usuario_query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username='$usuario'");
        $this->usuario = mysqli_fetch_array($detalles_usuario_query);
    }

    public function getUsername(){
        return $this->usuario['username'];
    }

    public function getNombreYApellido(){
        $username = $this->usuario['username'];
        $query = mysqli_query($this->conexion, "SELECT nombre, apellido FROM usuarios WHERE username='$username'");
        $row = mysqli_fetch_array($query);
        return $row['nombre'] . " " . $row['apellido'];
    } //obtener el nombre de apellido
    //Se asigna a la variable el username del usuario y asi poder hacer la busqueda


}// Clase Usuario


