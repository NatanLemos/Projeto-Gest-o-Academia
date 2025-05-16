<?php

class Produto
{
    private $idproduto;

    private $nome;

    private $descricao;

    private $preco;

    private $Quantidade;


    public function __construct($nome, $descricao, $preco, $Quantidade, $idproduto = null)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->Quantidade = $Quantidade;
		$this->idproduto = $idproduto;
    }


	/**
	 * @return mixed
	 */
	public function getidproduto() {
		return $this->idproduto;
	}
	
	/**
	 * @param mixed $idproduto 
	 * @return self
	 */
	public function setidproduto($idproduto): self {
		$this->idproduto = $idproduto;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDescricao() {
		return $this->descricao;
	}
	
	/**
	 * @param mixed $descricao 
	 * @return self
	 */
	public function setDescricao($descricao): self {
		$this->descricao = $descricao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPreco() {
		return $this->preco;
	}
	
	/**
	 * @param mixed $preco 
	 * @return self
	 */
	public function setPreco($preco): self {
		$this->preco = $preco;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getQuantidade() {
		return $this->Quantidade;
	}
	
	/**
	 * @param mixed $Quantidade 
	 * @return self
	 */
	public function setQuantidade($Quantidade): self {
		$this->Quantidade = $Quantidade;
		return $this;
	}
}
?>