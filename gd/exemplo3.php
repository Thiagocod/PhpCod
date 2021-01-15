<?php

// editando uma imagem

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image, 100, 100,100);

$ds = DIRECTORY_SEPARATOR;
// imagettftext tem mais opções que o imagestring no caso do 0 e o angulo permite tambem selecionar uma font propria 
imagettftext($image,32,0,320,250, $titleColor,"C:".$ds."wamp64".$ds."www".$ds."php".$ds."gd".$ds."fonts".$ds."Bevan".$ds."Bevan-Regular.ttf","Certificado");
imagettftext($image,32,0,375,350, $titleColor,"C:".$ds."wamp64".$ds."www".$ds."php".$ds."gd".$ds."fonts".$ds."Playball".$ds."Playball-Regular.ttf", "Thiago Vieira Pinto" );
imagestring($image,3,440,370,utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>
