<?php

// openssl substitui o mcrypt a partir de php 7.1.1

define("SECRET_IV", pack('a16', 'senha'));
define("SECRET", pack('a16','senha'));

$data = [
  "nome" => "Hcode"
];

$openssl= openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
  );

echo $openssl;

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV );

var_dump(json_decode($string, true));







?>
