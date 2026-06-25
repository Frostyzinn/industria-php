<?php

class OrdemProducao
{
    private $numeroOrdem;
    private $produto;
    private $quantidade;

    public function __construct($numeroOrdem, $produto, $quantidade)
    {
        $this->numeroOrdem = $numeroOrdem;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function getNumeroOrdem()
    {
        return $this->numeroOrdem;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setNumeroOrdem($numeroOrdem)
    {
        $this->numeroOrdem = $numeroOrdem;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
}