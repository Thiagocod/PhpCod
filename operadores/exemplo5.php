<?php
// space_ship (nave espacial) faz o teste se os valores são igual maior ou menor

$a = 50;
$b = 50;

var_dump($a <=> $b);

echo "<br>";

$v = $a <=> $b;

echo $v;

echo "<br>";

if ($v == -1) {
  echo "o valor ".$a." e menor que ".$b;
} elseif($v == 0) {
  echo "o valor ".$a." e igual a ".$b;
}else{
  echo "o valor ".$a." e maior que ".$b;
}

echo "<br>";

switch ($v) {
  case '-1':
   echo "o valor ".$a." e menor que ".$b;
    break;
  case '0':
    echo "o valor ".$a." e igual a ".$b;
    break;
  case '1':
    echo "o valor ".$a." e maior que ".$b;
    break;

  default:
    echo "Valor invalido";
    break;
}

 ?>
