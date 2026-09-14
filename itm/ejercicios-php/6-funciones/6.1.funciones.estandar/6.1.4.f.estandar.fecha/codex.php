<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo funciones estandar para fechas:<br><br>";
echo "<div style='display: flex; gap: 30px; align-items: flex-start;'>";

echo "<div>";
// TU TABLA <get>
echo "</div>";

echo "<div>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th>Descripción</th>";
echo "<th>Código PHP</th>";
echo "<th>Resultado</th>";
echo "</tr>";

echo "<tr>";
echo "<td>Fecha completa</td>";
echo "<td>date(\"d/m/Y\")</td>";
echo "<td>" . date("d/m/Y") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Día del mes</td>";
echo "<td>date(\"d\")</td>";
echo "<td>" . date("d") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Día de la semana</td>";
echo "<td>date(\"l\")</td>";
echo "<td>" . date("l") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Mes</td>";
echo "<td>date(\"m\")</td>";
echo "<td>" . date("m") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Año</td>";
echo "<td>date(\"Y\")</td>";
echo "<td>" . date("Y") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Hora</td>";
echo "<td>date(\"H\")</td>";
echo "<td>" . date("H") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Minutos</td>";
echo "<td>date(\"i\")</td>";
echo "<td>" . date("i") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Segundos</td>";
echo "<td>date(\"s\")</td>";
echo "<td>" . date("s") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Hora completa</td>";
echo "<td>date(\"H:i:s\")</td>";
echo "<td>" . date("H:i:s") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Fecha y hora</td>";
echo "<td>date(\"d/m/Y H:i:s\")</td>";
echo "<td>" . date("d/m/Y H:i:s") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Día abreviado</td>";
echo "<td>date(\"D\")</td>";
echo "<td>" . date("D") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Mes completo</td>";
echo "<td>date(\"F\")</td>";
echo "<td>" . date("F") . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Mes abreviado</td>";
echo "<td>date(\"M\")</td>";
echo "<td>" . date("M") . "</td>";
echo "</tr>";

echo "</table>";

?>