<?php

require_once("Jogo.php");
require_once("IAposta.php");

class Double extends Jogo implements IAposta
{
    private array $cores;

    public function Apostar($vA, $eS){

        echo "O valor apostado foi ", $vA, " na cor ", $eS, "\n";

        $cores = ['branco', 'preto'];
        $sortear = $cores[array_rand($cores)];
        echo "A cor sorteada: $sortear", "\n";

        if($sortear == $eS){
            echo "Parabéns! Você acertou!", "\n";
            $vA = $vA * 2;
            echo "Agora você tem R$", $vA, ". ", "\n";
        } else {
            echo "Infelizmente você perdeu.", "\n";
        }

        $cores = ['branco', 'preto'];
        $sortear = $cores[array_rand($cores)];
        echo "A cor sorteada: $sortear", "\n";
    }

    /**
     * Get the value of cores
     */
    public function getCores(): array
    {
        return $this->cores;
    }

    /**
     * Set the value of cores
     */
    public function setCores(array $cores): self
    {
        $this->cores = $cores;

        return $this;
    }
}
