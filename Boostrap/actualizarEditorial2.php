<?php

// Leer datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_titulos = $_POST["id_titulos"];
    $titulo = $_POST["titulo"];
    $tipo = $_POST["tipo"];
    $precio = $_POST["precio"];
    $adelanto = $_POST["adelanto"];
    $ventas_totales = $_POST["ventas_totales"];
    $fecha_publicacion = $_POST["fecha_publicacion"];
    $nota = $_POST["nota"];
    $id_editoriales = $_POST["id_editoriales"];

    // Conectarse a la base de datos
    include 'coneccion.php';

    $sql = "INSERT INTO tabla_nombre (
                id_titulos, titulo, tipo, precio, adelanto, ventas_totales,
                fecha_publicacion, nota, id_editoriales
            ) VALUES (
                $id_titulos, '$titulo', '$tipo', $precio, $adelanto, $ventas_totales,
                '$fecha_publicacion', '$nota', $id_editoriales
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
