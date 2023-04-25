<?php

/*
Definir una función max_de_tres(), que tome tres números como argumentos y devuelva el mayor de ellos.
 */

function max_de_tres($num1, $num2, $num3) {

	if (($num1 == $num2) && ($num2 == $num3)) {
		return $num1;
	} else if (($num1 < $num2) && ($num2 < $num3)) {
		return $num3;
	} else if (($num1 < $num2) && ($num2 > $num3)) {
		return $num2;
	} else if (($num1 > $num2) && ($num1 > $num3)) {
		return $num1;
	}

}

print(max_de_tres(2, 2, 2)."\n");//return 2
print(max_de_tres(1, 2, 3)."\n");//return 3
print(max_de_tres(2, 4, 3)."\n");//return 4
print(max_de_tres(5, 4, 3)."\n");//return 5

?>