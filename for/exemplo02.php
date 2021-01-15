<?php

echo "<select>"; // essa opção e do html 5  de criar um seleção em formato de barra de rolagem

for ($i=date("Y"); $i >= date ("Y")-100; $i--) {
  echo '<option value="'.$i.'">'.$i.'</option>';

}



?>
