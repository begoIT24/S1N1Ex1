<?php
class NumberChecker  {
	
	public function __construct(private int $number){
	}
	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}
}
/*$number = 10;
$num1 = new NumberChecker($number);
$num1 -> __construct($number);
echo $num1->isEven();
echo $num1->isPositive();*/
?>
