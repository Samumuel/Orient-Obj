<?php

class Carta{

    private $numero;
    private string $nome;

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

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
}

$qntdcartas = readline("Diga quantas cartas você quer que o baralho tenha(mín. 7): ");
$valor = array("Ás", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove", "dez", "Valete", "Dama", "Rei");
$naipe = array("Espada", "Paus", "Copas", "Ouro");
$todascartas = array();

for($i = 0; $i < $qntdcartas; $i++){
    $carta = new Carta();
    $xAleatorio = rand(0, count($valor) - 1);
    $valorAleatorio = $valor[$xAleatorio];
    $carta -> setNumero($valorAleatorio);
    $yAleatorio = rand(0, count($naipe) - 1);
    $naipeAleatorio = $naipe[$yAleatorio];
    $carta -> setNome($naipeAleatorio);

    array_push($todascartas, $carta);
    print_r($todascartas);
}
