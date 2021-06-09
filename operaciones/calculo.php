<?php

include_once "../includes/class_operacion.php";
$operaciones_bictia = new Operacion(85,125);

$multiplicacion2 = $operaciones_bictia->multiplicacion_numeros();
echo $multiplicacion2;