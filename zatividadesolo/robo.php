<?php

class robo{
    
    private $tipo;
    private $nome;
    private $quantSens;

    public function toString(){
        return "Aqui temos um objeto do tipo Robo.";
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of quantSens
     */
    public function getQuantSens()
    {
        return $this->quantSens;
    }

    /**
     * Set the value of quantSens
     */
    public function setQuantSens($quantSens): self
    {
        $this->quantSens = $quantSens;

        return $this;
    }
}
$robo1 = new robo ();
$robo1->setNome("Máquina")
     ->setTipo ("Arduino")
     ->getQuantSens(4);

$robo2 = new robo ();
$robo2->setNome("Smegma")
    ->setTipo ("Bom")
    ->getQuantSens(40);
    
$robo3 = new robo ();
$robo3->setNome("Edging")
    ->setTipo ("Mpox")
    ->getQuantSens(400);

$robos = array($robo1, $robo2);
echo $robos[1]->getNome() . "\n";

array_push($robos, $robo3);
echo $robos[2]->getTipo() . "\n";

