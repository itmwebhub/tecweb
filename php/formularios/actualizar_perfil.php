<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar individuo</title>
</head>

<body>

    <h1>Buscar individuo</h1>

    <form action="procesar_actualizar_1.php" method="POST">

        <label for="dni">DNI:</label>

        <input
            type="text"
            id="dni"
            name="dni"
            maxlength="9"
            required
        >

        <button type="submit">Buscar</button>

    </form>

</body>
</html>
