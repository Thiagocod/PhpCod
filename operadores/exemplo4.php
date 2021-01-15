<?php
/* Operadores de comporação
> Maior
< Menor
== igual (apenas = é operação de atribuição)
    faz comparação de valores não de tipo de variaveis
    Exemplo1 $a=50 $b=50 (Verdadeiro)
    Exemplo2 $a=50 $b=50.0 (Verdadeiro apesar que a variavel $b é float
    e a variavel $a int)
=== Compara Valores e tipo de variaveis
    Exemplo1 $a=50 $b=50 (Verdadeiro)
    Exemplo2 $a=50 $b=50.0 (falso)
!= operador diferente: como no operador igual tambem vale a regra valor e tipo de variavel

!== operador diferente valor e variavel


*/

$a = 30;

$b = 55;

var_dump($a > $b); // var_dump é uma função de verdeiro ou falso.

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a === $b);

echo "<br>";

var_dump($a != $b);

echo "<br>";

var_dump($a !== $b);

echo "<br>";

var_dump($a <== $b);

echo "<br>";

var_dump($a ==> $b);

 ?>
