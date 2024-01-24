<?php
class Shape{
    public $ample = 0;
    public $alt = 0;
}
    class Triangle extends Shape{
        public function areaTriangle($ample, $alt){  //aquí "ample" és la base del triangle
            $areaTriangle = $ample * $alt / 2;
            return "L'àrea del triangle és: $areaTriangle";
        }
    }
    class Rectangle extends Shape{
        public function areaRectangle($ample, $alt){
            $areaRectangle = $ample * $alt;
            return "L'àrea del rectangle és: $areaRectangle";
        }
    }
    $triangle1 = new Triangle;
    echo $triangle1 -> areaTriangle(5, 7) . "<br/>";
    
    $rectangle1 = new Rectangle;
    echo $rectangle1 -> areaRectangle(10, 4);
?>