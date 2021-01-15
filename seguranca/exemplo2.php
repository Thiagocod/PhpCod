<?php

$id = (isset($_GET["id"]))?$_GET["id"]:3;

$conn = mysqli_connect("localhost","root", "","dbphp7");

// para tratar invações no codigo pelo sql injection faz esse if a seguir

if(!is_numeric($id) || strlen($id) > 5){
  exit("Pegamos você!");
}


$sql = "SELECT * FROM tb_usuarios   WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){
  var_dump($resultado);
}

?>
