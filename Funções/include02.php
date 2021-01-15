<?php
// require "inc/include.php"; a opção require obriga ter o documento e esteja funcionando corretamente caso não ocorra gera um erro fatal

// include "inc/include.php"; // o include tenta funcionar o documento e caso não encontre o documento procura no seu diretorio padrão
// include_remoto pega uma função de outro site extremente perigoso.

require_once "inc/include.php"; /* require a forma mais segura de chamar funções,
require_once evita que chame mais de uma vez o mesmo arquivo criando erros.
*/
require "inc/include.php"; // exemplo de chamar o arquivo duas vezes


$resultado = somar(10,20);

echo $resultado;

// php7 não tem mais erros fatais que param a pagina viram esseção para serem tratados como erros.

?>
