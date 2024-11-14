<?php

require_once("Jogo.php");
require_once("IAposta.php");

class Roleta extends Jogo implements IAposta
{
    private int $numSort;
    private array $escolha;

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
    public function getNumSort(): int
    {
        return $this->numSort;
    }

    /**
     * Set the value of NumSort
     */
    public function setNumSort(int $numSort): self
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
