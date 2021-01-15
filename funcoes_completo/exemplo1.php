<?php

function ola(){

  echo "Olá mundo <br>";

};

ola();

for ($i = 0; $i < 10; $i++){

ola();

};

function oi(){

 return "Oi mundo <br>"; // retorna uma string oi mundo

};
echo "<hr>";

echo oi();
$frase = oi();

echo "Essa frase possui: ".strlen($frase)." caracteres";


?>
