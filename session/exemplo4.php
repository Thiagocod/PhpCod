<?php

require_once ('config.php');

session_regenerate_id();// geral um id sessão novo para o usuario

/* O session_regenerate_id pode ser usado como uma boa pratica de programação criando um codigo mais robusto
evitando problemas como em hacker usar o id de outro usuario coloque o session_regenerate_id nas configurações
da pagina de login assim mesmo que o usuario venha com um id prefixado ele ganhara um id */

// echo session_id();



var_dump($_SESSION);

?>
