<?php

// Leer datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$nombre = $_POST["nombre"];
$estado = $_POST["estado"];
$ciudad = $_POST["ciudad"];

// Conectarse a la base de datos

include 'coneccion.php';

$sql = "INSERT INTO editoriales (nombre_editorial,ciudad, estado) 
VALUES ('$nombre', '$ciudad', '$estado')";

echo "<br>" .$sql;

//Ejecutar instruccion de SQL
//mysqli_query(coneccion,$sql);

if (mysqli_query($coneccion,$sql)){
	echo "<h2><strong>Agregado satisfactioramente</strong></h2>";

}

else{
	echo "ERROR" .mysqli_query($coneccion);

}


header("Location:listadoEditorial.php");
}

else
	echo "<h2><strong>No se leyo ningun dato</strong></h2>";


?>



<!--echo "<h2><strong>Datos recibidos:</strong></h2>";
echo "<p><Nombre:</strong> " . $nombre . "</p>";
echo "<p><Estado:</strong> " . $estado . "</p>";
echo "<p><Strong>Ciudad:</strong> " . $ciudad . "</p>"; -->

