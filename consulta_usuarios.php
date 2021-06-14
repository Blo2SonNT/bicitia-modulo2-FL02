<?php
    require_once "includes/class_usuario.php";

    $usuario_form = new Usuario();

    $usuarios = $usuario_form->consulta_usuarios();
    print_r("<pre>");
    print_r($usuarios);
    //recuerden que esto va ligado a la clase usuario definida en la carpeta includes
    //deben de recorrer esa informacion usando for(recomendado) o foreach 