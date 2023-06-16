<?php

/*- Exercici 3
a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna 
un valor. A continuació, mostra per pantalla per a X i Y:

El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul.
Per N i M realitzaràs el mateix. */

$X = 5;
$Y = 10;

$N = 3.14159;
$M = 1.61803;

(float)$modulo = bcmod($N , $M); 

echo "X es ".$X;
echo '<br>';
echo "Y es ".$Y;
echo '<br>';
echo "N es ".$N;
echo '<br>';
echo "M es".$M;
echo '<br>';
echo "La suma de X e Y es ".($X + $Y);
echo '<br>';
echo "La resta de X e Y es ".($X - $Y);
echo '<br>';
echo "El producto entre X e Y es ".($X * $Y);
echo '<br>';
echo "El módulo entre X e Y es ".($X % $Y);
echo '<br>';    
echo "La suma de N y M es ".($N + $M);
echo '<br>';
echo "La resta de N y M es ".($N - $M);
echo '<br>';
echo "El producto entre N y M es ".number_format($N * $M, 5);
echo '<br>';
echo "El módulo entre N y M es ".($modulo);
echo '<br>';

/* Per a totes les variables (X, Y, N, M):
El doble de cada variable. 
La suma de totes les variables.
El producte de totes les variables. */

echo "El doble de X es ".($X*2);
echo '<br>';
echo "El doble de Y es ".($Y*2);
echo '<br>';
echo "El doble de N es ".($N*2);
echo '<br>';
echo "El doble de M es ".($M*2);
echo '<br>';
echo "La suma de las cuatro variables es ".($X + $Y + $N + $M);
echo '<br>';
echo "El producto de las cuatro variable es ".number_format($X * $Y * $N * $M, 5);

?>