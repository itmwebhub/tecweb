<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de Formularios</title>
</head>

<body>

    <h1>Ejercicios de formularios</h1>

    <h2>Mostrar lista de individuos</h2>

    <form action="vert_todos.php" method="POST">
        <button type="submit">Mostrar individuos</button>
    </form>


    <h2>Editar datos de individuos</h2>

    <form action="procesar_actualizar_perfil.php" method="POST">

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


    <h2>Actualizar datos de individuos</h2>

    <form action="actualizar.php" method="POST">

        <label for="id">ID:</label>
        <input
            type="number"
            id="id"
            name="id"
            required
        >

        <label for="nombre">Nombre:</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            required
        >

        <label for="edad">Edad:</label>
        <input
            type="number"
            id="edad"
            name="edad"
            required
        >

        <button type="submit">Guardar cambios</button>

    </form>

</body>
</html>
