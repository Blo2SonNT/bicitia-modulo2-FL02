<?php
require_once "includes/class_usuario.php";

$usuario_form = new Usuario();

$usuarios = $usuario_form->consulta_usuarios();
// print_r("<pre>");
// print_r($usuarios);exit;
//recuerden que esto va ligado a la clase usuario definida en la carpeta includes
//deben de recorrer esa informacion usando for(recomendado) o foreach 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios existentes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <body>
        <a href="formulario_user.php" target="_blank"><button class="btn btn-primary">CREAR USUARIO</button></a>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Correo</th>
                </tr>
            </thead>
            <tbody>

                <?php

                //FORMA 1
                for ($record = 0; $record < sizeof($usuarios); $record++) {
                ?>
                    <tr>
                        <td><?php echo $usuarios[$record]['nombre'] ?></td>
                        <td><?php echo $usuarios[$record]['apellido'] ?></td>
                        <td><?php echo $usuarios[$record]['genero'] ?></td>
                        <td><?php echo $usuarios[$record]['correo'] ?></td>
                        <td><?php echo $usuarios[$record]['fec_nac'] ?></td>
                        <td>
                            <a href="editar_usuario.php?gato_user=<?php echo $usuarios[$record]['id_usuario'] ?>">
                                <button class="btn btn-warning">Editar</button>
                            </a>
                        </td>
                    </tr>
                <?php
                }

                ?>


            </tbody>
        </table>
    </body>
</body>

</html>