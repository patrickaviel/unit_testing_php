<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase{
    public function testadd(){
        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25,$result);
    }
    public function testsubtract(){
        $calculator = new App\Calculator;
        $result = $calculator->subtract(20,5);

        $this->assertEquals(15,$result);
    }
}