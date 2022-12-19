<?php
class Obra
{
    private $usuario;
    private $con;

    public function __construct($usuario,$con){
        $this->con = $con;
        $this->usuario = new \classes\Usuario($con,$usuario);
    }

    public function crearObra($descripcion, $contenido){
        $descripcion = strip_tags($descripcion);
        $descripcion = mysqli_real_escape_string($this->con,$descripcion);

        $fechaPublicacion = date("d-m-Y-H-i-s");
        $publicadoPor = $this->usuario->getUsername();

        mysqli_query($this->con,"INSERT INTO obras VALUES (null, '$publicadoPor','$descripcion','$fechaPublicacion','$contenido')");

    }

}