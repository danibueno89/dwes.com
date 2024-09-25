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
            
        ?>
    </body>
</html>