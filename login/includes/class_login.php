<?php

class login{
    public $usuario;
    public $password;

    function __construct($correo, $pass)
    {
        $this->usuario = $correo;
        $this->password = $pass;
    }

    function validar_usuario(){
        $usuario_real = "miguel@bictia.com"; //datos almacenados en la bd
        $pass_real = "miguelito123";//datos almacenados en la bd

        $mensaje_error = "Datos invalidos, rectifiquelos";

        if($this->usuario == $usuario_real){
            if($this->password == $pass_real){
                return "El usuario es correcto, bienvenido";
            }else{
                return $mensaje_error;
            }
        }else{
            return $mensaje_error;
        }
    }
}