<?php

// nesse exemplo de __autoload vimos que ele carrega classes automaticamente de outros documentos
// porem ele só pode ser usado quando o arquivo está na mesma pasta

function __autoload($nomeClasse){ // __autoload faz a lifação entre as classes sem a necessidade de escrever require_once em todos os documentos.

  var_dump("$nomeClasse");// nesse trecho do codigo podera ver o autoload trabalhando e chamando a classe DelRey e também a classe pai Automovel que estão em dois arquivos diferentes

  require_once("$nomeClasse.php");


}

$carro = new DelRey(); // exemplo disso é que a classe DelRey precisa da classe pai que é abstrata para funcionar o __autoload busca essa informação e faz novamento uma busca sobre a classe pai

$carro ->acelerar("80");

?>
