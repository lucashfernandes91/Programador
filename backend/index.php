<?php
/**
 * Script inicial para utilizar os Objetos criados
 * 
 */

if (!file_exists("vendor")) {
    exit("Erro: nao foi possivel carregar as dependencias, instale composer http://getcomposer.org/\n");
}

require_once "vendor/autoload.php";
