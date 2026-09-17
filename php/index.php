<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer programa PHP</title>
</head>
<body>

    <h1>Mi primera página PHP</h1>

    <p>
        <?php
            // Conecta a una base de datos
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
            echo "<br>Conexión establecida correctamente.";
            // Mostrar todos los registros de la tabla persona
            $resultado = pg_query($conexion, "SELECT dni, nombre, apellido_1, apellido_2, fecha_nacimiento FROM persona");
            if (!$resultado) {
                die("<br>Error al ejecutar la consulta: " . htmlspecialchars(pg_last_error($conexion)));
            }
            while ($fila = pg_fetch_assoc($resultado)) {
                echo "<br>DNI: " . htmlspecialchars($fila['dni']) .
                    ", Nombre: " . htmlspecialchars($fila['nombre'] ?? '') .
                    ", Apellidos: " . htmlspecialchars(trim(($fila['apellido_1'] ?? '') . " " . ($fila['apellido_2'] ?? ''))) .
                    ", Fecha de nacimiento: " . htmlspecialchars($fila['fecha_nacimiento'] ?? '');
            }
            
        ?>


    </p>

</body>
</html>