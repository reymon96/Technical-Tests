<?php
/*
Definir una función superposicion() que tome dos listas y devuelva True si tienen al menos 1 miembro en común o devuelva False de lo contrario. Escribir la función usando el bucle for anidado.
 */
function Superposicion($Array1, $Array2) {
	for ($i = 0; $i < count($Array1); $i++) {
		for ($j = 0; $j < count($Array2); $j++){
			if ($Array1[$i] == $Array2[$j]) {
				return true;
			}
		}
	}
	return false;
}

$Array1 = [1, 2, 4, 7, 2, 6, 3];
$Array2 = [3, 4, 5, 2, 8, 0, 1, 8];
print(Superposicion($Array1, $Array2)."\n");

?>