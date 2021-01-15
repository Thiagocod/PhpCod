<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

$aux1 = $dir1.DIRECTORY_SEPARATOR.$filename;
$aux2 = $dir2.DIRECTORY_SEPARATOR.$filename;

if(!file_exists($aux1)) {
  $file = fopen($aux1, "w+");
  fwrite($file, date("Y-m-d H:i:s"));
  fclose($file);
}

rename(
  $aux1,//origem
  $aux2 //destino

);

echo "Arquivo movido com sucesso";

?>
