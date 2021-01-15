<?php

// editando uma imagem

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image, 100, 100,100);

imagestring($image,5,450,150,"Certificado", $titleColor);
imagestring($image,5,440,350,"Thiago Vieira Pinto", $titleColor);
imagestring($image,3,440,370,utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

 // imagejpeg($image)// mostra a imagem no navegador

imagejpeg($image,"Certificado-".date("d-m-Y").".jpg", 10);
//desta forma cria um arquivo da foto onde o "Certificado-".date("d-m-Y").jpg é o nome do arquivo criado e 10 é o tamanho em porcentagem no caso 10% da imagem total

imagedestroy($image);

?>
