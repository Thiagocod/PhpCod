<?php

/* $_SESSION faz o controle de acesso de uma variavel por sessão,
exemplo disso e o acesso de contas de bancos que tem um tempo estimador
para ficar logado no site sem estar ativo */

require_once("config.php"); // aqui estamos chamando o artivo config.php para ativar o session_start

$_SESSION['nome'] = "hcode";


?>
