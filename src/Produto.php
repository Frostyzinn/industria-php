<?php

class Produto
{
    private $codigo;
    private $nome;
    private $preco;
    private $estoque; 

    public function __construct($codigo, $nome, $preco, $estoque)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }
}