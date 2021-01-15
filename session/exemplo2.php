<?php

require_once("config.php");

// session_unset($_SESSION['nome']); //esse codigo limpa a variavel de sessão
// session_destroy limpa a variavel e remove o usuario

echo $_SESSION['nome'];

?>
