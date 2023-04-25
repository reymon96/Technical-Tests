<?php
/*
Definir una función es_palindromo() que reconoce palíndromos (es decir, palabras que tienen el mismo aspecto escritas invertidas), ejemplo: es_palindromo ("radar") tendría que devolver True.
 */

function es_palindromo($String) {
	$String = strtoupper($String);
	if ($String == strrev($String)) {
		return true;
	}
	return 0;
}

print(es_palindromo("radar")."\n");
print(es_palindromo("Suelo")."\n");
?>