<?php

function incluirClasse($nomeClasse){

    if(file_exists($nomeClasse.".php") === true){

      require_once($nomeClasse.".php");

   }
}
spl_autoload_extensions(".php"); // so funciona no __autoload
spl_autoload_register("incluirClasse"); // spl_autoload_register permite criar mais de um registro de __autoload
spl_autoload_register(function($nomeClasse){

  if(file_exists("abstrata".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){

    require_once("abstrata".DIRECTORY_SEPARATOR.$nomeClasse.".php");
  }
});
$carro = new DelRey(); // exemplo disso é que a classe DelRey precisa da classe pai que é abstrata para funcionar o __autoload busca essa informação e faz novamento uma busca sobre a classe pai

$carro ->acelerar("80");

?>
