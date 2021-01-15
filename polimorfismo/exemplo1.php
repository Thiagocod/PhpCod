<?php
// ## polimorfismo ##
// nada mais é que a modificação do metodo da classe herdada

abstract class Animal {

  public function falar(){

    return "som";

  }
  public function mover(){

    return "Andar";

  }

}

class Cachorro extends Animal{

    public function falar(){// polimorfismo do metodo falar()

      return "Late";

    }
}

class Gato extends Animal{

  public function falar(){// polimorfismo do metodo falar()

    return "Miar";

  }
}

  class Passaro extends Animal{

    public function falar(){

      return "Canta";// polimorfismo

    }
    public function mover(){

      return "Voar e ". parent:: mover(); // parent pega o que foi definido da classe pai para concatenar com o voar nesse caso.
    }


  }



$pluto = new Cachorro();

echo $pluto->falar()."<br>";
echo $pluto->mover()."<br>";

echo "<hr>";

$garfield = new Gato();

echo $garfield->falar()."<br>";
echo $garfield->mover()."<br>";

echo "<hr>";

$loro = new Passaro();
echo $loro->falar()."<br>";
echo $loro->mover()."<br>";


?>
