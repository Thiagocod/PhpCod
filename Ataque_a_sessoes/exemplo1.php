<?php

session_start();

// depois de verificar login e senha reinicie o ID da Sessão

session_destroy();

session_start();

session_regenerate_id();

echo session_id();

?>
