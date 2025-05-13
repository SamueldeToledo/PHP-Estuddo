<?php 

class Construtores{
    public function __construct(){
        echo"Toda vez q a classe for instanciada, rodará este bloco de código";
    }

    public function __destruct(){
        echo "\nAssim que os objetos desta classe terminarem de serem utilizados, rodará este código.";
    }
}