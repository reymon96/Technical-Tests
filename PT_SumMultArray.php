<?php
/*
Escribir una función sum() y una función multip() que sumen y multipliquen respectivamente todos los números de una lista. Por ejemplo: sum([1,2,3,4]) debería devolver 10 y multip([1,2,3,4]) debería devolver 24.
 */

function sum($Array) {
	$Sum = array_sum($Array);
	return $Sum;
}

function multip($Array) {
	$result = 1;
	foreach ($Array as $data) {
		$result *= $data;
	}
	return $result;
}

$Array = [1, 4, 2, 9, 3, 5, 8];
print("Sum: ".sum($Array)."\n");
print("Multip: ".multip($Array)."\n");

?>