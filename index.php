<?php

require_once "Pessoa.php";
require_once "Produto.php";
require_once "Tenis.php";

//$pessoa1 = new Pessoa("Marcia", 20);
//$pessoa2 =	new Pessoa("Maria", 19);

//echo $pessoa1->correr(50);


$tenis = new TenisAdidas();
$tenis->getCor();

$tenis2 = new SapaTenis();
$tenis2->getCor();
$tenis2->getTamanho();



?>