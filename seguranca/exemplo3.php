<?php
// usando plataforma unix
// esse exemplo trata as permissoes de pastas em seu sistema e muito importante verificar para não haver nem um tipo de ataque o mais perigo é deixar a pemissão 0777
// para alterar a permissao da pasta chmod

$pasta = "Arquivos";

$permissao = "0775";


if(!is_dir($pasta)) mkdir($pasta,$permissao);

echo "Diretorio criado com sucesso";

?>
