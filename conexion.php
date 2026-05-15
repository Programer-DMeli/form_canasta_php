<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "meli";

    $conexion = mysqli_connect($host, $user, $password, $db) or die("Error conexion a la base de datos"); //permite la conexion a la base de datos
    mysqli_select_db($conexion, $db);
    mysqli_set_charset($conexion, "utf8");
?>
