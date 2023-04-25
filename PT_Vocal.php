<?php

/*
Escribir una función que tome un carácter y devuelva True si es una vocal, de lo contrario devuelve False.
 */

function Char($char) {
	$char = strtoupper($char);
	if (($char == "A") || ($char == "E") || ($char == "I") || ($char == "O") || ($char == "U")) {
		return true;
	} else {
		return 0;
	}
}

print(Char("a")."\n");
print(Char("c")."\n");
print(Char("1")."\n");

?>