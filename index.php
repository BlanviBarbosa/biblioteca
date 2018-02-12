<?php

require_once "Pessoa.php";

$pessoa1 = new Pessoa("Marcia", 20);

$pessoa2 =	new Pessoa("Maria", 19);

echo $pessoa1->correr(50);

?>