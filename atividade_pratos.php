<?php
class pratos{
    
    private $descricao;
    private $quantidade;
    private $valorUni;

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUni
     */
    public function getValorUni()
    {
        return $this->valorUni;
    }

    /**
     * Set the value of valorUni
     */
    public function setValorUni($valorUni): self
    {
        $this->valorUni = $valorUni;

        return $this;
    }
    public function getvalTotal(){
        $valorTotal = ($this->getValorUni() * $this->getQuantidade());
        return $valorTotal;
    }
   
}
$Prato = array();
for($i=0; $i<3; $i++){
    $pratox = new Pratos;
    $pratox->setDescricao(readline("Diga a descrição do prato: "))
        ->setQuantidade(readline("Diga a quantidade de pratos: "))
        ->setValorUni(readline("Diga o valor unitário dos pratos: "));    
    array_push($Prato, $pratox);
}


$valorTotal = 0;
foreach($Prato as $a){
    echo "O prato é ", $a->getDescricao() . ", são " . $a->getQuantidade() . " pratos e cada um custa " . $a->getValorUni() . "R$ .\n";
    $valorTotal = $valorTotal + $a->getvalTotal();
}    
    echo "Valor total é da janta é: ", $valorTotal, "\n";
