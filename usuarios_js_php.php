<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de usuario usando JS - PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <script>
        function alerta_usuario(valido) {
            if (valido) {
                Swal.fire({
                    icon: 'success',
                    title: 'Correcto',
                    text: 'Usuario valido',
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Usuario no valido'
                })
            }
        }
    </script>
    <?php
    if (!empty($_POST['name_form_user']) && isset($_POST['name_form_user'])) {
        echo '
            <script>alerta_usuario(true)</script>
            ';
        $insert_user = $usuario_form->crear_usuario($_POST['name_form_user'], $_POST['apell_form_user'], $_POST['email_form_user'], $_POST['date_form_user'], $_POST['genero_form_user'], true);
        echo $insert_user;
        return;
    } else {
        echo '
            <script>alerta_usuario(false)</script>
            ';
        return;
    }
    /*
    elseif (!filter_var($_POST['email_form_user'], FILTER_VALIDATE_EMAIL)) {
        echo '
            <div class="alert alert-danger" role="alert">
            EL CORREO NO ES VALIDO
            </div>
            ';
        return;
    }
    */


    ?>
</body>

</html>