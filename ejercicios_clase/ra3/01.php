<?php
/* SCRIPT PARA PRESENTAR UN FORMULARIO Y PEDIR UN NÚMERO ENTERO. SE DEVUELVE UNA RESPUESTA EN EL MISMO SCRIPT MOSTRANDO EN PANTALLA EL NÚMERO CONVERTIDO EN BINARIO, OCTAL, HEXADECIMAL Y DECIMAL */

// variable para acceder siempre al directorio raíz del servidor de forma sencilla
define("DIR_SERVER", $_SERVER['DOCUMENT_ROOT']);
echo DIR_SERVER . "/includes/funciones.php";
// funciones para autogenerar la web html báscica
require_once(DIR_SERVER . "/includes/funciones.php");

// variable HEREDOC para crear el formulario identado
$formulario = <<<FORM
<form name="formulario" id="formulario" action="{$_SERVER['PHP_SELF']}">
    <label>NÚMERO PARA CONVERTIR <input type="number" name="numeroConvertir" id="numeroConvertir"></label><br>
    <input type="submit" name="convertir" id="convertir" value="Convertir">
</form>
FORM;

// si la petición es GET (primera llegada a la web normalmente) se presenta el formulario a rellenar
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    inicio_html("ejecicio_RA3_01", [DIR_SERVER . "/estilos/formularios.css"]);
    echo $formulario;

} else {
}
