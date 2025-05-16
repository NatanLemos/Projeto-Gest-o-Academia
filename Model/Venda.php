<?php

class Venda
{
    private $idvenda;
    private $situacao;
    private $datavenda;
    private $totalvenda;
    private $IdFuncionario;
    private $Idcliente;
    public function __construct($idvenda, $situacao,$datavenda, $totalvenda, $IdFuncionario = null, $Idcliente = null)
    {
        $this->idvenda = $idvenda;
        $this->situacao = $situacao;
        $this->datavenda = $datavenda;
        $this->totalvenda = $totalvenda;
        $this->IdFuncionario = $IdFuncionario;
        $this->Idcliente = $Idcliente;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $situacao 
     * @return self
     */
    public function setSituacao($situacao): self
    {
        $this->situacao = $situacao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getidvenda()
    {
        return $this->idvenda;
    }

    /**
     * @param mixed $idvenda 
     * @return self
     */
    public function setidvenda($idvenda): self
    {
        $this->idvenda = $idvenda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getdatavenda()
    {
        return $this->datavenda;
    }

    /**
     * @param mixed $datavenda 
     * @return self
     */
    public function setdatavenda($datavenda): self
    {
        $this->datavenda = $datavenda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdFuncionario()
    {
        return $this->IdFuncionario;
    }

    /**
     * @param mixed $IdFuncionario 
     * @return self
     */
    public function setIdFuncionario($IdFuncionario): self
    {
        $this->IdFuncionario = $IdFuncionario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdcliente()
    {
        return $this->Idcliente;
    }

    /**
     * @param mixed $Idcliente 
     * @return self
     */
    public function setIdcliente($Idcliente): self
    {
        $this->Idcliente = $Idcliente;
        return $this;
    }
    /**
     * @return mixed
     */
    public function gettotalvenda()
    {
        return $this->totalvenda;
    }

    /**
     * @param mixed $totalvenda 
     * @return self
     */
    public function settotalvenda($totalvenda): self
    {
        $this->totalvenda = $totalvenda;
        return $this;
    }
}
?>