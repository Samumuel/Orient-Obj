<?php


class Jogo
{
    protected $valorAposta;

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
}
