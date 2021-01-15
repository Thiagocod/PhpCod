<?php

$nomePasta = "pasta_test";

if (!is_dir($nomePasta))mkdir($nomePasta);
foreach (scandir($nomePasta) as $item) {
  unlink($nomePasta."\\".$item);
}
echo "Arquivos removidos com sucesso!!!!!";


?>
