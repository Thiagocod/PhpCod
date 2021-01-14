<?php

$name = "images";

// is_dir se refere se exite um diretorio com o nome dentro das aspas como tem um ponto de esclamação ! no antes do is_dir aponta a não existencia da pasta
if(!is_dir($name)){

  mkdir($name);// mkdir cria uma pasta nesse caso com nome dentro da variavel $name
  echo "Diretório $name criado com sucesso!";
} else {
  rmdir($name);// rmdir remove o diretorio
  echo "Já existe o diretorio: $name foi removido";
}

?>
