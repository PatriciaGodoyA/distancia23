<?php
/**
 * Script con una clase que realiza operaciones matemáticas básicas
 * 
 * @author: Patricia Godoy Albaladejo
 * @version: 1.0
 */

/**
 * Clase Calculadora
 * 
 * Esta clase proporciona funciones para realizar operaciones matemáticas básicas (suma y multiplicación)
 
 */

class Calculadora {
  

/**
 * Función que suma dos números, que se introducen como parámetros
 * 
 * @param int $a  Primer número que sumaremos
 * @param int $b  Segundo número
 * @return int Resultado de la suma de los dos datos anteriores
 * @see Calculadora::multiplicar() Método para realizar multiplicaciones
 */

    public function sumar($a, $b) {
        $resultado = $a + $b;
        return $resultado;
    }

/**
 * Función que multiplica los dos números introducidos como parámetros
 * 
 * @param int $a  Primer número que multiplicaremos
 * @param int $b  Segundo número
 * @return int Resultado de la multiplicación de los dos datos anteriores
 * @see Calculadora::sumar() Método para realizar sumas
 */

    public function multiplicar($a, $b) {
        $resultado = $a * $b;
        return $resultado;
    }
}

$calculadora = new Calculadora();

$numero1 = 5;
$numero2 = 3;
$suma = $calculadora->sumar($numero1, $numero2);
echo "La suma de $numero1 y $numero2 es: $suma<br>";

$numero3 = 4;
$numero4 = 2;
$multiplicacion = $calculadora->multiplicar($numero3, $numero4);
echo "El resultado de multiplicar $numero3 por $numero4 es: $multiplicacion";

?>
