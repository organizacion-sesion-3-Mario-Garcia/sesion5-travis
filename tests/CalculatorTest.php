<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 /*
    public function testAdd(): void
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testMultiply(): void
    {
        $result = $this->calculator->multiply(5, 2);
        $this->assertEquals(10, $result);
    }

    public function testDivision(): void
    {
        $result = $this->calculator->division(10, 2);
        $this->assertEquals(5, $result);
    }
*/
    public function testPar(): void
    {
        $result = $this->calculator->par(10);
        $this->assertEquals(true, $result);
        $result = $this->calculator->par(5);
        $this->assertEquals(false, $result);
        $result = $this->calculator->par(2);
        $this->assertEquals(true, $result);
        $result = $this->calculator->par(15);
        $this->assertEquals(false, $result);
    }
 
}
