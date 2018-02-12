<?php
/**
* 
*/
class Pessoa
{
	public $nome;
	public $idade;

	public function __construct($nome, $idade)
	{
		$this->nome  = $nome;
		$this->idade = $idade;
	}

	public function correr($km)
	{
		echo $this->nome." está correndo! </br>";
		for ($i=0; $km > $i ; $i++) 
		{ 
			echo ".";
		}
		echo " </br>".$this->nome."Terminou de correr!";
	}
}

?>