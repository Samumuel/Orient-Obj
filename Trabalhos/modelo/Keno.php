<?php

require_once("Jogo.php");
require_once("IAposta.php");

class Keno extends Jogo implements IAposta
{
    private array $numSort;
    private $escolha;

    public function Apostar($vA, $eS, $x){
        $i = 0;
        for($i == 0; $i <= $x; $i++){
            $numero = rand(1, 35);
            echo "Número sorteado: $numero";
        }
    }

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
