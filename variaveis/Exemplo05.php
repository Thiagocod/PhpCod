<?php

$nome = "Thiago"; // <---- variavel global

/* nesse exemplo intendemos que variaveis dentro de funções como $nome
são apenas locais dentro da funcão, quando queremos invocar a variavel global
dentro um funções colacamos o comando global $nome; como no exemplo podemos
ter invocações de variaveis diferentes
como no exemplo dois.
*/


function teste(){
  $numero;   //<--- variavel local
  global $nome; //<--- invocando variavel global
  echo $nome;


}

function teste2(){

  $nome = "Jhow"; /*<--- variavel local com mesmo nome da global porem só intena
  nesta função não interferindo na variavel $nome global.*/

}

teste();

teste2();

 ?>
