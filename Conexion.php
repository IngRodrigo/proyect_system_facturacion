<?php
$host='localhost';
$user='root';
$password='root';
$db='tienda';

$conexion= @mysqli_connect($host,$user,$password,$db);

if(!$conexion){
echo 'Error en la conexion: ';
}

/*function ConexionMysqli(){
    $host='localhost';
    $user='root';
    $password='';
    $db='tienda';

    $conexionMysqli=mysqli_connect($host, $user, $password, $db);

    mysqli_query($conexionMysqli, "chart utf-8");

    if(!$conexionMysqli){
        echo 'Error';
        
    }else{
        //var_dump($conexionMysqli);
    }
    return $conexionMysqli;
}*/


?>
