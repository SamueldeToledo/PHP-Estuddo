<?php

//nota:

// include: Inclui o arquivo. Se o arquivo não for encontrado, gera um aviso (warning), mas o script continua a ser executado.
// require: Inclui o arquivo. Se o arquivo não for encontrado, gera um erro fatal (error), interrompendo a execução do script.
// include_once: Inclui o arquivo, mas apenas uma vez. Se o arquivo já tiver sido incluído, ele não será incluído novamente.
// require_once: Inclui o arquivo, mas apenas uma vez. Se o arquivo já tiver sido incluído, ele não será incluído novamente. Similar a require, se o arquivo não for encontrado, gera um erro fatal.

//Classes
include_once "Classes.php";

$objeto = new Generica();

$objeto->RetornaDetalhesClasse();