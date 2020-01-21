<?php
//la carpeta modulos tiene los archivos php que realiza los procesos de cada pagina html, tienen el mismo nombre
require_once('modulos/registro_usuario.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <?php
    require_once('includes/scripts.php');
    ?>
    <title>Registro ususario</title>
</head>

<body>
    <?php
    require_once('includes/header.php')
    ?>
    <section id="container">
        <div class="from_registre">
            <h1>Registro Usuario</h1>
            <hr>
            <div class="alert"><?php echo isset($alert)? $alert:'';?></div>
            <form action="" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
                <label for="correo">Correo electronico</label>
                <input type="email" name="correo" id="" placeholder="Correo Electrónico">
                <label for="usuaario">Usuario</label>
                <input type="text" name="usuario" id="" placeholder="Nombre de usuario">
                <label for="password">Contraseña</label>
                <input type="password" name="clave" id="clave" placeholder="Contraseña">
                <label for="rol">Tipo de Usuario</label>
                <select name="rol" id="rol">
                    <option value="1">Adminsitrador</option>
                    <option value="2">Supervisor</option>
                    <option value="3">Vendedor</option>
                </select>
                <input type="submit" value="Crear Usuario" class="btn-save">
            </form>
        </div>
    </section>

    <?php
    require_once('includes/footer.php');
    ?>

</body>

</html>