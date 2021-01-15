<?php

// interface que o padrão que precisa ser usado dentro de suas classes para que funcione perfeitamente
// interface é um tipo de contrato onde algumas regras nas classes precisam ser seguidas.
// criando assim um codigo mais organizado e compativel com as regras do mercado de seus clientes


interface Veiculo{

  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);



}

class civic implements Veiculo{
public function acelerar($velocidade){ // quando voce declara uma variaveldentro do metodo não precisa ser necessariamente igual á a variavel dentro da interface pode ser outra


  echo "O veiculo acelerou até ". $velocidade . " km/h";

}
public function frenar($velocidade){ // quando voce declara uma variaveldentro do metodo não precisa ser necessariamente igual á a variavel dentro da interface pode ser outra


  echo "O veiculo frenou até ". $velocidade . " km/h";

}

public function trocarMarcha($marcha){


  echo "O veiculo engatou a marcha: ". $marcha;

}

}

$carro = new civic();




 ?>
