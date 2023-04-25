<?php
/*
Definir una función inversa() que calcule la inversión de una cadena. Por ejemplo la cadena "estoy probando" debería devolver la cadena "odnaborp yotse"
 */

function Inversa($String) {
	$String = strrev($String);
	return $String;
}

print(Inversa("Hello Word")."\n");

?>