<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


$x = new BBS\Conta\Types\ContaType();
$x->depositar(10);
echo $x->getSaldo();

/*
require_once "ProcessoTrait.php";
require_once "ContaAbstract.php";
require_once "Conta.php";
require_once "ContaPremium.php";

$conta = new ContaPremium();
$conta->depositar(100);
$conta->sacar(50);


echo $conta->getSaldo();
*/
?>