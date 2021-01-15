<?php

$qualSuaIdade= 17;

$idadeCrianca = 12;
$idadeMaior = 18;
$idademelhor = 65;

if ($qualSuaIdade <= $idadeCrianca ){

  echo "Crianca";

}elseif ($qualSuaIdade >= $idadeMaior && $qualSuaIdade < $idademelhor ) {
  echo "Adulto";

}elseif ($qualSuaIdade > $idadeCrianca && $qualSuaIdade < $idadeMaior ) {
  echo "Adolecente";

}else {
  echo "Melhor Idade";
}

// operador ternario

echo "<br>";

echo ($qualSuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade"; // a função ternario pode ser usado como uma função if simples.



?>
