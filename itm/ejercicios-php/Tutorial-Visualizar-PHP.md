# Tutorial para VISUALIZACIÓN de tablas en una BASE DE DATOS POSTGRES

## PASO 1

Lo primero que hay que hacer es determinar un documento HTML para que el usuario pueda interactuar con la base de datos desde su sistema y la información se le muestre en forma de tablas. Para ello determinaremos un estándar con `<head>` y `<body>`.

A continuación, lo primero que queremos es que nos salga la tabla con la información en HTML desde la base de datos. Esto **YA ES una acción o petición para la base de datos**, por lo cual debe introducirse a través de un formulario que se relacione con el archivo PHP que accede a la base de datos y un método POST para enviar el requerimiento del usuario.

Como no pedimos nada más que los datos generales, no necesitamos indagar en concreciones:

```html
<label>Mostrar usuarios</label>

<form action="usuarios.php" method="POST">
    <button type="submit">Mostrar</button>
</form>
```

## PASO 2

Este formulario se relaciona **DIRECTAMENTE** con un documento PHP (`usuarios.php`) que lleva a cabo la conexión con el servidor y la traducción de los datos de este para HTML.

Su estructura es la siguiente:

```php
<?php

$conexion = pg_connect(
    "host=" . getenv("DB_HOST") .
    " port=" . getenv("DB_PORT") .
    " dbname=" . getenv("DB_NAME") .
    " user=" . getenv("DB_USER") .
    " password=" . getenv("DB_PASSWORD") .
);
```

Esta es la **CONEXIÓN**, simple y llanamente.

Ahora, como es necesario que esos datos se mantengan, deben introducirse a partir de la variable `$conexion`.

`pg_connect` es una acción de POSTGRES que indica que nos conectamos a la base de datos y que necesita que cada parámetro que relacionamos a ella sea introducido mediante `getenv`, acción que literalmente significa "busca una variable de entorno".

A continuación se especifican las **CREDENCIALES** para que el programa PHP acceda a la base de datos (usuario, puerto, contraseña...)

Si dentro de `$conexion` aparece un error de conexión se pasa a `die`, que es una función que detiene todo el proceso y gatilla un mensaje.

```php
if (!$conexion) {
    die("ERROR DE CONEXIÓN");
}
```

## PASO 3

A continuación creamos una nueva variable que será la que obtenga los resultados de la conexión y búsqueda, es decir, `$conexion` contiene las credenciales y los datos de la base de datos que le permiten conectarse a ella.

Después se necesita la orden que PHP ha de seguir con la base y, por último, los resultados de la orden se deben almacenar en algún lado.

Ese "almacén" será la variable `$resultado`.

Esto se hace así:

```php
$resultado = pg_query($conexion, "SELECT * FROM usuarios");
```

El `$resultado` tiene que actuar mediante `pg_query`, que es una función que ejecuta la consulta posterior, es decir:

```php
pg_query($conexion, "SELECT * FROM usuarios");
```

Aquí ya se emplea lenguaje SQL y estamos diciendo:

> "Mediante esta variable llamada `$conexion`, que nos permite acceder a la base de datos, realiza una selección de todos los elementos de la tabla `usuarios`"

Como se ha indicado, se almacenará en `$resultado`.

## PASO 4

Ahora es necesario tener una estructura visible en HTML para todos estos datos que se han almacenado y según las especificaciones de la búsqueda.

Por lo tanto, hemos de hacer un paréntesis en PHP y, en el mismo documento PHP, introducir un HTML para ordenar los datos en una tabla de forma visible:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
</head>

<body>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
```

`border` indica el grosor del borde de la tabla, `<tr>` hace una **FILA** y `<th>` los datos de esa fila, pues es un **ENCABEZADO**.

## PASO 6

Ahora, desde la **BASE DE DATOS** tenemos una tabla, pero necesitamos acceder a las **FILAS**.

Para eso se debe seguir una función concreta:

```php
$fila = pg_fetch_assoc($resultado);
```

Significa que creo una variable nueva para una fila llamada `$fila`, la cual adquiere el valor de una fila (`pg_fetch_assoc`) desde el resultado.

Debido a que podemos tener un número indeterminado de filas, necesitamos del operador `WHILE` para que vaya pasando por cada una de ellas y nos desglose los datos que contienen para nuestra petición.

Aquí el `WHILE` funciona parecido en otros momentos de programación, ya que cuando obtiene un valor falso deja de actuar.

No obstante, aquí el valor falso se dará cuando no haya más filas porque cada una que procesa pasa a "borrarse".

En otras palabras, `WHILE` **NO** se queda en la misma fila, va pasando por cada una y en ese paso las elimina y nos trae los datos que le pidamos hasta que al final deje de actuar al no haber más filas.

```php
while ($fila = pg_fetch_assoc($resultado)) {
    
    echo $fila["id"];
    echo $fila["nombre"];
    echo $fila["email"];

}
```

Le indicamos a PHP que mientras pasa por las filas el `WHILE`, se escriban los elementos asociados a ellas por una serie de parámetros.

Cuando `$fila` obtiene la información haciendo `WHILE`, se queda con el `id`, el `nombre` y el `email`.

Puede haber más campos, pero solo nos trae los que se han pedido.

## PASO 7

Una vez ya tenemos los datos desglosados, lo que necesitamos es preparar una estructura para que se reproduzcan en el HTML:

```php
while ($fila = pg_fetch_assoc($resultado)) {

    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["email"] . "</td>";
    echo "</tr>";
}
```

Lo único nuevo introducido son las etiquetas para que aparezca el contenido como una tabla en HTML.





