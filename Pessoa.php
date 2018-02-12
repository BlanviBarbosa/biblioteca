<?
/**
* 
*/
class Pessoa
{
	public $nome;
	public $idade;
}


$pessoa1 = new Pessoa();
$pessoa1->nome 	= "TalMarcia";
$pessoa1->idade = 30;


$pessoa2 =	new Pessoa();
$pessoa2->nome 	= "Maria";
$pessoa2->idade = 20;


echo $pessoa1->nome;

?>