<?php
require_once "includes/class_usuario.php";

$usuario_form = new Usuario();

$insert_user = $usuario_form->crear_usuario("miguel", "guitierrez", "correo@correo.com", "1999-12-24", 1, true);
echo $insert_user;

