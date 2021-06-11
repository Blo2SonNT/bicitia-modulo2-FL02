<?php

require_once "class_conexion.php";

class Usuario extends Conexion_pp{
    private $nombre_user;
    private $apellido_user;
    private $correo_user;
    private $fec_nac_user;
    private $genero_user;
    private $acepta_tyc_user;
    private $conexion_bd;
    
    function __construct()
    {
        $this->conexion_bd = new Conexion_pp();
        $this->conexion_bd = $this->conexion_bd->conexion_bases_datos();
    }

    function crear_usuario($nombre, $apellido, $correo, $fec_nac, $genero, $tyc){
        $this->nombre_user = $nombre;
        $this->apellido_user = $apellido;
        $this->correo_user = $correo;
        $this->fec_nac_user = $fec_nac;
        $this->genero_user = $genero;
        $this->acepta_tyc_user = $tyc;

        $query = "INSERT INTO tb_usuarios (nombre, apellido, correo, fec_nac, genero, tyc) VALUES (?,?,?,?,?,?)";
        $insert = $this->conexion_bd->prepare($query);
        $array_data_user = array($this->nombre_user, 
                                $this->apellido_user, 
                                $this->correo_user,
                                $this->fec_nac_user,
                                $this->genero_user,
                                $this->acepta_tyc_user
                                );
        $insert->execute($array_data_user);
        $id_user_last = $this->conexion_bd->lastInsertId();
        return $id_user_last;
            

    }
}