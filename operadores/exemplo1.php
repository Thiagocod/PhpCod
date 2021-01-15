<?php
//operadores

$nome ="Hcode"; // Atribuições.
$sobrenome = " e demais"; // Atribuições.

echo $nome . $sobrenome;//concatenação. (Hcode e demais)
echo "<br>";
echo $nome . "legal";   //concatenação. (Hcode legal)
echo "<br>";
//operadores compostos
$nome .= " treinamentos"; /* Atribuições + concatenação
(operação adiciona o valor treinamentos a variavel $nome)
ficando dessa forma a string $nome = Hcode treinamentos */

echo $nome;


 ?>
