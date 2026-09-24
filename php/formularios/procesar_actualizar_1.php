<?php

$conexion = pg_connect(
    "host=" . getenv("DB_HOST") .
    " port=" . getenv("DB_PORT") .
    " dbname=" . getenv("DB_NAME") .
    " user=" . getenv("DB_USER") .
    " password=" . getenv("DB_PASSWORD") .
    " sslmode=require"
);

if (!$conexion) {
    die("ERROR DE CONEXIÓN: " . pg_last_error());
}

$dni = $_POST['dni'];

$resultado = pg_query_params(
    $conexion,
    "SELECT dni, nombre, apellido_1, apellido_2, fecha_nacimiento
     FROM public.persona
     WHERE dni = $1",
    [$dni]
);

if (!$resultado) {
    die("ERROR EN LA CONSULTA: " . pg_last_error($conexion));
}

$fila = pg_fetch_assoc($resultado);

if (!$fila) {
    echo "No se ha encontrado ningún individuo con ese DNI.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos</title>
</head>

<body>

    <h2>Actualizar datos de individuos</h2>

    <form action="procesar_actualizar_perfil.php" method="POST">

        <label for="dni">DNI:</label>
        <input
            type="text"
            id="dni"
            name="dni"
            value="<?= htmlspecialchars($fila['dni']) ?>"
            readonly
        >

        <br><br>

        <label for="nombre">Nombre:</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            value="<?= htmlspecialchars($fila['nombre']) ?>"
            required
        >

        <br><br>

        <label for="apellido_1">Primer apellido:</label>
        <input
            type="text"
            id="apellido_1"
            name="apellido_1"
            value="<?= htmlspecialchars($fila['apellido_1']) ?>"
            required
        >

        <br><br>

        <label for="apellido_2">Segundo apellido:</label>
        <input
            type="text"
            id="apellido_2"
            name="apellido_2"
            value="<?= htmlspecialchars($fila['apellido_2']) ?>"
        >

        <br><br>

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input
            type="date"
            id="fecha_nacimiento"
            name="fecha_nacimiento"
            value="<?= htmlspecialchars($fila['fecha_nacimiento']) ?>"
            required
        >

        <br><br>

        <button type="submit">Guardar cambios</button>

    </form>

</body>

</html>
