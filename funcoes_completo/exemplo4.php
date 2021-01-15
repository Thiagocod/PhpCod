<?php

function ola(){

  $argumentos = func_get_args(); // recebe mais de um argumentos sem precisar declaralos
  return $argumentos;

}

var_dump (ola("bom dia",10));



 ?>
