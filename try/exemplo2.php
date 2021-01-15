<?php
// tratamento de erros
function tratanome($name){

  if(!$name){

    throw new Exception("Nenhum nome foi informado.", 1);

  }
  echo ucfirst($name)."<br>";
}

try{
  tratanome("joão augusto");
  tratanome("");
}catch(Exception $e){

    echo $e->getMessage()."<br>";

} finally{

  echo "Executou o try!";

}


?>
