<?php
class Conjunto_Equipamento
{
    private $idconjunto_equipamento;
    private $idEquipamento;
    private $series;
    private $repeticoes;

    public function __construct($idEquipamento, $series, $repeticoes, $idconjunto_equipamento = null)
    {
        $this->idconjunto_equipamento = $idconjunto_equipamento;
        $this->idEquipamento = $idEquipamento;
        $this->series = $series;
        $this->repeticoes = $repeticoes;
    }

    // Getters
    public function getIdConjunto_Equipamento()
    {
        return $this->idconjunto_equipamento;
    }

    public function getIdEquipamento()
    {
        return $this->idEquipamento;
    }

    public function getSeries()
    {
        return $this->series;
    }

    public function getRepeticoes()
    {
        return $this->repeticoes;
    }

    // Setters
    public function setIdConjunto_Equipamento($idconjunto_equipamento)
    {
        $this->idconjunto_equipamento = $idconjunto_equipamento;
    }

    public function setIdEquipamento($idEquipamento)
    {
        $this->idEquipamento = $idEquipamento;
    }

    public function setSeries($series)
    {
        $this->series = $series;
    }

    public function setRepeticoes($repeticoes)
    {
        $this->repeticoes = $repeticoes;
    }
}
?>