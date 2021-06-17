<?php
require_once "class_conexion.php";
class Genero extends Conexion_pp{
    private $conexion_bd;

    //METODO CONSTRUCTOR PARA HACER LA CONEXION A LA BASE DE DATOS HEREDANDO LOS METODOS DE LA CLASE CONEXION
    function __construct()
    {
        $this->conexion_bd = new Conexion_pp();
        $this->conexion_bd = $this->conexion_bd->conexion_bases_datos();
    }

    function get_generos(){
        $query = "SELECT * FROM tb_generos";
        $select_generos = $this->conexion_bd->query($query);
        $respuesta = $select_generos->fetchall(PDO::FETCH_ASSOC);
        return $respuesta;
    }

}