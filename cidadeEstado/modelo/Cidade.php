<?php
require_once("Estado.php");

class Cidade{
    
    private string $nome;
    private int $qtdhab;
    private $altitude;
    private Estado $estado;


    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of qtdhab
     */
    public function getQtdhab(): int
    {
        return $this->qtdhab;
    }

    /**
     * Set the value of qtdhab
     */
    public function setQtdhab(int $qtdhab): self
    {
        $this->qtdhab = $qtdhab;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude($altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado(): Estado
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado(Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}

