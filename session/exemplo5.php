<?php
require_once ('config.php');

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){

  case 0:
    echo "sessões desabilitadas";
   break;

  case 1:
    echo "sessões estão vazias";
   break;

  case 2:
    echo "sessões ativas";
   break;

  default :
    echo "codigo invalido";
  break;
}

?>
