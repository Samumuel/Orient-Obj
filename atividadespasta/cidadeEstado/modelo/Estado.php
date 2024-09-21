<?php

class Estado{

    private string $nome;
    private string $cigla;
    private array $cidades;

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
     * Get the value of cigla
     */
    public function getCigla(): string
    {
        return $this->cigla;
    }

    /**
     * Set the value of cigla
     */
    public function setCigla(string $cigla): self
    {
        $this->cigla = $cigla;

        return $this;
    }
}