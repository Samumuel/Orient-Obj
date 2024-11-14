<?php

require_once("Cassino.php");

class Keno extends Cassino
{
    protected Cassino $dinheiro;
    private array $NumSort;

    public function Apostar() {}

    public function Comecar() {}

    /**
     * Get the value of NumSort
     */
    public function getNumSort(): array
    {
        return $this->NumSort;
    }

    /**
     * Set the value of NumSort
     */
    public function setNumSort(array $NumSort): self
    {
        $this->NumSort = $NumSort;

        return $this;
    }
}
