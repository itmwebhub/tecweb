<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado búsqueda por DNI</title>
</head>
<body>

    <h1>Resultado de la búsqueda</h1>

    <?php
        $dni = trim($_POST['dni'] ?? '');

        if (strlen($dni) !== 9) {
            echo "<p>El DNI debe tener 9 caracteres.</p>";
        } else {
            $conexion = pg_connect(
                "host=" . getenv("DB_HOST") .
                " port=" . getenv("DB_PORT") .
                " dbname=" . getenv("DB_NAME") .
                " user=" . getenv("DB_USER") .
                " password=" . getenv("DB_PASSWORD") .
                " sslmode=require"
            );

            if (!$conexion) {
                die("<br>Error al conectar con la base de datos.");
            }

            $resultado = pg_query_params(
                $conexion,
                "SELECT dni, nombre, apellido_1, apellido_2, fecha_nacimiento FROM persona WHERE dni = $1",
                [$dni]
            );

            if (!$resultado) {
                die("<br>Error al ejecutar la consulta: " . htmlspecialchars(pg_last_error($conexion)));
            }

            if (pg_num_rows($resultado) === 0) {
                echo "<p>No se encontró ninguna persona con ese DNI.</p>";
            } else {
                echo "<table border='1'>
                        <thead>
                            <tr>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Apellido Primero</th>
                                <th>Apellido Segundo</th>
                                <th>Fecha de Nacimiento</th>
                            </tr>
                        </thead>
                        <tbody>";

                while ($fila = pg_fetch_assoc($resultado)) {
                    echo "<tr>
                            <td>" . htmlspecialchars($fila['dni'] ?? '') . "</td>
                            <td>" . htmlspecialchars($fila['nombre'] ?? '') . "</td>
                            <td>" . htmlspecialchars($fila['apellido_1'] ?? '') . "</td>
                            <td>" . htmlspecialchars($fila['apellido_2'] ?? '') . "</td>
                            <td>" . htmlspecialchars($fila['fecha_nacimiento'] ?? '') . "</td>
                        </tr>";
                }

                echo "</tbody>
                    </table>";
            }

            pg_close($conexion);
        }
    ?>

    <p><a href="../index.php">Volver a index.php</a></p>

</body>
</html>
