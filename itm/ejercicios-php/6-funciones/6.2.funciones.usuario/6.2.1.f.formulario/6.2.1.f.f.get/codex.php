<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo funciones que emplean la variable (GET) para que un usuario interactúe con el programa a partir de un formulario.<br>
Dichas funciones envían información del formulario de forma visible.<br>
Normalmente se encontrará en otro documento php y emplea la nomenclatura \$_GET.<br>
Esto se debe a que es una VARIABLE:<br>

strlen() → cuenta caracteres.<br>
strtoupper() → convierte a mayúsculas.<br>
count() → cuenta elementos.<br>
strtolower() → convierte a minúsculas.<br>
date() → obtiene/formatea una fecha.
<br><br>

Ejemplos: <br><br>

\$nombre = 'Juan';<br>
echo strlen(\$nombre);<br><br>
Nos devuelve '4' <br><br>
\$nombre = 'Juan';
echo strtoupper(\$nombre);<br><br>
Nos devuelve 'JUAN' <br><br>
echo date(''d/m/Y'')<br><br>
Nos devuelve 10/09/2026";

echo "\$_GET es especialmente potente para intercambiar información entre páginas WEB";
?>