<?php

class Pessoa {

  public $nome ="Rasmus Lerdorf"; // public todo mundo ve
  protected $idade = 48; // so quem pode acessar essa variavel é a propria classe
  private $senha = "123456789"; // so quem pode acessar essa variavel é a propria classe a diferença que nem mesmo as classes herdeiras pode acessar nesse caso.


  public function verDados(){

    echo "Nome: ".$this->nome."<br>";
    echo "Idade: ".$this->idade."<br>";
    echo "Senha: ".$this->senha."<br>";
  }

}

$objeto = new Pessoa();

// echo $objeto->senha . "<br>";

$objeto->verDados();

?>
