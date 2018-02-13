<?php
/**
* 
*/
namespace BBS\Banco;

use \BBS\Conta\Types\ContaType;

use \BBS\Conta\ContaAbstract;

class Santander
{
	private $nome;
	private $conta;

	function __construct(ContaAbstract $conta)
	{
		$this->conta = $conta;
	}


	public function SetNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getConta()
	{
		return $this->conta;
	}

	public function setConta(ContaAbstract $conta)
	{
		$this->conta = $conta;
	}
}
?>