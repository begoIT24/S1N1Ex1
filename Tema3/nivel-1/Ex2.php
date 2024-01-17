<?php
$X = [10, 20, 30, 40, 50, 60];
echo count($X) . "</br>";

unset($X[3]);

echo print_r($X) . "</br>";      //Sense reindexar

echo print_r(array_values($X)) . "</br>";  //Reindexem i mostrem

echo count($X);

?>