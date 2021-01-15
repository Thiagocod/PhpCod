<?php
// novos aperador null
//caso 1
$a = NULL;

$b = NULL;

$c = 10;

echo "caso 1";
echo "<br>";
echo $a ?? $b ?? $c;
echo "<br>";
echo "<br>";

//caso 2
$a = NULL;

$b = 8;

$c = 10;
echo "caso 2";
echo "<br>";
echo $a ?? $b ?? $c;
echo "<br>";
echo "<br>";
// embrado que o echo só vai mostrar a variavel $b não vai passar pela $c


//caso 3

$a = 1;

$b = NULL;

$c = NULL;
echo "caso 3";
echo "<br>";
echo $a ?? $b ?? $c;
echo "<br>";

/* o operador ?? funcionada de seguinte forma caso $a seja nulo mostre $b caso $b seja nulo mostre $c

*/



 ?>
