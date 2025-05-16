<?php
class Modalidade
{
    private $IdModalidade;
    private $NomeDaModalidade;
    private $Tipo;
    private $QTDdias;
    private $NmrAlunos;

    public function __construct($NomeDaModalidade, $Tipo, $QTDdias, $NmrAlunos, $IdModalidade = null)
    {
        $this->NomeDaModalidade = $NomeDaModalidade;
        $this->Tipo = $Tipo;
        $this->QTDdias = $QTDdias;
        $this->NmrAlunos = $NmrAlunos;
        $this->IdModalidade = $IdModalidade;
    }

    // Getters
    public function getIdModalidade()
    {
        return $this->IdModalidade;
    }

    public function getNomeDaModalidade()
    {
        return $this->NomeDaModalidade;
    }

    public function getTipo()
    {
        return $this->Tipo;
    }

    public function getQTDdias()
    {
        return $this->QTDdias;
    }

    public function getNmrAlunos()
    {
        return $this->NmrAlunos;
    }

    // Setters
    public function setIdModalidade($IdModalidade)
    {
        $this->IdModalidade = $IdModalidade;
    }

    public function setNomeDaModalidade($NomeDaModalidade)
    {
        $this->NomeDaModalidade = $NomeDaModalidade;
    }

    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    public function setQTDdias($QTDdias)
    {
        $this->QTDdias = $QTDdias;
    }

    public function setNmrAlunos($NmrAlunos)
    {
        $this->NmrAlunos = $NmrAlunos;
    }
}
?>