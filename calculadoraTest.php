<?php
use PHPUnit\Framework\TestCase;
use App\Calculadora;
class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora();
        $this->assertEquals(5, $calc->suma(3, 2));
        $this->assertEquals(0, $calc->suma(-1, 1));
        $this->assertEquals(100, $calc->suma(50, 50));
    }
    public function testResta()
    {
        $calc = new Calculadora();
        $this->assertEquals(1, $calc->resta(3, 2));
        $this->assertEquals(0, $calc->resta(5, 5));
        $this->assertEquals(-3, $calc->resta(2, 5));
    }

    public function testMultiplicacion()
    {
        $calc = new Calculadora();
        $this->assertEquals(6, $calc->multiplicacion(3, 2));
        $this->assertEquals(0, $calc->multiplicacion(5, 0));
        $this->assertEquals(-15, $calc->multiplicacion(-3, 5));
    }

    public function testDivision()
    {
        $calc = new Calculadora();
        $this->assertEquals(2, $calc->division(6, 3));
        $this->assertEquals(1.5, $calc->division(3, 2));
        $this->assertEquals(-2, $calc->division(-6, 3));

        $this->expectException(\InvalidArgumentException::class);
        $calc->division(5, 0);
    }

    public function testRaizCuadrada()
    {
        $calc = new Calculadora();
        $this->assertEquals(3, $calc->raizCuadrada(9));
        $this->assertEquals(5, $calc->raizCuadrada(25));
        $this->assertEquals(0, $calc->raizCuadrada(0));

        $this->expectException(\InvalidArgumentException::class);
        $calc->raizCuadrada(-1);
    }
}
?>
