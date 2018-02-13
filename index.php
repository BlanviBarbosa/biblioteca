<?php

require_once('autoload.php');

$contaType = new BBS\Conta\Types\ContaType();
$contaType->depositar(10);
echo $contaType->getSaldo();


$bancoSantander = new BBS\Banco\Santander();
$bancoSantander->setConta($conta);
$bancoSantander->setNome("Santander Exemplo");

$bancoSantander->getConta()->getSaldo(); 

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