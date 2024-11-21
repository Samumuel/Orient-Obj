<?php


class Jogo
{
    protected $valorAposta;
    protected $escolha;

    /**
     * Get the value of valorAposta
     */
    public function getValorAposta()
    {
        return $this->valorAposta;
    }

    /**
     * Set the value of valorAposta
     */
    public function setValorAposta($valorAposta): self
    {
        $this->valorAposta = $valorAposta;

        return $this;
    }

    /**
     * Get the value of escolha
     */
    public function getEscolha()
    {
        return $this->escolha;
    }

    /**
     * Set the value of escolha
     */
    public function setEscolha($escolha): self
    {
        $this->escolha = $escolha;

        return $this;
    }
}
