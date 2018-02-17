<?php
class Funcionario
{
	private $codigo;
	public $nome;
	private $nascimento;
	protected $salario;

	/***
	* método setSalario
	* atribui o parâmetro $salario à propriedade $salario
	*/
	function setSalario($salario)
	{
		// verifica se é numérico e positivo
		if (is_numeric($salario) and ($salario > 0))
		{
			$this->salario = $salario;
		}else{
			echo "Falha na recepção do salario";
		}
	}
	
	/***
	* método getSalario
	* retorna o valor da propriedade $salario
	*/
	function getSalario()
	{
		return $this->salario;
	}
}
?>