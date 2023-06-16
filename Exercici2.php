<?php

//  - Exercici 2
//  Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:

// Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
// Imprimeix per pantalla la mida (longitud) de la variable.
// Imprimeix per pantalla l'string en ordre invers de caràcters.
// Crea una nova variable amb el contingut “Aquest és el curs de PHP”
// i imprimeix per pantalla la concatenació de tots dos strings.

$str = "Hello, World!";
$str2 = "Este es un curso de PHP!";

echo $str2." y esta es mi variable (String) $str, en letras mayusculas es ".strtoupper($str). PHP_EOL .
", su longitud es de ".strlen($str). "carácteres". PHP_EOL .
" y al revés se leería como ".strrev($str);

?>