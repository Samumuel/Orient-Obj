<?php

require_once("Cassino.php");

class Double extends Cassino
{
    protected Cassino $dinheiro;
    private string $Cor;

    public function Apostar() {}

    public function Comecar() {}

    /**
     * Get the value of Cor
     */
    public function getCor(): string
    {
        return $this->Cor;
    }

    /**
     * Set the value of Cor
     */
    public function setCor(string $Cor): self
    {
        $this->Cor = $Cor;

        return $this;
    }
}
