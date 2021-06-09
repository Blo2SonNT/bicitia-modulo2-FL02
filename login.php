<?php
// echo "<pre>";
// print_r($_POST);
$data_form = $_POST;

// $arreglo = [
//     ["nombre"=>"Juan", "apellido"=>"nieto", "edad"=>45],
//     ["nombre"=>"Andres", "apellido"=>"arango", "edad"=>15]
// ];

// for ($x=0; $x < sizeof($arreglo); $x++) { 
//     echo $arreglo[$x]["apellido"]."<br>";
// }

foreach($data_form as $key_papa => $valor_foca){
    echo $key_papa." : ".strtoupper($valor_foca)."<br>";
}