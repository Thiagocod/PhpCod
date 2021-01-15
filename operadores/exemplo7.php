<?php
//Operador de incremento ++

$a = 10;
echo "a++";
echo "<br>";
echo $a++; /* soma mais um lembrando que só ira somar na proxima vez que a
            variavel for chamada. (Print da tela 10 nesse echo)*/
echo "<br>";
echo $a; // Print da tela pelo echo será 11

echo "<br>";
// $a agora vale 11
echo "++a";
echo "<br>";
echo ++$a; /*essa forma de usar incremeta mais um nesse print do echo valor (12)*/
echo "<br>";
echo $a; // valor (12)
echo "<br>";
echo "<br>";

//Operador de decremento --
$b = 20;
echo "b--";
echo "<br>";
echo $b--; /* soma mais um lembrando que só ira somar na proxima vez que a
            variavel for chamada. (Print da tela 20 nesse echo)*/
echo "<br>";
echo $b; // Print da tela pelo echo será 19

echo "<br>";
// $b agora vale 19
echo "<br>";
echo "--b";
echo "<br>";
echo --$b; /*essa forma de usar incremeta mais um nesse print do echo valor (18)*/
echo "<br>";
echo $b; // Print da tela pelo echo será 18

?>
