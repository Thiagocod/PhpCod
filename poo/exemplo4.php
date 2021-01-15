<?php // metodo magico
// todo metodo magico começa com __ dois anderlines
// metodo construtor (metodo construtor e executado assim que a classe e instanciada)tem que ter o mesmo nome da classe no caso do php até a versa 5.5 era possivel fazer nesse formato
// ou pelo formato: __construct (esse metodo é o mais utilizado hoje em dia o metodo com o mesmo nome da classe caiu em desuso).

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a,$b,$c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){// esse comando destroi as variavel ou no caso os metodos


      var_dump("Destruir");

    }

    public function __toString(){ // converte em string o texto podendo ser utilizado no echo por exeplo

      return $this->logradouro.", ".$this->numero."-".$this->cidade;

    }



}

$newEndereco = new Endereco("Rua Miguel Teixeira Franco", "280", "Sao Jose dos Pinhais");

var_dump($newEndereco);

echo "<br>";

print_r ($newEndereco);

echo "<hr>";


echo $newEndereco; // usado juntamente com o metodo magico __toString que permite converter o metodo em string

echo "<hr>";

unset($newEndereco); // usado juntamente com o __destruct para destroir os metodos utilizados


?>
