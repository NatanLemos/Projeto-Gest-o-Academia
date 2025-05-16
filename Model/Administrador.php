<?php
class Administrador
{
    private $usuario;
    private $senha;
    private $idfuncionario;

    public function __construct($usuario, $senha, $idfuncionario)
    {
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->idfuncionario = $idfuncionario;
    }

    // Getters
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getIdFuncionario()
    {
        return $this->idfuncionario;
    }

    // Setters
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setIdFuncionario($idfuncionario)
    {
        $this->idfuncionario = $idfuncionario;
    }
}
?>