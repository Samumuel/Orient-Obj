<?php

require_once("Jogo.php");
require_once("IAposta.php");

class Double extends Jogo implements IAposta
{
    private string $numSort;
    private $escolha;

    public function __construct($vA, $nS){
        $this->valorAposta = $vA;
        $this->numSort = $nS;
    }

    public function Apostar($vA, $nS){
        
    }

    public function Comecar() {}


    /**
     * Get the value of numSort
     */
    public function getNumSort(): string
    {
        return $this->numSort;
    }

    /**
     * Set the value of numSort
     */
    public function setNumSort(string $numSort): self
    {
        $this->numSort = $numSort;

        return $this;
    }

    /**
     * Get the value of escolha
     */
    public function getEscolha()
    {
        return $this->escolha;
    }

    /**
     * Set the value of escolha
     */
    public function setEscolha($escolha): self
    {
        $this->escolha = $escolha;

        return $this;
    }
}
