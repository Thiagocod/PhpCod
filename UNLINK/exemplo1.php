<?php

$file = fopen("test.txt", "w+");

fclose($file);

unlink("test.txt");// apagar um arquivo 

echo "Arquivo removido com sucesso";



?>
