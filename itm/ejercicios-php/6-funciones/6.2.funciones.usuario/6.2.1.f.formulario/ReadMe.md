Ejemplo de documento: resultado.php

<?php

$nombre = $_GET["nombre"];
$edad = $_GET["edad"];

echo "Hola " . $nombre;
echo "<br>";
echo "Tienes " . $edad . " años.";

?>
