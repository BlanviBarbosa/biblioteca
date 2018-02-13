<?php
/**
* 
*/

namespace BBS\Conta\Types;

use BBS\Conta\ContaAbstract as ContaAbstrata;

class ContaType extends ContaAbstrata
{
	protected function calculoDeposito($valor)
	{
		return $valor += 10;
	}
}

?>