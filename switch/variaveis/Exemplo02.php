<?php

$anoNascimento = 1990;

$nomeCompleto = "Thiago vieira Pinto";

$nome1 = "Naruto"; // Nome de variavel valida

// $1nome; // O php não aceita variaveis com a primeiro caracter numerico

/* dessa forma você consegui inserir
Mais de uma linha de comentario*/



echo $nome1;

echo "<br>";

unset($nome1); // esse comando limpa a variavel tira seus valores quando necessario

unset($nomeCompleto,$anoNascimento); // pode tambem limpar mais de uma variavel por vez

$nome1 = "Thiago";

$sobrenome = "Vieira";

$nomeComp = $nome1."". $sobrenome;

echo $nomeComp;

echo "<br>";

if (isset($nome1)){ //esse algoritimo trata de fazer verificação pelo comando isset se a mesma existe

   echo $nome1;

}



 ?>
