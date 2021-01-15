<?php
$frase ="A repetição e á mãe da retenção";

$palavra = "mãe";
$q = strpos($frase, $palavra);// conta quantos caracteres até chegar na palavra mãe

$text = substr($frase ,0,$q); // mostra partes do texto baseado em paramentros sbstr(local do texto, inicio da parte, final da parte)

var_dump($q);

echo "<br>";

var_dump($text);

echo "<br>";

$texto2 = substr($frase, $q + strlen ($palavra), strlen($frase)); // strlen faz leitura de quantos carates tem na variavel

echo "<br>";

echo $texto2;
 ?>
