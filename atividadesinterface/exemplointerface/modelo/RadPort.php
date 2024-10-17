<?php

require_once("Irad.php");

class RadPort implements Irad {
    private $cor;
    private $marca;


    public function ligarRad(){
        echo "Rádio ligado.\n";
    }

    public function desligarRad(){
        echo "Rádio desligado.\n";
    }

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }
}