<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>TERCER SCRIPT EN PHP</h1>    
        <hr>
        <h3>Tipos de datos</h3>
        <ul>
            <li>Booleanos</li>
            <li>Númericos o enteros</li>
            <li>En coma flotante</li>
            <li>Cadena de caracteres</li>
        </ul>
        <p>Datos compuestos</p>
        <ul>
            <li>Arrays</li>
            <li>Objetos</li>
            <li>Callable</li>
            <li>Iterable</li>
        </ul>
        <p>Tipos especiales</p>
        <ul>
            <li>Resource</li>
            <li>NULL</li>
        </ul>

        <h2>Boolean</h2>
        <p>Inicialmente las constantes True y False. Sin embargo, otros tipos de datos tienen conversión implícita al tipo booleano</p>
        <ul>
            <li>Númerico entero: 0 y -0 es false, lo demás es true</li>
            <li>Númerico en coma flotante: 0.0 y -0.0 es false, lo demás es true</li>
            <li>Un array con 0 elementos es false</li>
            <li>El tipo especial NULL es false, distinto de NULL es false</li>
            <li>Una variable no definida es false</li>
        </ul>

        <?php
            $valor_booleano = true;
            $edad = 20;
            $mayor_edad = $edad > 18;
            echo "<p>Mayor de edad es booleano: " . is_bool($mayor_edad) . "</p>";

            $dinero = 0;
            // equivalente a $dinero != 0
            if ($dinero) echo "<p>Soy rico</p>";
            else echo "<p>Estoy arruinado</p>";

            $mi_nombre = "";
            if($mi_nombre) echo "<p>Me llamo $mi_nombre</p>";
            else echo "<p>No tengo nombre</p>";
        ?>

        <h2>Enteros</h2>
        <p>Números enteros en PHP son de 32 bits (depende de la plataforma). Pueden expresarse en diferentes notaciones</p>
        <?php
            $numero_entero = 1234;
            echo "<p>EL número entero es $numero_entero</p>";

            $numero_negativo = -1234;
            echo "<p>El úmero negativo es $numero_negativo</p>";

            // si quiero expresar un número en octal
            $numero_octal = 0123;
            echo "<p>EL número 1234 en octal es en decimal : $numero_octal</p>";

            // Puedo mostrar un número entero en octal
            echo "<p>El número $numero_octal es en octal: " . decoct($numero_octal) . "</p>";

            // Número entero en hexadecimal
            $numero_hexadecimal = 0x8AE;
            echo "<p>El número hexadecimal 0x8AE en decimal es : $numero_hexadecimal</p>";

            // Mostrar un número expresado en hexadecimal
            echo "<p>El número $numero_hexadecimal en hexadecimal es " . dechex($numero_hexadecimal) . "</p>";

            // Un número entero en binario
            $numero_binario = 0b101010101;
            echo "<p>El número 101010101 en decimal es: $numero_binario</p>";

            // Mostrar un número en binario
            echo "<p>El número $numero_binario en binario es: " . decbin($numero_binario) . "</p>";
        ?>

        <p>Punto flotantes</p>
        <p>Tienen una parte entero y una parte decimal. Además se pueden expresar en notación cient´fica con base 10</p>
        <p>El separador decimal es el punto.</p>
        <?php
            $PI = 3.14159;
            echo "<p>El número P es $PI</p>";
            echo "<p>PI con 2 decimales es: " . round($PI, 4) . "</p>";

            $inf_int = 7.9e13;
            echo "<p>Información que cirucla en Internet en un día: $inf_int</p>";

            $tamanno_virus = 0.2e-9;
            echo "<p>El tamaño medio de un virus es de $tamanno_virus </p>";

        ?>

        <p>Cadena de caracteres</p>
        <p>String o cadena es una serie de caracteres donde cada carácter equivale a un byte, por lo que PHP solo admite 256 caracteres y no ofrece soporte nativo a utf8. Un literal  de tipo string se expresa de 4 formas:</p>
        <ul>
            <li>Comillas simples</li>
            <li>Comillas dobles</li>
            <li>Heredoc</li>
            <li>Nowdoc</li>
        </ul>
        <h3>Comillas simples</h3>
        <?php
            // Una cadena encerrada en comillas simples. Solo admite el carácter de escape \' \\
            echo '<p>Esto es una cadena sencilla</p>';
            echo 'Puedo poner una cadena 
            en varias líneas
            porque la sentencia
            no acaba hasta
            el punto y coma';

            // No se reconocen caracteres de escape excepto ' y el \
            echo '<p>El mejor pub de la ciudad es O\'Donnel</p>';
            echo '<p>La raíz del disco duro es C:\</p>';

            // El salto de línea no se expande
            echo '<p>Esta cadena tiene más de una línea</p>';

            // No interpola variables
            $mi_nombre = "Manuel";
            echo '<p>$mi_nombre, ¿Cómo estás?</p>';
            ?>

            <h3>Comillas dobles</h3>
            <p>Esta es la forma habitual de expresar cadenas de caracteres, ya que muestra los caracteres de escape y las variables.</p>
            <?php
                $cadena = "Esto es una cadena con comillas dobles";
                if(is_object($cadena)) echo "'$cadena' es un objeto<p>";
                else echo "'$cadena' no es un objeto. Es de tipo primitivo.";
                
                $con_escape = "\t\tEl símbolo \$se emplea para las variables \n y si lo quieres en una cadena hay que escaparlo con \\. Es mejor usar \"\" para delimitar las cadenas en lugar de '.";
                echo "<p>$con_escape</p>";
            ?>

            <h3>Cadenas Heredoc</h3>
            <p>Es una cadena muy larga que comienza con <<< le sigue un identificador y justo después un salto de línea. A continuación se escribe la cadena con los saltos de línea que necesitemos. Podemos interpolar variables y poner caracteres de escape. Para finalizar hay que hacer un salto de línea y volver a poner el identificador.</p>
            <?php
                $cadena_hd = <<<HD
                Esto es una cadena
                heredoc que respeta los saltos de ĺinea,
                le puedes poner variables como $mi_nombre
                y además secuencias de escape. El identificador
                no necesita \$ y tampoco usamos \", simplemente
                la escribimos y acabamos con un salto de línea 
                más el identificador.
                HD;
                echo $cadena_hd;
            ?>

            <h3>Cadenas Nowdoc</h3>
            <p>La cadena Nowdoc es como Heredoc con comillas simples. No se interpolan variables ni se reconocen secuencias de escape más allá de \ y '. Se respetan los saltos de líneas.</p>
            <?php
                $cadena_hd = <<<'ND'
                Esto es una cadena nowdoc
                y el salto de línea lo respeta,
                no puedo meter variables
                y solo reconoce \\ y \'
                ND;
                echo $cadena_hd;
            ?>

            <h2>Conversión de tipos de datos</h2>
            <p>Hay dos conversiones: implícita y explícita. Las primeras ocurren cuando en una expresión hay operandos en diferente tipo. PHP convierte algunos de ellos para evaluar la expresión.</p>
            <?php
                $cadena = "25";
                $numero = 8;
                $booleano = true;
                $resultado = $cadena + $numero + $booleano;
                echo "<p>$resultado</p>";

                echo "<p>Cuando se hace una conversión implícita solo afecta al operando no a la variable. Es decir, la conversión de $cadena a entero solamente se hace para evaluar la operación, pero $cadena sigue siendo de tipo string.</p>";

                $flotante = 3.5;
                $resultado = $cadena + $flotante + $numero + $booleano;
                echo "<p>$resultado</p>";
                // siempre que se haga una operación las variables se pasan al tipo de dato de rango mayor, en este caso flotante

                $cadena = "25 marranos dan mucho provecho";
                $resultado = $numero + $cadena;
                echo "<p>$resultado</p>";
                // cuando se usa el operando aritmético + se suman hasta que $cadena tenga el primer carácter no númerico
            ?>
            <p>Las conversión explícitas se conocen como casting o moldeo y se hacen precediendo la expresión con el tipo de datos a convertir entre paréntesis.</p>
            <?php
                // Si quiero convertir a un entero -> (int)expresión
                // Si quiero convertir a un float -> (float)expresión
                // si quiero convertir a un string -> (string)expresión

                echo "<p>Conversiones a entero</p>";
                $valor_booleano = true;
                $valor_convertido = (int)$valor_booleano;
                echo "<p>El valor convertido a entero es: $valor_convertido</p>";
                $valor_float = 3.14159;
                $valor_convertido = (int)$valor_float;
                echo "<p>El valor convertido a entero es: $valor_convertido</p>";
                $valor_cadena = "123";
                $valor_convertido = (int)$valor_cadena;
                echo "<p>El valor convertido a entero es: $valor_convertido</p>";
            ?>
    </body>
</html>