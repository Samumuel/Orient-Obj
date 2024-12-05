<?php 

require_once("Produto.php");

class Computador extends Produto {
    private $processador;
    private $memoria;

    public function getDados()
    {
        echo "\n", "Computador", "\n";
        $dados = parent::getDados() . "|" . "Processador: " . $this->processador . "|" . "Memória: " . $this->memoria;
        echo $dados;
    }


    /**
     * Get the value of processador
     */
    public function getProcessador()
    {
        return $this->processador;
    }

    /**
     * Set the value of processador
     */
    public function setProcessador($processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    /**
     * Get the value of memoria
     */
    public function getMemoria()
    {
        return $this->memoria;
    }

    /**
     * Set the value of memoria
     */
    public function setMemoria($memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}