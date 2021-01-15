<?php

class Pessoa {

  public $nome ="Rasmus Lerdorf"; // public todo mundo ve
  protected $idade = 48; // Protected mesma classe vê e classes filhas
  private $senha = "123456789"; // Private apenas a propria classe e seu metodos


  public function verDados(){

    echo "Nome: ".$this->nome."<br>";
    echo "Idade: ".$this->idade."<br>";
    echo "Senha: ".$this->senha."<br>";

  }

}


class Programador extends Pessoa{// nessa forma quando você instacia e chama o verDados ele vai puxar todos os dados e mostrar na tela


}

class Programador2 extends Pessoa{ // ne formato ja não por que eu to criando um novo metodo verDados e como a senha é private ela não pode ser vista pelas classes filhas

  public function verDados(){

    echo get_class($this)."<br>";

    echo "Nome: ".$this->nome."<br>";
    echo "Idade: ".$this->idade."<br>";
    echo "Senha: ".$this->senha."<br>";

    }

}

$objeto = new Programador();

// echo $objeto->senha . "<br>";

$objeto->verDados();

echo "<hr>";

$objeto2= new Programador2();


$objeto2->verDados();

?>
