<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo funciones estandar para fechas:<br><br>";
echo "<pre>

echo date('d/m/Y');           // Fecha completa<br>

echo date('d');               // Día del mes<br>

echo date('l');               // Día de la semana<br>

echo date('m');               // Mes<br>

echo date('Y');               // Año<br>

echo date('H');               // Hora<br>

echo date('i');               // Minutos<br>

echo date('s');               // Segundos<br>

echo date('H:i:s');           // Hora completa<br>

echo date('d/m/Y H:i:s');     // Fecha y hora<br>

echo date('D');               // Día abreviado<br>

echo date('F');               // Mes completo<br>

echo date('M');               // Mes abreviado<br><br>
</pre>";

echo "Ejemplo:<br><br>";

// Fecha completa
echo date("d/m/Y");
// Resultado: 14/09/2026
echo"<br><br>";

// Día del mes
echo date("d");
// Resultado: 14

echo"<br><br>";
// Día de la semana
echo date("l");
// Resultado: Monday

echo"<br><br>";
// Mes
echo date("m");
// Resultado: 09
echo"<br><br>";

// Año
echo date("Y");
// Resultado: 2026
echo"<br><br>";

// Hora
echo date("H");
// Resultado: 08

echo"<br><br>";
// Minutos
echo date("i");
// Resultado: 32

echo"<br><br>";
// Segundos
echo date("s");
// Resultado: 45
echo"<br><br>";

// Hora completa
echo date("H:i:s");
// Resultado: 08:32:45

echo"<br><br>";
// Fecha y hora
echo date("d/m/Y H:i:s");
// Resultado: 14/09/2026 08:32:45

echo"<br><br>";
// Día de la semana abreviado
echo date("D");
// Resultado: Mon

echo"<br><br>";
// Mes escrito
echo date("F");
// Resultado: September

echo"<br><br>";
// Mes abreviado
echo date("M");
// Resultado: Sep

?>