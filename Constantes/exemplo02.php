<?php // arrays constantes foram definidas no php7

define("BANCO_DE_DADOS",[
  '127.0.0.1',
  'root',
  'password',
  'text'
]);

print_r(BANCO_DE_DADOS);

/* para deixar a constante não censitiva é só colocar true no final do difine

define("BANCO_DE_DADOS",[
  '127.0.0.1',
  'root',
  'password',
  'text'
],true); <--- desta forma aqui apesar da pratica não ser recomendada, existe essa opção

print_r(BANCO_DE_DADOS);


?>
