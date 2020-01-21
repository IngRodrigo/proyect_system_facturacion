<?php
        //llamamos a conexion.php
        require_once('../Conexion.php');
if (!empty($_POST)) {//verificamos si llego algo por post
    $alert = "";//instanciamos la variable alert para los mensajes en la pagina
    if (
        //comprobamos que los campos no llegaron vacios
        empty($_POST['nombre']) ||
        empty($_POST['correo']) ||
        empty($_POST['usuario']) ||
        empty($_POST['clave'])
    )
    {//si llegaron vacios entonces
        //imprimimos el mensaje de error correspondiente dentro del formulario
        $alert='<p class="msg_error">Todos los campos son obligatorios</p>';
    }else{//si no llegaron vacios procedemos a

        //guardamos los parametros que llegan por post
        $nombre=$_POST['nombre'];
        $email=$_POST['correo'];
        $user=$_POST['usuario'];
        $password=md5($_POST['clave']);
        $rol=$_POST['rol'];
        
        //verificamos si el usuario ya existe preparando la consulta
        $sql="SELECT * FROM usuario WHERE usuario='$user' OR correo='$email'";
        //ejecutamos la consulta
        $query=mysqli_query($conexion, $sql);
        //guardamos el resultado
        $resultado=mysqli_fetch_array($query);
        //si el resultado es mayor que 0, quiere decir que ya existe en la base de datos un registro similar
        if($resultado>0){
            $alert='<p class="msg_error">El correo o el usuario ya existe en el sistema</p>';
        }else{//si no existe, procedemos a guardar el registro
            //consulta para insertar
            $sqlInsert="insert into usuario (nombre, correo, usuario, clave, rol) 
                        values ('$nombre','$email','$user','$password','$rol')";

//echo $sqlInsert;//descomentar para ver la cadena completa de insert que se esta enviando a la base de datos
                        
//ejecutamos el insert
            $queryInsert=mysqli_query($conexion,$sqlInsert);

            if($queryInsert){//si el insert retorna true es que se registro correctameente
                $alert='<p class="msg_save">Usuario registrado.</p>';//enviamos el mensaje de que todo salio bien
            }else{
                $alert='<p class="msg_error">Error al intentar registrar el usuario.</p>';//enviamos el mensaje del error
            }
        }
    }
}
?>