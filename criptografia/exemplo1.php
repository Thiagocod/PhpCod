<?php

// apartir do php 7.1.0 o mcrypt_encrypt ficou obsoleto podendo não funcionar em versões posteriores

echo "Versão do PHP: ".PHP_VERSION;

echo "<hr>";

$data = [
"nome"=>"Hcode"
];

define('SECRET', pack('a16', 'senha'));

$mcrypt = mcrypt_encrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
  );

$final = base64_encode($mcrypt);

var_dump($final);

$string = mcrypt_decrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    base64_decode($final),
    MCRYPT_MODE_ECB
  );

var_dump(json_decode($string, true));

?>
