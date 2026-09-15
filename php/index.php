<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer programa PHP</title>
</head>
<body>

    <h1>Mi primera página PHP</h1>

    <p>
        <?php
            echo "¡Hola Mundo desde PHP!";
            echo "Voy a insertar un salto de línea\n<br>. Esto está en otra línea.";
            echo "<br> Y esto otra.";
            echo "<br> Y esto otra."
        ?>
        <?php
            // Crea un programa de php basico que explique el funcionamiento de foreach con un ejemplo
            $frutas = ["Manzana", "Banana", "Cereza"];
            foreach ($frutas as $fruta) {
                echo "Fruta: $fruta<br>";
            }

            // Crea un programa de php basico que explique el funcionamiento de foreach con un ejemplo con arrays asociativos
            $persona = ["nombre" => "Juan", "edad" => 25, "ciudad" => "Madrid"];
            foreach ($persona as $clave => $valor) {
                echo "$valor<br>";
            }
        ?>
        <hr>
        <?php
            $num1 = 10;
            $num2 = 20;
            $num3 = 30;
            $operacion_aritmetica = $num1 - $num2 + $num3;
            echo "El resultado de la operación aritmética es $operacion_aritmetica<br>";
            //echo 'El producto de ' . $num1 . ' y ' . $num2 . ' es ' . $suma . '<br>';
        ?>
        <hr>
        <?php
            $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : '';
            $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : '';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && $numero1 !== '' && $numero2 !== '') {
                $suma = (float)$numero1 + (float)$numero2;
                echo "Valor introducido 1: " . htmlspecialchars($numero1) . "<br>";
                echo "Valor introducido 2: " . htmlspecialchars($numero2) . "<br>";
                echo "La suma es: $suma<br>";
            }
        ?>

        <form method="post" action="">
            <label for="numero1">Número 1:</label>
            <input type="number" step="any" id="numero1" name="numero1" required>
            <br><br>
            <label for="numero2">Número 2:</label>
            <input type="number" step="any" id="numero2" name="numero2" required>
            <br><br>
            <input type="submit" value="Sumar">
        </form>
    </p>

</body>
</html>