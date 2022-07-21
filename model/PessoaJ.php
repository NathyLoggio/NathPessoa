<?php
require_once 'Pessoa.php';
class PessoaJ extends Pessoa{
    private $cnpj;
    private $inscEstadual;
    private $nomeFantasia;
    
    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getInscEstadual()
    {
        return $this->inscEstadual;
    }

    public function setInscEstadual($inscEstadual)
    {
        $this->inscEstadual = $inscEstadual;

        return $this;
    }

    function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }
   
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    public function __toString()
    {
        $pes = "Pessoa Física: <br/>"
                . " - Nome: " . $this->getNome() . "<br/>"
                . " - Telefone: " . $this->getTelefone() . "<br/>"
                . " - Email: " . $this->getEmail() . "<br/>"
                . " - Endereco: " . $this->getEndereco() . "<br/>"
                . " - CNPJ: " . $this->getCnpj() . "<br/>"
                . " - INS. Estadual: " . $this->getInscEstadual() . "<br/>"
                . " - Nome Fantasia: " . $this->getNomeFantasia() . "<br/>";
        return $pes;
    }
}