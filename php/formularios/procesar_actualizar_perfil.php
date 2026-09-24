<?php

$conexion = pg_connect(
    "host=" . getenv("DB_HOST") .
    " port=" . getenv("DB_PORT") .
    " dbname=" . getenv("DB_NAME") .
    " user=" . getenv("DB_USER") .
    " password=" . getenv("DB_PASSWORD") .
    " sslmode=require"
);

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido_1 = $_POST['apellido_1'];
$apellido_2 = $_POST['apellido_2'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

$resultado = pg_query_params(
    $conexion,
    "UPDATE dni
     SET nombre = $1,
         apellido_1 = $2,
         apellido_2 = $3,
         fecha_nacimiento = $4
     WHERE dni = $5",
    [
        $nombre,
        $apellido_1,
        $apellido_2,
        $fecha_nacimiento,
        $dni
    ]
);

if ($resultado) {
    echo "<h2>Datos actualizados correctamente</h2>";
    echo "<p>El individuo con DNI " . htmlspecialchars($dni) . " ha sido actualizado.</p>";
} else {
    echo "<h2>Error al actualizar los datos</h2>";
}

?>
