<?php
// lembrando que a opção date não é sensitivo a setlocale isso quer dizer que se o servidor estiver em ingles as informaçoes apareceram e ingles

$ts = strtotime("2001-09-11"); // ver o timestamp de uma data significa ver a quantidade de segundos que tem da data até agora
$ts1 = strtotime("now"); // aceita expressão (now = agora)
$ts2 = strtotime("+ 1 day"); // a colacão de adição a subtração de datas tem que ser nesse formato para funcionar
$ts3 = strtotime("+ 1 week"); // adiciona mais uma semana da data presente
// pode mesclar esses codigos

echo "<br>";

echo date("l, d/m/Y", $ts);

echo "<br>";

echo date("l, d/m/Y", $ts1);

echo "<br>";

echo date("l, d/m/Y", $ts2);

echo "<br>";

echo date("l, d/m/Y", $ts3);

?>
