<?php

/*
Definir una función max() que tome como argumento dos números y devuelva el mayor de ellos.
 */
function f_max($num1, $num2) {
	if ($num1 == $num2) {
		return $num1;
	} else if ($num1 > $num2) {
		return $num1;
	} else {
		return $num2;
	}
}

echo ("Max: ".f_max(5, 6)."\n");

?>