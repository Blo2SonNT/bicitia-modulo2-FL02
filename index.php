<?php
require_once "includes/class_operacion.php";
$operaciones_bictia = new Operacion(85,125);

//suma
$suma_foca = $operaciones_bictia->suma_numeros();
echo $suma_foca;
echo "<br><hr>";

//resta
$resta_foca = $operaciones_bictia->resta_numeros();
echo $resta_foca;
echo "<br><hr>";

//multiplicacion
$multiplicar = $operaciones_bictia->multiplicacion_numeros();
echo $multiplicar;
echo "<br><hr>";

//division
$division = $operaciones_bictia->divide_numeros();
echo $division;
echo "<br><hr>";

?>

















