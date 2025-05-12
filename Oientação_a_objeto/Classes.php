<?php

class Generica{

public $NomeClasse;

public function RetornaDetalhesClasse(){
    $this->NomeClasse = get_class($this);
    echo($this->NomeClasse); //retorna nome da classe
}

}