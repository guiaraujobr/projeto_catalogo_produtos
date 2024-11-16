<?php

/*A função autoload carrega automaticamente as classes necessárias no código,
 evitando que você precise fazer isso manualmente com require ou include
 cada vez que usar uma classe.*/

spl_autoload_register(function ($classe) {

    require "$classe.php";

}
);

 ?>
