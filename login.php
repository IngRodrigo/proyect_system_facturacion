<?php
$alert = "";
session_start();
if (!empty($_SESSION['active'])) {
   header('Location:sistema/');
} else {
    if (!empty($_POST)) {
        if (empty($_POST['usuario']) || empty($_POST['password'])) {
            echo $alert = "El usuario y la contraseña no puede estar vacio";
        } else {

            require_once('Conexion.php');

            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $pass = md5(mysqli_real_escape_string($conexion, $_POST['password']));

            $sql = "select * from usuario where usuario='$user' and clave='$pass'";
            $query = mysqli_query($conexion, $sql);


            $result = mysqli_num_rows($query);

            if ($result > 0) {
                $data = mysqli_fetch_assoc($query);

                $_SESSION['active'] = true;
                $_SESSION['iduser'] = $data['idusuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['email'] = $data['correo'];
                $_SESSION['user'] = $data['usuario'];
                $_SESSION['rol'] = $data['rol'];

                header('Location:sistema/');
            } else {
                echo $alert = "El usuario o la clave son invalidos";
                session_destroy();
            }
        }
    }
}
?>