<?php

require_once("Cassino.php");

class Roleta extends Cassino
{
    protected Cassino $dinheiro;
    private int $NumSort;

    public function Apostar() {}

    public function Comecar() {}

    /**
     * Get the value of NumSort
     */
    public function getNumSort(): int
    {
        return $this->NumSort;
    }

    /**
     * Set the value of NumSort
     */
    public function setNumSort(int $NumSort): self
    {
        $this->NumSort = $NumSort;

        return $this;
    }
}
