<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>SEGUNDO SCRIPT EN PHP</h1>    
        <hr>

        <?php
            // 01elementos_lenguaje.php
        ?>
        
        <h2>Entrada y salida</h2>
        <p>Para la entrada de datos se utiliza un formulario o con un enlace</p>
        <p>Para la salida se usa la función echo y su forma abreviada, y la función print.</p>
        <p>Para la salida de datos formateados se usa printf</p>

        <h3>Función echo</h3>
        <?php
            echo "<p>La función echo emite el resultado de una expresión a la salida.</p>";
            echo "Esto es un párrafo HTML enviado por echo";
            $nombre = "Juan";
            echo "<p>Hola " . $nombre . " ¿Cómo estás?</p>";
            // quiero un salto de línea al final de línea
            echo "Hola Juan, ¿Cómo estás?\n";
            $nombre = "José";
            $apellido = "Gómez";
            echo "<p>Mi nombre es $nombre y mi apellido es $apellido</p>";
            // forma abreviada echo
            echo "<p>para mostrar por salida una variable con forma abreviada usamos < ?= \$variable  ? > </p>";
        ?>
        <p>Mi nombre es <?= $nombre . " " . $apellido ?> y estoy programando en PHP</p>
        <p>Es habitual usarlo para formularios.</p>

        <h3>Función print</h3>
        <p>Igual que echo</p>
        <?php
            print "Esto es una línea\n esto otra\n y esto otra escrita en print";
            print "<p>Mi nombre es $nombre y mi apellido es $apellido</p>";
        ?>
        
        <h3>Función printf</h3>
        <?php
            $PI = 3.1416;
            $radio = 3;
            $circunferencia = 2 * $PI * $radio;
            printf("<p>La circunferencia de radio %d tiene una longitud de %.2f</p>", $radio, $PI);
        ?>

    </body>
</html>