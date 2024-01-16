<?php
function contar ($conteo = 1, $numero = 10) {
  for ($i = 1; $i <= $numero; $i += $conteo) {
        echo $i . "</br>";
  }
}
contar(3, 24);
contar(2);
?>