<?php
require_once("Ex1_numberChecker.php");
class Ex1_NumberCheckerTest extends PHPUnit\Framework\TestCase {

    public function testIsEven(){
        $number1 = new NumberChecker(10);
        $this->assertTrue($number1->isEven());     //$this->assertIsBool(1)
    }
    public function testIsNotEven(){
        $number2 = new NumberChecker(5);
        $this->assertFalse($number2->isEven());
    }
    public function testIsPositive(){
        $number1 = new NumberChecker(10);
        $this->assertTrue($number1->isPositive());
    }
    public function testIsNotPositive(){
        $number2 = new NumberChecker(-10);
        $this->assertFalse($number2->isPositive());
    }
}
?>