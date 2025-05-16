<?php
class Modalidade_Info
{
    private $idModalidadeInfo;
    private $idmodalidade;
    private $idcliente;
    private $idFuncionario;

    public function __construct($idmodalidade, $idcliente, $idFuncionario, $idModalidadeInfo = null)
    {
        $this->idModalidadeInfo = $idModalidadeInfo;
        $this->idmodalidade = $idmodalidade;
        $this->idcliente = $idcliente;
        $this->idFuncionario = $idFuncionario;
    }

    // Getters
    public function getIdModalidadeInfo()
    {
        return $this->idModalidadeInfo;
    }

    public function getIdModalidade()
    {
        return $this->idmodalidade;
    }

    public function getIdCliente()
    {
        return $this->idcliente;
    }

    public function getIdFuncionario()
    {
        return $this->idFuncionario;
    }

    // Setters
    public function setIdModalidadeInfo($idModalidadeInfo)
    {
        $this->idModalidadeInfo = $idModalidadeInfo;
    }

    public function setIdModalidade($idmodalidade)
    {
        $this->idmodalidade = $idmodalidade;
    }

    public function setIdCliente($idcliente)
    {
        $this->idcliente = $idcliente;
    }

    public function setIdFuncionario($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;
    }
}
?>
