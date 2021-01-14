<?php
$link = "https://scontent.fbfh8-1.fna.fbcdn.net/v/t39.14241-6/s130x130/47612791_580198415757653_8766470108781477888_n.jpg?_nc_cat=1&_nc_sid=7317c6&_nc_eui2=AeG1XfV-rqk7ImfyDqf2e0iRuQldk9FSsH65CV2T0VKwfv41OGPLmHtp5K4dtxAhG7aNghqyZ0OPZlyF8FEhQ38o&_nc_ohc=265HQdTHeK8AX-kWTgG&_nc_ht=scontent.fbfh8-1.fna&_nc_tp=7&oh=41640f2571678b86b88c5a345f7f5288&oe=5F654D09";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename=basename($parse["path"]);

$file = fopen($basename,"w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">
