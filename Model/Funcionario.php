<?php
class Funcionario
{
	private $IdFuncionario;
	private $Nome;
	private $Salario;
	private $HorasSemanais;
	private $NumAlunos;

	public function __construct($Nome, $Salario, $HorasSemanais, $NumAlunos, $IdFuncionario = null)
	{
		$this->Nome = $Nome;
		$this->Salario = $Salario;
		$this->HorasSemanais = $HorasSemanais;
		$this->NumAlunos = $NumAlunos;
		$this->IdFuncionario = $IdFuncionario;
	}

	// Getters
	public function getIdFuncionario()
	{
		return $this->IdFuncionario;
	}

	public function getNome()
	{
		return $this->Nome;
	}

	public function getSalario()
	{
		return $this->Salario;
	}

	public function getHorasSemanais()
	{
		return $this->HorasSemanais;
	}

	public function getNumAlunos()
	{
		return $this->NumAlunos;
	}

	// Setters
	public function setIdFuncionario($IdFuncionario)
	{
		$this->IdFuncionario = $IdFuncionario;
	}

	public function setNome($Nome)
	{
		$this->Nome = $Nome;
	}

	public function setSalario($Salario)
	{
		$this->Salario = $Salario;
	}

	public function setHorasSemanais($HorasSemanais)
	{
		$this->HorasSemanais = $HorasSemanais;
	}

	public function setNumAlunos($NumAlunos)
	{
		$this->NumAlunos = $NumAlunos;
	}
}
?>