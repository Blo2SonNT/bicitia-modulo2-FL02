<?php

class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $database = "julio_arango";
    private $conexion_resp;

    function __construct()
    {
        $pdo_conex = "mysql:hos=".$this->host.";dbname=".$this->database.";charset=utf8";
        try{
            $this->conexion_resp = new PDO($pdo_conex, $this->user, $this->pass);
            echo "Conexion exitosa :D";
        }catch(Exception $a){
            $this->conexion_resp = "Error al conectar con la BD";
            echo "Error :(    --->".$a->getMessage();
        }
    }

    function connect(){
        return $this->conexion_resp;
    }

}

$bictia_conexion = new Conexion;
?>

<img src="<?php $iimagen ?>" alt="">