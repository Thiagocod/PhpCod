<?php

class Carro{
  private $modelo;
  private $motor;
  private $ano;

  public function getModelo(){

    return $this->modelo;

  }

  public function setModelo($modelo){ // lembrando que a classe ano dentro do setModelo($modelo) não é a mesma criada no private $modelo

    $this->modelo = $modelo;

  }

  public function getMotor():float{// pode forçar um tipo de variavel php7

    return $this->motor;

  }

  public function setMotor($motor){

    $this->motor = $motor;

  }

  public function getAno():int{// pode forçar um tipo de variavel php7

    return $this->ano;

  }

  public function setAno($ano){

    $this->ano = $ano;

  }

  public function exibir(){
    return array(
        "modelo"=>$this->getModelo(),
        "motor"=>$this->getMotor(),
        "ano"=>$this->getAno()

    );


  }


}

$gol = new Carro();
$gol->setModelo("Gol");
$gol->setMotor("1.6");
$gol->setAno("2017");

print_r($gol->exibir());
echo "<hr>";
var_dump($gol->exibir());

?>
