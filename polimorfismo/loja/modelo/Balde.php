<?php 

require_once("Produto.php");

class Balde extends Produto {

    private $capacidade;

    public function getDados()
    {
        echo "\n", "Balde", "\n";
        $dados = parent::getDados() . "|" . "Capacidade: " . $this->capacidade;
        echo $dados, "\n";
    }
    
    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}