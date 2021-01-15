<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root","");

$conn->beginTransaction(); // serve para aceitar ou não os comandos no banco de dados

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario=?"); // ##o comando delete sem o WHERE é muito perigoso poque exclui tudo que tiver dentro da tabela##

$id = 1;

$stmt->execute(array($id));

// $conn->rollback(); // serve para cancelar os camando executados mas primeiro temos que iniciar a transação com beginTransaction
$conn->commit(); //serve para confimar os comando executados


echo "Deletado com sucesso!!!";

?>
