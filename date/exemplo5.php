<?php
// classe datetime

$dt = new DateTime();

$periodo = new DateInterval("P15D");
echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<hr>";

echo $dt->format("d/m/Y H:i:s");

?>
