<?php

// Leer datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$clave = $_POST["clave"];

// Conectarse a la base de datos

include 'coneccion.php';

$sql = "delete from titulos where id_titulos = $clave"; 

echo "<br>" .$sql;

//Ejecutar instruccion de SQL
//mysqli_query(coneccion,$sql);

if (mysqli_query($coneccion,$sql)){
	echo "<h2><strong> Datos eliminados satisfactoriamente</strong></h2>";

}

else{
	echo "ERROR" .mysqli_query($coneccion);

}

	mysqli_close($coneccion);


header("Location:listadoEditorial2.php");

}

else
	echo "<h2><strong>No se leyo ningun dato</strong></h2>";


?>