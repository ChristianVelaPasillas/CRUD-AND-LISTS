<?php

// Leer datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$clave = $_POST["clave"];
$nombre = $_POST["nombre"];
$estado = $_POST["estado"];
$ciudad = $_POST["ciudad"];

// Conectarse a la base de datos

include 'coneccion.php';

$sql = "UPDATE editoriales set nombre_editorial = '$nombre' , ciudad = '$ciudad' , estado = '$estado' where id_editoriales = $clave"; 

echo "<br>" .$sql;

//Ejecutar instruccion de SQL
//mysqli_query(coneccion,$sql);

if (mysqli_query($coneccion,$sql)){
	echo "<h2><strong> Datos Agregado satisfactioramente</strong></h2>";

}

else{
	echo "ERROR" .mysqli_query($coneccion);

}

	mysqli_close($coneccion);



header("Location:listadoEditorial.php");

}

else
	echo "<h2><strong>No se leyo ningun dato</strong></h2>";


?>
