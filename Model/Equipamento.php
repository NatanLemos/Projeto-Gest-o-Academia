<?php
class Equipamento
{
    private $IdEquipamento;
    private $Quantidade;
    private $Nome;
    private $Peso;

    public function __construct($Quantidade, $Nome, $Peso, $IdEquipamento = null)
    {
        $this->Quantidade = $Quantidade;
        $this->Nome = $Nome;
        $this->Peso = $Peso;
        $this->IdEquipamento = $IdEquipamento;
    }

    // Getters
    public function getIdEquipamento()
    {
        return $this->IdEquipamento;
    }

    public function getQuantidade()
    {
        return $this->Quantidade;
    }

    public function getNome()
    {
        return $this->Nome;
    }

    public function getPeso()
    {
        return $this->Peso;
    }

    // Setters
    public function setIdEquipamento($IdEquipamento)
    {
        $this->IdEquipamento = $IdEquipamento;
    }

    public function setQuantidade($Quantidade)
    {
        $this->Quantidade = $Quantidade;
    }

    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }

    public function setPeso($Peso)
    {
        $this->Peso = $Peso;
    }
}
?>