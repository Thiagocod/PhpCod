<?php

$conn = new mysqli("127.0.0.1","root","","dbphp7");
if($conn->connect_error){

  echo "Error: " . $conn->connect_error;

}else {
  echo "A conexao com o banco de dados foi um sucesso!!!!";
}
echo "<br>";
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY idusuario");

$data = array();

// while($row = $result->fetch_array(MYSQLI_ASSOC)){
while($row = $result->fetch_assoc()){
  array_push($data, $row);
}
echo json_encode($data);
?>
