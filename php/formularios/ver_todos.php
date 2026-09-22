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
            echo "<p>Conexión establecida correctamente.</p>";
            // Mostrar todos los registros de la tabla persona
            $resultado = pg_query($conexion, "SELECT dni, nombre, apellido_1, apellido_2, fecha_nacimiento FROM persona");
            if (!$resultado) {
                die("<br>Error al ejecutar la consulta: " . htmlspecialchars(pg_last_error($conexion)));
            }

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
            echo "<p><a href='../index.php'>Volver a index.php</a></p>";
    ?>
    