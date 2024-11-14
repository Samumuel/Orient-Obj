<?php


class Cassino
{
    protected $dinheiro;

    public function depositar() {}

    public function sacar() {}

    public function sairJogo() {}

    /**
     * Get the value of dinheiro
     */
    public function getDinheiro()
    {
        return $this->dinheiro;
    }

    /**
     * Set the value of dinheiro
     */
    public function setDinheiro($dinheiro): self
    {
        $this->dinheiro = $dinheiro;

        return $this;
    }
}
