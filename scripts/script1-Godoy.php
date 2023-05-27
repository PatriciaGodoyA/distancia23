<?php
/**
 * Script que realiza operaciones matemáticas básicas, y realiza la comprobación de si un número es par
 * 
 * @author: Patricia Godoy Albaladejo
 * @version: 1.0
 * @copyright Copyright (c) 2023, Patricia Godoy
 */

/**
 * Función que suma dos números, que se introducen como parámetros
 * 
 * @param int $a  Primer número que sumaremos
 * @param int $b  Segundo número
 * @return int Resultado de la suma de los dos datos anteriores
 */


function sumar($a, $b) {
    $resultado = $a + $b;
    return $resultado;
}

/**
 * Función que verifica si el número introducido es par
 * 
 * @param int $numero Es el parámetro de entrada con el que realizaremos la comprobación de si es par
 * @return bool Devuelve true si el número es par, y false si no lo es
 */


function esPar($numero) {
    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$numero1 = 10;
$numero2 = 5;
$suma = sumar($numero1, $numero2);
echo "La suma de $numero1 y $numero2 es: $suma<br>";

$numero3 = 7;
if (esPar($numero3)) {
    echo "$numero3 es un número par";
} else {
    echo "$numero3 no es un número par";
}

?>
