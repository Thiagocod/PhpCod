<?php

/// esse comandos transforma a imagem em uma string podendo ser usado apenas essa base de dados para chamar a imagem

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:".$mimetype.";base64,".$base64;
?>
<a href="<?=$base64encode?>" target="_blank">  Link Para imagem </a>

<img src="<?=$base64encode?>">
