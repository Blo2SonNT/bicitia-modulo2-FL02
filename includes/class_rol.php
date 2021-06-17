<?php

require_once "includes/class_conexion.php";
class Rol extends Conexion_pp{

    private $connect_db;

    function __construct()
    {
        $this->connect_db = new Conexion_pp();
        $this->connect_db = $this->connect_db->conexion_bases_datos();
    }

    function rol_sistema(){
        $query = "SELECT * FROM tb_rol";
        $select_rol = $this->connect_db->query($query);
        $respuesta = $select_rol->fetchall(PDO::FETCH_ASSOC);
        return $respuesta;
    }

}