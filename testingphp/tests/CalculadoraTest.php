<?php
use Modelos\Calculadora;
use PHPUnit\Framework\TestCase;
class CalculadoraTest extends TestCase
{
    protected $calculadora;
    public function setUp():void
    {
        $this->calculadora = new Calculadora();
    }

    protected function tearDown():void
    {
        $this->calculadora = null;
    }

    public function additionProvider()
    {
        return [
            [3, 1, new Exception("error no puede ser negativo")],
            [-1, 1, new Exception("error no puede ser negativo")],
            [1, -1, new Exception("error no puede ser negativo")],
            [0, 3, 1],
            [1, 4, 4],
            [2, 5, 10],
            [3, 7, 35],
            [1, 1, 1],
            ['x', 'y', new Exception("error deben ser números")]
            
        ];
    }



    public function testvalido()
    {
        $expect = true;
        $result = $this->calculadora->validardatos(2,1);
        $this->assertEquals($expect, $result);
    }

    public function testfactorialnegativo()
    {
        $expect = 6;
        $result = $this->calculadora->calcularfactorial(3);
        $this->assertEquals($expect, $result);
    }
        /**
     * 
     * @dataProvider additionProvider
     */
    public function testCombinatoria($x,$n,$exp)
    {
        $expect = $exp;
        $result = $this->calculadora->calcularCombinatoria($x,$n);
        echo $result;
        $this->assertEquals($expect, $result);
    }
}
