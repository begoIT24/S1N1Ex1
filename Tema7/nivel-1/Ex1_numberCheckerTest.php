<?php

require_once("Ex1_numberChecker.php");
    class numberCheckerTest extends PHPUnit\Framework\TestCase{
    
       public function __constructTest(){

        $number1 = new NumberChecker(10);
        $number2 = new NumberChecker(-10);
        $number3 = new NumberChecker(5);
        $number4 = new NumberChecker(-5);
        
        $this->assertSame(10, $number1);
        $this->assertSame(-10, $number2);
        $this->assertSame(5, $number3);
        $this->assertSame(-5, $number4);
    }
    public function isEvenTest(){
        $number1 = new NumberChecker(10);
        $number3 = new NumberChecker(5);

        $this->assertTrue($number1->isEven());     //$this->assertIsBool(1)
        $this->assertFalse($number3->isEven());
    }
    public function isPositiveTest(){
        $number1 = new NumberChecker(10);
        $number2 = new NumberChecker(-10);
        
        $this->assertTrue($number1->isPositive());
        $this->assertFalse($number2->isPositive());
    }
}
?>