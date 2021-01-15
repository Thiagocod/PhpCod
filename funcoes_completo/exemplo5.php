<?php

$a = 10;
// passagem de paramentro por valor
function trocaValor($a){ // e que acontece dentro da função fica na função o $a e um paremetro d função não e a mesma que fica na varia acima
  $a +=50;
  return $a;
}
// passagem de paramentro por referencia  quando a $a e a mesma varialvel a cima a varia de valor 10 neste caso
function trocarReferencia(&$a){ // O & comercia se refere a passagem de paramentro por referencia
  $a +=50;
  return $a;
}

echo "Exemplo de passagem de paramentro dentro de uma função";
echo "<br>";
echo "Troca de valores em uma função por valor";
echo "<br>";
echo trocaValor ($a);
echo "<br>";
echo "$a";

echo "<hr>";

echo "Troca de valores por referencia";
echo "<br>";
echo trocarReferencia($a);
echo "<br>";
echo "$a";


 ?>
