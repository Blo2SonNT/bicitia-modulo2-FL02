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
        <form action="validacion.php" method="POST">
            <div class="form-group">
                <label for="correo_user">Email</label>
                <input type="email" name="correo_user" class="form-control" id="correo_user">
            </div>
            <div class="form-group">
                <label for="pass_user">Contraseña</label>
                <input type="password" class="form-control" name="pass_user" id="pass_user">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
</body>

</html>