<?php
class FichaDeTreino
{
    private $TipoDeTreino;
    private $IdFicha;
    private $IdFuncionario;
    private $IdCliente;
    private $idconjunto_equipamento;
    private $IdModalidade;

    public function __construct($TipoDeTreino, $IdFuncionario, $IdCliente, $idconjunto_equipamento, $IdModalidade, $IdFicha = null)
    {
        $this->TipoDeTreino = $TipoDeTreino;
        $this->IdFuncionario = $IdFuncionario;
        $this->IdCliente = $IdCliente;
        $this->idconjunto_equipamento = $idconjunto_equipamento;
        $this->IdModalidade = $IdModalidade;
        $this->IdFicha = $IdFicha;
    }

    // Getters
    public function getTipoDeTreino()
    {
        return $this->TipoDeTreino;
    }

    public function getIdFicha()
    {
        return $this->IdFicha;
    }

    public function getIdFuncionario()
    {
        return $this->IdFuncionario;
    }

    public function getIdCliente()
    {
        return $this->IdCliente;
    }

    public function getIdConjuntoEquipamento()
    {
        return $this->idconjunto_equipamento;
    }

    public function getIdModalidade()
    {
        return $this->IdModalidade;
    }

    // Setters
    public function setTipoDeTreino($TipoDeTreino)
    {
        $this->TipoDeTreino = $TipoDeTreino;
    }

    public function setIdFicha($IdFicha)
    {
        $this->IdFicha = $IdFicha;
    }

    public function setIdFuncionario($IdFuncionario)
    {
        $this->IdFuncionario = $IdFuncionario;
    }

    public function setIdCliente($IdCliente)
    {
        $this->IdCliente = $IdCliente;
    }

    public function setIdConjuntoEquipamento($idconjunto_equipamento)
    {
        $this->idconjunto_equipamento = $idconjunto_equipamento;
    }

    public function setIdModalidade($IdModalidade)
    {
        $this->IdModalidade = $IdModalidade;
    }
}
?>
