<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo funciones estandar para arrays:<br><br>";
echo "<pre>
Función-----------------------------------¿Qué hace?------------------------------------------------Ejemplo

Count()-------------------------Cuenta elementos de la matriz-----------------------------------count(\$números)
Sort()--------------------------Ordena elementos de la matriz-----------------------------------sort (\$números)
Sort_numeric()------------------Compara los elementos de forma numérica-------------------------sort (\$números,SORT_NUMERIC)
Sort_string()-------------------Compara los elementos como cadenas------------------------------sort (\$números,STRING)
Sort_natural()------------------Ordena alfabéticamente los elementos----------------------------usort(\$archivos, ''strnatcmp'')
In_Array()----------------------Determina si un elemento existe en un array---------------------if (in_array(''pera'', \$frutas))
</pre>";

echo  "Ahora un ejemplo:<br><br>

// Contar elementos<br>
count(\$números);<br><br>


// Ordenar elementos<br>
sort(\$números);<br><br>


// Ordenar elementos numéricamente<br>
sort(\$números, SORT_NUMERIC);<br><br>


// Ordenar elementos como cadenas<br>
sort(\$nombres, SORT_STRING);<br><br>


// Ordenar elementos de forma natural<br>
usort(\$archivos, 'strnatcmp');<br><br>


// Comprobar si un elemento existe en un array<br>
if (in_array(''pera'', \$frutas)) {<br>
    echo ''La pera existe''<br>
};<br><br>


El ejercicio final quedaría así:<br><br>";

// Contar elementos
$números = [10, 20, 30, 40];
echo count($números);
// Resultado: 4
echo "<br><br>";

// Ordenar elementos
$números = [3, 1, 4, 2];
sort($números);
echo implode(", ", $números);
// Resultado: 1, 2, 3, 4
echo "<br><br>";

// Ordenar elementos numéricamente
$números = [10, 2, 30, 4];
sort($números, SORT_NUMERIC);
echo implode(", ", $números);
// Resultado: 2, 4, 10, 30
echo "<br><br>";

// Ordenar elementos como cadenas
$nombres = ["Pedro", "Ana", "Carlos"];
sort($nombres, SORT_STRING);
echo implode(", ", $nombres);
// Resultado: Ana, Carlos, Pedro
echo "<br><br>";

// Ordenar elementos de forma natural
$archivos = ["archivo10", "archivo2", "archivo1"];
usort($archivos, 'strnatcmp');
echo implode(", ", $archivos);
// Resultado: archivo1, archivo2, archivo10
echo "<br><br>";

// Comprobar si un elemento existe
$frutas = ["manzana", "pera", "plátano"];

if (in_array("pera", $frutas)) {
    echo "La pera existe";
}
// Resultado: La pera existe
echo "<br><br>";
?>