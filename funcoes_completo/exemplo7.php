<?php // o que mudou no php 7

function soma(int ...$valores){

  return array_sum($valores); // função array_sum soma os valores de forma automatica
}

echo soma(2 , 2);
echo "<br>";
echo soma(25 , 33);
echo "<br>";
echo soma(1.5 , 3.2); // como forçamos o tipo de valor o php ignora o . decimal
echo "<br>";
echo soma(1, 2, 3);
echo "<br>";


?>
