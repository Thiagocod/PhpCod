<form method="post">
  <input type="text" name="busca">
  <button type="submit">Enviar</button>
</form>


<?php

if (isset($_POST['busca'])){

  // strip_tags protege seu site de codigos digitados no campo busca nesse caso
  // no exemplo strip_tags pode ser colocado excessões de codigo como por exemplo echo strip_tags($_POST('busca'), "<strong><a>"); isso representa que a tag strong é uma excessão.
  echo strip_tags($_POST['busca'],);


  echo "<hr>";
  // outra maneira de proteger seu site de codigos maliciosos é com o htmlentities que converte tudo qe escrito em texto

  echo htmlentities($_POST['busca']);

}
