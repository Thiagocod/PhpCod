<?php
$diaDaSemana = date("w"); // date é uma operação nativa que verifica o dia da semana atual. 

switch($diaDaSemana){

  case 0:
  echo "Domingo";
  break;
  case 1:
  echo "Segunda_feira";
  break;
  case 2:
  echo "Terca-feira";
  break;
  case 3:
  echo "Quarta-feira";
  break;
  case 4:
  echo "Quinta-feira";
  break;
  case 5:
  echo "Sexta-feira";
  break;
  case 6:
  echo "Sabado";
  break;

  default:
  echo "Erro: data invalida";
  break;
}



?>
