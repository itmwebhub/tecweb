<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo un formulario que emplea la variable \$_GET.<br>
En primer lugar, necesitamos incluir 2 elementos nuevos en el formulario. Estos son (method) y (action).<br>
(method) determina que la manera en la que la información se envía es a través de url con (GET). <br>
(action) indica hacia dónde va dicha información del formulario. En este caso va a un archivo llamado (resultado.php).<br>
La estructura básica de este formulario será el de 2 campos de texto (nombre) y (edad) y un botón (submit): <br><br>

<form method=''GET'' action=''resultado.php''><br>

    <label for='nombre'>Nombre:</label><br>
    <input type='text' id='nombre' name='nombre'>
<br><br>
    <label for='edad'>Edad:</label><br>
    <input type='number' id='edad' name='edad'>
 <br><br>
    <input type='submit' value='Enviar'><br>
</form><br><br>";

echo "Una vez hecha esta estructura, el documento receptor ya puede operar con los datos:<br><br>

\$nombre = \$_GET[''nombre'']:<br>
\$edad = \$_GET[''edad'']:<br><br>

echo ''Hola '' . $nombre:<br>
echo ''<br>'':<br>
echo ''Tienes '' . $edad . '' años.'';<br><br>";

echo "El resultado final será una cadena de texto con las variables intercaladas: Hola, persona. Tienes 8 años.";
?>
