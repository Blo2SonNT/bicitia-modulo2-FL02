<?php

class Conexion_pp{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "julio_arango";
    private $connect_db;

    function __construct()
    {
        $foca_conectate = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->connect_db = new PDO($foca_conectate, $this->user, $this->pass);
            // echo "la conexion se realizo correctamente :D";
        }catch(Exception $s){
            $this->connect_db = "Error al conectar con la BD :(  ";
            echo $this->connect_db.$s->getMessage();
        }
    }

    function conexion_bases_datos(){
        return $this->connect_db;
    }
}

