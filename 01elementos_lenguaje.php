<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo script</title>
</head>

<body>
    <h1>Segundo script</h1>
    <hr>

    <h2>Entrada y salida de datos</h2>
    <p>La entrada de datos en PHP es con un formulario html o con un enlace. La salida de datos se produce con la función echo y su forma abreviada, y la función print. Además para salida de datos con formato tenemos printf.</p>

    <h3>Función echo</h3>
    <?php
    echo "<p>La función echo emite el resultado de la expresión a la salida. Se puede usar con una función como construcción del lenguaje (sin parénteis)</p>";
    echo "<p>Esto es un párrafo HTML enviado por echo</p>";

    $nombre = "juan";
    echo "hola ", $nombre, ", ¿Cómo estas? <br>";
    // echo ("hola ", $nombre, ¿Cómo estas? <br>"); no sirve, hay más de un argumento

    // Quiero un salto de linea al final de la línea
    echo "hola ", $nombre, " ¿Cómo estas? Con salto de línea<br>\n ¿Ves? He saltado de línea en el código";

    $nombre = "pepe";
    $apellido = "gómez";

    echo "<p>Mi nombre es $nombre y mi apellido $apellido</p>";

    echo "<p>Mi nombre es " . $nombre . " y mi apellido es " . $apellido . "</p>";

    echo "<p>Uno más dos es: ", 1 + 2, " debe ser 3</p>";

    // El operador . NO tiene precedencia sobre el operador +

    echo "<p>Uno más dos es: " . 1 + 2.3 . " debe ser 3</p>";

    echo "<h4>Forma abreviada de echo</h4>";
    echo "<p>Cuando hay que enviar a la salida el resultado de una expresión pequeña disponemos de la forma abreviada de echo que permite intercalarse con el código html con menos esfuerzo</p>";

    $tiene_portatil = True;

    ?>
    <!-- Forma abreviada de echo --->
    <p><?= $nombre . " " . $apellido ?></p>

    <!-- Uso habitual de valores de un formulario --->
    <p>Nombre&emsp;<input type="text" name="nombre" size="15" value="<?= $nombre ?>"></p>
    <p>Apellido&emsp;<input type="text" name="apellido" size="15" value="<?= $apellido ?>"></p>
    <p><input type="checkbox" name="portatil" <?= $tiene_portatil ? 'cheked' : '' ?>>&emsp;¿Tiene portátil?</p>

    <h3>Función print</h3>
    <?php
    print "<p>Esto es una cadena con print</p>";
    ?>

    <h3>Función printf</h3>
    <?php
    $pi = 3.14;
    $radio  = 3;
    $circunferencia = 2 * $pi * $radio;
    printf("<p>la circunferencia de radio %d es %.2f</p>", $radio, $circunferencia);

    ?>
</body>

</html>