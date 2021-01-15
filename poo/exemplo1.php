<?php

class Pessoa{

  public $nome; // atributo
  // atributo fora de um metodo utilize $nome no exemplo dentro de metodos semre $this->nome
  public function falar(){ // metodo

    return "O meu nome é ".$this->nome; // this e para usar  a variavel dentro da classe

 }

}

$glaucio = new Pessoa();
$glaucio ->nome = "Glaucio Daniel";
echo $glaucio -> falar();


?>
