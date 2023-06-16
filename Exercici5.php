<?php

/*- Exercici 5
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.*/

$num1 = $_POST['num1'];

if($num1 >= 60){

    echo "First Class Grade";

} else if ($num1 >= 45 && $num1 <=59) {

    echo "Second Class Grade";

} else if ($num1 >=33 and $num1 <=44) {

    echo "Third Class Grade";

} else {

    echo "Must repeat grades";
    
}

?>