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
        <div class="row">
            <div class="col-6">
                <form action="usuarios.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name_form_user">Nombre</label>
                            <input type="text" name="name_form_user" class="form-control" id="name_form_user">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apell_form_user">Apellido</label>
                            <input type="text" name="apell_form_user" class="form-control" id="apell_form_user">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_form_user">Correo</label>
                        <input type="email" class="form-control" name="email_form_user" id="email_form_user">
                    </div>
                    <div class="form-group">
                        <label for="date_form_user">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="date_form_user" name="date_form_user">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="genero_form_user">Genero</label>
                            <select id="genero_form_user" name="genero_form_user" class="form-control">
                                <option disable selected value="">Seleccione uno...</option>
                                <option value="1">Hombre</option>
                                <option value="2">Mujer</option>
                                <option value="3">Pokemon</option>
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
        </div>
    </div>
</body>

</html>