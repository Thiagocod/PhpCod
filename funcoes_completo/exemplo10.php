<?php
// função anonima e quand a mesma não possui nome
function test($callback){

  // processo Lengo

  $callback();

}

test(function(){
  echo "Terminou!";
});

?>
