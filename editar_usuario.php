<?php
require_once "includes/class_usuario.php";
require_once "includes/class_generos.php";
require_once "includes/class_rol.php";

$usuario_form = new Usuario();
$generos_db = new Genero();
$rol_sistema = new Rol();

$usuarios = $usuario_form->consulta_usuario_x_id($_GET['gato_user']);
$genero_list = $generos_db->get_generos();
$rol_list = $rol_sistema->rol_sistema();
// print_r("<pre>");
// print_r($genero_list);exit;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="usuarios.php?update=1" method="POST">
            <input type="hidden" name="id_form_user" value="<?php echo $usuarios['id_usuario'] ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name_form_user">Nombre</label>
                    <input type="text" name="name_form_user" class="form-control" id="name_form_user" value="<?php echo $usuarios['nombre'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="apell_form_user">Apellido</label>
                    <input type="text" name="apell_form_user" class="form-control" id="apell_form_user" value="<?php echo $usuarios['apellido'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="email_form_user">Correo</label>
                <input type="email" class="form-control" name="email_form_user" id="email_form_user" value="<?php echo $usuarios['correo'] ?>">
            </div>
            <div class="form-group">
                <label for="date_form_user">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="date_form_user" name="date_form_user" value="<?php echo $usuarios['fec_nac'] ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="genero_form_user">Genero</label>
                    <select id="genero_form_user" name="genero_form_user" class="form-control">
                        <option disabled value="">Seleccione uno...</option>
                        <?php
                        foreach ($genero_list as $data_genero) {
                        ?>
                            <option <?php echo ($usuarios['genero'] == $data_genero['id_genero']) ? "selected" : ""; ?>><?php echo $data_genero['nombre'] ?></option>;
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="rol_form_user">Rol usuario</label>
                    <select id="rol_form_user" name="rol_form_user" class="form-control">
                        <option disabled value="">Seleccione uno...</option>
                        <?php
                        //FORMA 3.1
                        foreach ($rol_list as $data_rol) {
                        ?>
                            <option <?php echo ($usuarios['id_rol'] == $data_rol['id_rol']) ? "selected": ""; ?> value="<?php echo $data_rol['id_rol'] ?>"><?php echo $data_rol['nombre'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tyc_form_user" id="tyc_form_user">
                    <label class="form-check-label" for="tyc_form_user">
                        Acepta terminos y condiciones
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar datos</button>
        </form>
    </div>
</body>

</html>