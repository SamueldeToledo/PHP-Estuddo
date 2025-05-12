<?php 

//estudo de strings
$string="string\n";
echo strrev($string) ; //reverte uma string

$explode = "O Macaco gosta de banana";

$array = explode(" ",$explode) ;

foreach($array as $key => $value){
echo($value);
};