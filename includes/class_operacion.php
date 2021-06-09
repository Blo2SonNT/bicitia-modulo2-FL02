<?php

class Operacion{
    public $numero1;
    public $numero2;
    public $resultado;

    function __construct($cantidad1, $cantidad2)
    {
        $this->numero1 = $cantidad1;
        $this->numero2 = $cantidad2;
    }

    function suma_numeros(){
        $this->resultado = $this->numero1 + $this->numero2;
        return $this->resultado;
    }

    function resta_numeros(){
        $this->resultado = $this->numero1 - $this->numero2;
        return $this->resultado;
    }

    function multiplicacion_numeros(){
        $this->resultado = $this->numero1 * $this->numero2;
        return $this->resultado;
    }

    function divide_numeros(){
        $this->resultado = $this->numero1 / $this->numero2;
        return $this->resultado;
    }
}