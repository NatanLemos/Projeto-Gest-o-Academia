<?php
class Cliente
{
	private $IdCliente;
	private $Nome;
	private $Telefone;
	private $Mensalidade;

	public function __construct($Nome, $Telefone, $Mensalidade, $IdCliente = null)
	{
		$this->Nome = $Nome;
		$this->Telefone = $Telefone;
		$this->Mensalidade = $Mensalidade;
		$this->IdCliente = $IdCliente;
	}

	// Getters
	public function getIdCliente()
	{
		return $this->IdCliente;
	}

	public function getNome()
	{
		return $this->Nome;
	}

	public function getTelefone()
	{
		return $this->Telefone;
	}

	public function getMensalidade()
	{
		return $this->Mensalidade;
	}

	// Setters
	public function setIdCliente($IdCliente)
	{
		$this->IdCliente = $IdCliente;
	}

	public function setNome($Nome)
	{
		$this->Nome = $Nome;
	}

	public function setTelefone($Telefone)
	{
		$this->Telefone = $Telefone;
	}

	public function setMensalidade($Mensalidade)
	{
		$this->Mensalidade = $Mensalidade;
	}
}
?>