<?php  
/*
Definir una función generar_n_caracteres() que tome un entero n y devuelva el caracter multiplicado por n. Por ejemplo: generar_n_caracteres(5, "x") debería devolver "xxxxx".
*/

function generar_n_caracteres(int $i, string $char) {
	for ($j = 0; $j < $i; $j++){
		echo("".$char." ");
	}
	echo("\n");
}

generar_n_caracteres(5, "x");
generar_n_caracteres(7, "*");

?>