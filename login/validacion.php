<?php
include_once "includes/class_login.php";

if (filter_var($_POST['correo_user'], FILTER_VALIDATE_EMAIL)) {
    $login_bictia = new login($_POST['correo_user'], $_POST['pass_user']);
    $valida_usuario = $login_bictia->validar_usuario();
    echo $valida_usuario;
}else{
    echo "Correo invalido";
}