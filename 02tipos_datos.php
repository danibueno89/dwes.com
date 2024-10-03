<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tercer script</title>
</head>

<body>
    <h1>Tercer script</h1>
    <hr>

    <h2>Tipos de datos en PHP</h2>

    <p>Estos datos son escalares(primitivos)</p>

    <ul>
        <li>Booleanos</li>
        <li>Numérico entero</li>
        <li>En coma flotante</li>
        <li>Cadena de caracteres</li>
    </ul>

    <p>Datos compuestos </p>

    <ul>
        <li>arrays</li>
        <li>objetos</li>
        <li>callable (nombres de funcion o metodos, todo lo invocable)</li>
        <li>iterable(elemento recorrible)</li>

    </ul>

    <p>Tipos especiales </p>

    <ul>
        <li>Resource (puntero a archivo)</li>
        <li>NULL</li>
    </ul>


    <h2>Boolean</h2>

    <p>Inicialmente las constantes True y False. Sin embargo, otro tipos de datos tienen conversión implícita al tipo booleano</p>

    <ul>
        <li>Numérico entero -0 false. Cualquier otra cosa es true</li>
        <li>Numérico en coma flotante -0.0 false. Otro valor es True</li>
        <li>Un array con 0 elementos es false. Con elementos es True</li>
        <li>El tipo especial NULL es false. Otro elemento es True</li>
        <li>Una variable no definida es false </li>
    </ul>

    <?php
    $valor_booleano = true;
    $edad = 20;
    $mayor_edad = $edad > 18;

    echo "<p>Mayor de edad es booleano: " . is_bool($mayor_edad) . "</p>";

    $dinero = 0;
    if ($dinero) {
        // Equivale a si $dinero != de 0
        // Por lo que podria darse -50 dinero y aun asi saltaria la frase
        echo "<p>Soy rico</p>";
    } else echo "<p>Estoy arruinado</p>";

    ?>

    <h2>Enteros</h2>

    <p>Números enteros en php son de 32 bits. Pueden expresarse en diferentes notaciones</p>

    <?php
    $numero_entero = 123;
    $numero_negativo = -123;
    echo "<p>$numero_entero / $numero_negativo</p>";

    $numero_octal = 0123;
    echo "<p>0123 es en octal $numero_octal</p>";
    echo "<p>El número $numero_octal en octal es: " . decoct($numero_octal) . "</p>";

    $numero_hexadecimal = 0x8ae;
    echo "<p>El número hexadecimal 0x8ae es $numero_hexadecimal</p>";
    echo "<p>El número hexadecimal $numero_hexadecimal en hexadecimal es :" . dechex($numero_hexadecimal) . "</p>";

    $numero_binario = 0b110101;
    echo "<p>el número binario 0x8ae es $numero_binario</p>";
    echo "<p>el número binario $numero_binario en hexadecimal es :" . decbin($numero_binario) . "</p>";
    ?>

    <h2>Números en coma flotante</h2>
    <p>El separador decimal es el . y se pueden expresar números muy grandes o muy pequeños mediante la notación científica con base 10</p>

    <?php
    $pi = 3.14159;
    echo "<p>El número pi es $pi</p>";
    echo "<p>El número pi es $pi redondeado es " . round($pi, 2) . "</p>";


    $inf_int = 7.9e13;
    echo "<p>Información que circula en internet en un dia $inf_int</p>";

    $inf_int = 0.2e-9;
    echo "<p>Negativo muy muy pequeño $inf_int</p>";

    ?>

    <h2>Cadena de caracteres</h2>
    <p>Un string o cadena es una serie de caracteres donde cada carácter equivale a un byte. Esto significa que php solo admite 256 caractares. Por lo que no ofrece soporte nativo a UTF-8. un literal de tipo string se expresa de 4 formas:</p>

    <ul>
        <li>Comillas simples</li>
        <li>Comillas dobles</li>
        <li>Heredox</li>
        <li>Nowdoc</li>
    </ul>

    <h3>Comillas simples</h3>

    <?php
    // Una cadena encerrada entre comillas simples solo admite el caracter de escape \'

    echo '<p>Esto es una cadena sencilla</p>';
    echo '<p>Esto es una cadena sencilla
            si quiero puede
            ser en varias lineas</p>';

    // No se reconocen caracteres de escape excepto ' \
    echo '<p>El mejor pub de la ciudad es 0\'Donnell</p>';
    echo '<p>la raíz del disco duro es C:\\</p>';

    //el salto de linea no se expande
    echo '<p>La raíz del disco \n duro es C:\\</p>';

    //no interpola variables 
    echo '<p>Mi edad es $edad</p>';
    ?>

    <h3>Comillas dobles</h3>
    <p>La forma habitual de expresar cadenas de caracteres ya que expande los caracteres de escape y las variables</p>

    <?php

    $cadena = "Esto es una cadena con comillas dobles";
    echo "<p>es una cadena de un objeto?" . is_object($cadena) . "</p>";

    if (is_object($cadena)) echo "<p>de echo las candeas son objetos</p>";
    else echo "<p>de echo no es una cadena</p>";

    $con_secuencias = "\t\ el simbolo \$ se emplea para las variables \n y 
    si lo quieres en una cadena tienes que escaparlo con \\. Es mejor usar \" para 
    delimitar cadenas";

    echo "<p>$cadena</p>";
    ?>

    <h3>cadenas HEREDOC</h3>

    <p>Es una cadena muy larga que empieza con <<< le sigue un identificador
    y justo despues un salto de línea. A continuacion, se escribe la cadena con
    los saltos de línea que necesitemos, podemos interpolar variables y poner caracteres
    de escape. Para terminar hay que hacer un salto de línea
    y volver a poner el identificador.</p>

    <?php
    $cadena_hd = <<<HD
    <p>esto es una cadena heredoc 
    que respeta los saltos de línea y
    que respeta variables $edad.
    Además las secuencias de escape 
    el identificador no neceista \$
    y tampoco usamos \". Simplemente acabamos
    con un salto de línea 
    mas el identificador.</p>
    HD;

    echo $cadena_hd
    ?>

    <h3>cadena NOWDOC</h3>
    <p>La cadena nowdoc es como la cadena heredoc con comillas simples
        No se interpolan variables ni se reconocen secuencias de escape mas alla de '</p>
    <?php
    $cadena_nd = <<<'ND'
    <p>esto es ununa cadena no NOWDOW 
    y el salto de linea no lo respeta
    no puedo meter variables
    y solo reconoce \\ y \'.</p>
    ND;

    echo $cadena_nd
    ?>

    <h2>Conversiones de tipos de datos</h2>
    <p>Hay dos tipos de conversión: las implícitas y las explícitas.
        Las implicítas ocurren cuando en una expresión hay operandos de diferente tipo. PHP convierte algunos de ellos para evaluar la expresión.</p>
    
    <?php
    $cadena = "25";
    $numero = 8;
    $booldeano = true;
    $resultado = $cadena + $numero + $booldeano;

    echo $resultado . "<br>";
    ?>
    
    <p>IMPORTANTE
        Cuando se hace una conversión implícita solo afecta al operando
        pero no a la variable, es decir, la conversión de cadena a entero
        solamente se hace para evaluar la expresion
        pero la cadena sigue siendo de tipo STRING
    </p>

    <?php
    $flotante = 3.5;
    $resultado = $cadena + $flotante + $numero + $booldeano;
    echo "<p>$resultado</p>";

    $cadena = "25 marranos dan muchos problemas";
    $resultado = $numero + $cadena;
    echo "<p>$resultado</p>";

    ?>

    <p>Las conversiones explícitas se conocen como casting o moldeo y se hacen
        precediendo la expresión con el tipo de datos a convertir entre paréntesis</p>

    <?php
    // Si quiero convertir a entero -> (int)expresión
    // Si quiero convertir a floar -> (float)expresión
    // Si quiero convertir a string -> (string)expresión

    $valor_booleano = true;
    $valor_convertido = (int)$valor_booleano;

    echo "<p>El valor convertido es $valor_convertido</p>";

    $valor_float = 3.1258;
    $valor_convertido = (int)$valor_float;
    echo "<p>El valor convertido es" . $valor_convertido . "</p>";

    $valor_cadena = "12345";
    $valor_convertido = (int)$valor_cadena;
    echo "<p>El valor convertido es " . $valor_convertido . "</p>";
    ?>

<p>Fin del script</p>
</body>

</html>