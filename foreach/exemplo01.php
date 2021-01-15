<?php
// foreach é utilizado para percorrer arrays
$meses = $arrayName = array(
  "Janeiro","Fevereiro","Marco","Abril","Maio", "Junho",
  "Julho","Agosto","Setembro", "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {
  echo "Indice: ".($index+1)."<br>";
  echo "O mês é ".$mes."<br><br>";
}


?>
