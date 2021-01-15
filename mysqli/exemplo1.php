<?php

$conn = new mysqli("127.0.0.1","root","","dbphp7");
if($conn->connect_error){

  echo "Error: " . $conn->connect_error;

}else {
  echo "A conexao com o banco de dados foi um sucesso!!!!";
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");
$stmt->bind_param("ss",$login,$pass); // o primeiro parametro tratasse do tipo de dado s do primeiro dado e s do segundo dado que são strings
$login = "user";
$pass = "123458";
$stmt->execute();
$login = "root";
$pass ="klasjdfl";
$stmt->execute();
?>
