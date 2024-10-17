<?php

require_once("Irad.php");
require_once("Irelogio.php");

class Radrelogio implements Irad, Irelogio {

    private $corTela;


    public function ligarRad(){
        echo "Rádio ligado.\n";
    }

    public function desligarRad(){
        echo "Rádio desligado.\n";
    }
    public function mostrarHora(){
        echo date("H:m:s") . "\n";
    }

    /**
     * Get the value of corTela
     */
    public function getCorTela()
    {
        return $this->corTela;
    }

    /**
     * Set the value of corTela
     */
    public function setCorTela($corTela): self
    {
        $this->corTela = $corTela;

        return $this;
    }
}