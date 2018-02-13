<?php
/**
* 
*/
namespace BBS\Conta\Types;

use BBS\Conta\ContaAbstract as ContaAbstrata;

class ContaPremiumType extends ContaAbstrata
{
	
	public function __construct()
	{
		$this->saldo += 10;
	}

	protected function calculoDeposito($valor)
	{	
		return $valor += 20;
	}
}
?>