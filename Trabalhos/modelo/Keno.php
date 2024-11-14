<?php

require_once("Jogo.php");
require_once("IAposta.php");

class Keno extends Jogo implements IAposta
{
    private array $numSort;
    private $escolha;

    public function __construct($vA, $e){
        $this->valorAposta = $vA;
        $this->escolha = $e;
    }

    public function Apostar($vA, $e){
        
    }

    public function Comecar() {}

    /**
     * Get the value of NumSort
     */
    public function getNumSort(): array
    {
        return $this->numSort;
    }

    /**
     * Set the value of NumSort
     */
    public function setNumSort(array $numSort): self
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
