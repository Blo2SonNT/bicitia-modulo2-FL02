<?php
echo (!empty($_POST['name_form_user']) && isset($_POST['name_form_user'])) ? $correo = $_POS['correo'] : "<script>console.log('no existe la variable')</script>";
?>