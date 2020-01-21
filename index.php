<?php
//el archivo login.php es el que realiza las validaciones
require_once('login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section id="container">
        <form action="" method="post">
            <h3>Iniciar Sesión</h3>
            <img src="img/login.png" alt="icono de inicio" width="200px" height="200px">
            <input type="text" name="usuario" id="" placeholder="Usuario">
            <input type="password" name="password" id="" placeholder="Contraseña">
            <div class="alert"><?php echo (isset($alert)) ? $alert : ''; ?></div>
            <input type="submit" value="INGRESAR">
        </form>
    </section>

</body>

</html>