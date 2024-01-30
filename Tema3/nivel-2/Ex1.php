<?php
$numEnters1 = [1, 3, 4, 6, 8];
$numEnters2 = [1, 2, 5, 6, 10];
$numIguals = array_intersect($numEnters1, $numEnters2); // array amb els elements comuns
$numMerge = array_merge($numEnters1, $numEnters2); // unim les 2 arrays
$numNoDuplicats = array_unique($numMerge);         // eliminem duplicats
$numEntersFinal = array_values($numNoDuplicats);   // reindexem

echo "Array 1:" . "</br>";
print_r($numEnters1);
echo "</br>";
echo "Array 2:" . "</br>";
print_r($numEnters2);
echo "</br>";
echo "Elements iguals" . "</br>";
print_r($numIguals);
echo "</br>";
// print_r($numNoDuplicats);
echo "Array final:" . "</br>";
print_r($numEntersFinal);
echo "</br>";
foreach ($numEntersFinal as $numEnters) {
    echo  "$numEnters" . "</br>";
}
?>