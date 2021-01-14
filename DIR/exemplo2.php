<?php

$images = scandir("images");

var_dump($images);

echo "<hr>";

$data = array();


foreach ($images as $img) {
  if(!in_array($img,array(".",".."))){

    $filename = "images".DIRECTORY_SEPARATOR.$img;

    $info = pathinfo($filename);

    $info["size"] = filesize($filename);
    $info["modified"] = date("d/m/y H:i:s", filemtime($filename));
    $info["url"] = "http://localhost/php/DIR/".str_replace("\\","/",$filename);/* a função str_replace serve para trocar uma caracter ou mais dentro do
    string como no windows e linux as barras são contrarias ouve a necessidade porem para indicar uma barra dentro do atom é necessaria colocar dias barras \\ */
    var_dump($info);
    echo "<hr>";
    array_push($data,$info);
  }
}
echo json_encode($data);

?>
