<?php
$pessoas = array();

array_push($pessoas,array(
  'nome' =>'Thiago' ,
  'idade' => 30
));
array_push($pessoas,array(
  'nome' =>'Cezar' ,
  'idade' => 25
));

echo json_encode($pessoas);

 ?>
