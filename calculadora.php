<?php
namespace App;

class Calculadora {
    public function suma($a, $b) {
        return $a + $b;
    }

    public function resta($a, $b) {
        return $a - $b;
    }

    public function multiplicacion($a, $b) {
        return $a * $b;
    }

    public function division($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("El divisor no puede ser cero.");
        }
        return $a / $b;
    }

    public function raizCuadrada($a) {
        if ($a < 0) {
            throw new \InvalidArgumentException("No se puede calcular la raíz cuadrada de un número negativo.");
        }
        return sqrt($a);
    }
}
?>