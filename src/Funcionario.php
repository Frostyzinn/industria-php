<?php

class Funcionario
{
    private $id;
    private $nome;
    private $cargo;
    private $salario;

    public function __construct($id, $nome, $cargo, $salario)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
}