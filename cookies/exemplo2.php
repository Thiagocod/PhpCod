<?php

if(isset($_COOKIE["NOME_DO_COOKIE"])){

  var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true)); // usando o json_decode como array
  echo "<hr>";
  $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]); // usando o json_decode como objeto

  echo $obj->empresas;

}




?>
