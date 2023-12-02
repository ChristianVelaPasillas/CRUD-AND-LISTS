<?php

// Leer datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST["titulo"];
    $tipo = $_POST["tipo"];
    $precio = $_POST["precio"];
    $adelanto = $_POST["adelanto"];
    $ventas_totales = $_POST["ventas_totales"];
    $fecha_publicacion = $_POST["fecha_publicacion"];
    $nota = $_POST["nota"];

    // Conectarse a la base de datos
    include 'coneccion.php';

    $sql = "INSERT INTO tabla_nombre (
                titulo, tipo, precio, adelanto, ventas_totales,
                fecha_publicacion, nota
            ) VALUES (
                '$titulo', '$tipo', '$precio', '$adelanto', '$ventas_totales',
                '$fecha_publicacion', '$nota'
            )";

    // Ejecutar instrucción SQL
    if (mysqli_query($coneccion, $sql)) {
        echo "<h2><strong>Agregado satisfactoriamente</strong></h2>";
    } else {
        echo "ERROR: " . mysqli_error($coneccion);
    }

    mysqli_close($coneccion);

    header("Location: listadoEditorial2.php");
} else {
    echo "<h2><strong>No se leyó ningún dato</strong></h2>";
}

?>
