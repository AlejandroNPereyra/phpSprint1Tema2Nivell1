<?php

/*Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre 
et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.*/

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {

        case '+':
            $resultado = $num1 + $num2;
            break;

        case '-':
            $resultado = $num1 - $num2;
            break;

        case '*':
            $resultado = $num1 * $num2;
            break;

        case '/':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = 'No se puede dividir por 0';
            }
            break;

        default:
            $resultado = 'Operacion no valida';
            break;
    }

    echo "El resultado es :".number_format($resultado, 1);
?>