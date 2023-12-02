<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "publicaciones";


    $coneccion = mysqli_connect($server, $user, $pass,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    mysqli_set_charset($coneccion, "utf8");     


?>