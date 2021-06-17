<?php

require_once "class_conexion.php";

class Usuario extends Conexion_pp
{
    private $nombre_user;
    private $apellido_user;
    private $correo_user;
    private $fec_nac_user;
    private $genero_user;
    private $acepta_tyc_user;
    private $rol_usuario;
    private $conexion_bd;


    //METODO CONSTRUCTOR PARA HACER LA CONEXION A LA BASE DE DATOS HEREDANDO LOS METODOS DE LA CLASE CONEXION
    function __construct()
    {
        $this->conexion_bd = new Conexion_pp();
        $this->conexion_bd = $this->conexion_bd->conexion_bases_datos();
    }


    //METODO QUE NOS PERMITE A NOSOTROS CREAR UN DATO PARA GUARDALO EN LA BD
    function crear_usuario($nombre, $apellido, $correo, $fec_nac, $genero, $tyc, $rol)
    {
        $this->nombre_user = $nombre;
        $this->apellido_user = $apellido;
        $this->correo_user = $correo;
        $this->fec_nac_user = $fec_nac;
        $this->genero_user = $genero;
        $this->acepta_tyc_user = $tyc;
        $this->rol_usuario = $rol;

        $query = "INSERT INTO tb_usuarios (nombre, apellido, correo, fec_nac, genero, tyc, id_rol) VALUES (?,?,?,?,?,?,?)";
        $insert = $this->conexion_bd->prepare($query);
        $array_data_user = array(
            $this->nombre_user,
            $this->apellido_user,
            $this->correo_user,
            $this->fec_nac_user,
            $this->genero_user,
            $this->acepta_tyc_user,
            $this->rol_usuario
        );
        $insert->execute($array_data_user);
        $id_user_last = $this->conexion_bd->lastInsertId();
        return $id_user_last;
    }

    //METODO QUE NOS PERMITE CONSULTAR TODA LA INFORMACION DE UNA TABLA
    function consulta_usuarios()
    {
        $query_consulta = "SELECT * FROM tb_usuarios";
        $consulta = $this->conexion_bd->query($query_consulta);
        $respuesta = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $respuesta;
    }

    //METODO QUE NOS PERMITE CONSULTAR UN USUARIO EN ESPECIFICO
    function consulta_usuario_x_id($id)
    {
        $query_x_id = "SELECT * FROM tb_usuarios WHERE id_usuario = ?";
        $consulta = $this->conexion_bd->prepare($query_x_id);
        $array_where = array($id);
        $consulta->execute($array_where);
        $respuesta = $consulta->fetch(PDO::FETCH_ASSOC);
        return $respuesta;
    }

    //METODO QUE NOS PERMITE A NOSOTROS ACTUALIZAR LOS DATOS DEL USUARIO
    function actualiza_usuario($id, $nombre, $apellido, $correo, $fec_nac, $genero, $tyc, $id_rol)
    {
        $this->nombre_user = $nombre;
        $this->apellido_user = $apellido;
        $this->correo_user = $correo;
        $this->fec_nac_user = $fec_nac;
        $this->genero_user = $genero;
        $this->acepta_tyc_user = $tyc;
        $this->rol_usuario = $id_rol;

        $query_update = "UPDATE tb_usuarios SET nombre = ?, apellido = ?, correo = ?, fec_nac = ?, genero = ?, tyc = ?, id_rol = ? WHERE id_usuario = $id";
        $update = $this->conexion_bd->prepare($query_update);
        $array_update = array(
            $this->nombre_user,
            $this->apellido_user,
            $this->correo_user,
            $this->fec_nac_user,
            $this->genero_user,
            $this->acepta_tyc_user,
            $this->rol_usuario
        );
        $respuesta = $update->execute($array_update);
        return $respuesta;
    }

    //METODO QUE NOS PERMITE BORRAR UN DATO DE NUESTRA TABLA
    function eliminar_usuario($id)
    {
        $query_x_id = "DELETE FROM tb_usuarios WHERE id_usuario = ?";
        $consulta = $this->conexion_bd->prepare($query_x_id);
        $array_where = array($id);
        $consulta->execute($array_where);
        return "Usuario eliminado correctamente";
    }
}
