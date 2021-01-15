<?php
$json = '[{"nome":"Thiago","idade":30},{"nome":"Cezar","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

 ?>
