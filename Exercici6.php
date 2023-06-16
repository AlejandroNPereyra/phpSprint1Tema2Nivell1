<?php

/*- Exercici 6

Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.
Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/

function isBitten() {
    $fingerBite = rand(0, 1) === 1;
    if ($fingerBite) {
        echo "Bitten.";
    } else {
        echo "Not bitten.";
    }
    return $fingerBite;
}

$fingerBite = isBitten();

?>