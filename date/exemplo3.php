<?php
/*
                  linux       utf-8      windows
                    |          |            |
                    V          V            V                       */
setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese"); // padrão de linguagem utilizada, esse formato pemite que independente do servidor estará sempre em portugues

echo ucwords(strftime("%A %d %B %G")); // formatação diferente do strtotime, função sensivel ao setlocale






 ?>
