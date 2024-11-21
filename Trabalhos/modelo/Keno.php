<?php

require_once("Jogo.php");
require_once("IAposta.php");

class Keno extends Jogo implements IAposta
{
    private array $numSort;

    public function Apostar($vA, $eS)
    {
        echo "O valor apostado foi $vA e o número escolhido foi: $eS\n";

        
        $this->numSort = [];
        for ($i = 0; $i < 3; $i++) {
            $this->numSort[] = rand(1, 30);
        }

        echo "Os números sorteados são: " . implode(', ', $this->numSort) . "\n";

        
        if (in_array($eS, $this->numSort)) {
            echo "Parabéns! O número $eS foi sorteado!\n";
            $vA = $vA * 5;
            echo "Agora você tem R$", $vA, ". ", "\n";
            return true;
        } else {
            echo "Que pena! O número $eS não foi sorteado.\n";
            return false;
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
