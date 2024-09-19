<?php
class produto{
    
    private $descricao;
    private $unidadeMedida;
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
     * Get the value of unidadeMedida
     */
    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    /**
     * Set the value of unidadeMedida
     */
    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

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
    public function getValorTotal(){
        $valorTotal = $this->valorUni * $this->quantidade;
        return $valorTotal;
    }
    public function escrever(){
        echo "Produto: ". $this->getDescricao(). " (".  $this->getUnidadeMedida(). ") | ". $this->getValorTotal(). "\n";
    }
}

    $produto1 = new produto();
    $produto1 -> setDescricao(readline("\n". 'Diga a descrição do produto 1: '));
    $produto1 -> setUnidadeMedida(readline("\n". 'Diga a unidade de medida 1: '));
    $produto1 -> setQuantidade(readline("\n". 'Diga a quantidade 1: '));
    $produto1 -> setValorUni(readline("\n". 'Diga o Valor unitário do produto 1: '));

    $produto2 = new produto();
    $produto2 -> setDescricao(readline("\n". 'Diga a descrição do produto 2: '));
    $produto2 -> setUnidadeMedida(readline("\n". 'Diga a unidade de medida 2: '));
    $produto2 -> setQuantidade(readline("\n". 'Diga a quantidade 2: '));
    $produto2 -> setValorUni(readline("\n". 'Diga o Valor unitário do produto 2: '));

    $produto3 = new produto();
    $produto3 -> setDescricao(readline("\n". 'Diga a descrição do produto 3: '));
    $produto3 -> setUnidadeMedida(readline("\n". 'Diga a unidade de medida 3: '));
    $produto3 -> setQuantidade(readline("\n". 'Diga a quantidade 3: '));
    $produto3 -> setValorUni(readline("\n". 'Diga o Valor unitário do produto 3: '));

    $produto1 -> escrever();
    $produto2 -> escrever();
    $produto3 -> escrever();
    
    if($produto1->getValorTotal() > $produto2->getValorTotal()){
        if($produto1->getValorTotal() > $produto3->getValorTotal()){
            echo 'Venda com o maior valor total do produto: '. $produto1->getDescricao(). " (". $produto1->getUnidadeMedida(). ")\n";
        }else{
            echo 'Venda com o maior valor total do produto: '. $produto3->getDescricao(). " (". $produto3->getUnidadeMedida(). ")\n";
        }
    }else{
        if($produto2->getValorTotal() > $produto3->getValorTotal()){
            echo 'Venda com o maior valor total do produto: '. $produto2->getDescricao(). " (". $produto2->getUnidadeMedida(). ")\n";
       }else{
        echo 'Venda com o maior valor total do produto: '. $produto3->getDescricao(). " (". $produto3->getUnidadeMedida(). ")\n";
       }
    }
