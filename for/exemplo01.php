<?php

for ($i = 0;$i < 10; $i++){

  echo ($i+1)."<br>";

}

echo "==============================================================================================="."<br>";

for ($i = 0;$i <= 1000; $i+=5){// pular de 5 em 5

  if ($i > 200 && $i < 800) continue; // a palavra reservada continue faz que o for iguinore o que for maior que 200 e menor que 800
  if ($i === 900) break; // dessa forma o for para no 900
  echo $i."<br>";
}

/* Exemplo de loop Infinito

  for ($i = 0;$i <= 1000; $i--){

  if ($i > 200 && $i < 800) continue;
  if ($i === 900) break;
  echo $i."<br>";
}*/



 ?>
