<?php
$total = 800;
$desconto = 0.9;

// o condigo usando o do while vai passar pelo codigo pelo menos uma vez
do {
  $total *= $desconto; // *= esse sibolo significa que a mesma coisa que $total = $total * $ desconto de uma forma simplificada.
  echo $total."<br>";
} while ($total > 100);



 ?>
