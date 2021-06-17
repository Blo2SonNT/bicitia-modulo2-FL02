<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once "includes/class_usuario.php";

    $usuario_form = new Usuario();

    if(!isset($_GET['update'])){
        if (empty($_POST['name_form_user'])) {
            echo '
                <div class="alert alert-danger" role="alert">
                LLENE TODOS LOS CAMPOS
                </div>
                ';
            return;
        } elseif (!filter_var($_POST['email_form_user'], FILTER_VALIDATE_EMAIL)) {
            echo '
                <div class="alert alert-danger" role="alert">
                EL CORREO NO ES VALIDO
                </div>
                ';
            return;
        }
    
        $insert_user = $usuario_form->crear_usuario($_POST['name_form_user'],$_POST['apell_form_user'],$_POST['email_form_user'],$_POST['date_form_user'],$_POST['genero_form_user'],true, $_POST['rol_form_user']);
        echo $insert_user;
    }else{
        $update_user = $usuario_form->actualiza_usuario(
            $_POST['id_form_user'], 
            $_POST['name_form_user'],
            $_POST['apell_form_user'],
            $_POST['email_form_user'],
            $_POST['date_form_user'], 
            $_POST['genero_form_user'], 
            true,
            $_POST['rol_form_user']
        );
        echo $update_user;
    }

    ?>
</body>

</html>