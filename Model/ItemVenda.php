<?php

class ItemVenda
{

    private $iditemVenda;
    private $vendaid;
    private $produtoid;
    private $quantidade;
    private $subtotal;

    public function __construct($iditemVenda = null, $vendaid = null, $produtoid = null, $quantidade, $subtotal)
    {
        $this->iditemVenda = $iditemVenda;
        $this->vendaid = $vendaid;
        $this->produtoid = $produtoid;
        $this->quantidade = $quantidade;
        $this->subtotal = $subtotal;
    }

    /**
     * @return mixed
     */
    public function getiditemVenda()
    {
        return $this->iditemVenda;
    }

    /**
     * @param mixed $iditemVenda 
     * @return self
     */
    public function setiditemVenda($iditemVenda): self
    {
        $this->iditemVenda = $iditemVenda;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getvendaid()
    {
        return $this->vendaid;
    }

    /**
     * @param mixed $vendaid 
     * @return self
     */
    public function setvendaid($vendaid): self
    {
        $this->vendaid = $vendaid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getprodutoid()
    {
        return $this->produtoid;
    }

    /**
     * @param mixed $produtoid 
     * @return self
     */
    public function setprodutoid($produtoid): self
    {
        $this->produtoid = $produtoid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getquantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade 
     * @return self
     */
    public function setquantidade($quantidade): self
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param mixed $subtotal 
     * @return self
     */
    public function setSubtotal($subtotal): self
    {
        $this->subtotal = $subtotal;
        return $this;
    }
}
?>