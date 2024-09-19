<?php

class Receita {
    
    private $descricao;
    private $valor;
    

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
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa {

    private $descricaox;
    private $valorx;


    /**
     * Get the value of descricao
     */
    public function getDescricaox()
    {
        return $this->descricaox;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricaox($descricao): self
    {
        $this->descricaox = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValorx()
    {
        return $this->valorx;
    }

    /**
     * Set the value of valor
     */
    public function setValorx($valor): self
    {
        $this->valorx = $valor;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricaox;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricaox = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valorx;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valorx = $valor;

        return $this;
    }
}

$despesas = array();
$receitas = array();

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Adicionar receita\n";
    echo "2- Adicionar despesa\n";
    echo "3- Listar receitas\n";
    echo "4- Listar despesas\n";
    echo "5- Sumarizar\n";
    echo "0- Sair\n";
    $opcao = readline("Escolha a opção: ");
    
    switch($opcao) {
        case 0:
            echo "Volte sempre!\n";
            break;
        
        case 1:
            $receita = new Receita ();
            $receita -> setDescricao(readline("Diga qual é a sua receita: "));
            $receita -> setValor(readline("Diga o valor desta receita: "));
            array_push($receitas, $receita);
            break;

        case 2:
            $despesa = new Despesa ();
            $despesa -> setDescricaox(readline("Diga qual é a despesa: "));
            $despesa -> setValorx(readline("Diga o valor desta despesa: "));
            array_push($despesas, $despesa);
            break;
        
        case 3:
            echo "\nLista de receitas: \n";
            $x=1;
            foreach($receitas as $r){
                echo $x, "º Receita: ", $r->getDescricao(), "\n";
                echo "Valor da ", $x, "º receita: ", $r->getValor(), "R$ \n";
                $x++;
            }
            break;
        
        case 4:
            echo "\nLista de despesas: \n";
            $x=1;
            foreach($despesas as $d){
                echo $x, "º Despesa: ", $d->getDescricaox(), "\n";
                echo "Valor da ", $x, "º depesa: ", $d->getValorx(), "R$. \n";
                $x++;
            }
            break;

        case 5:
            $valorReceitas = 0;
            $valorDespesas = 0;
            $valorSaldo = 0;

            foreach($receitas as $r){
                $valorReceitas += $r->getValor();
            }    
            foreach($despesas as $d){
                $valorDespesas += $d->getValorx();
            }

            $valorSaldo = $valorReceitas - $valorDespesas;

            if($valorReceitas > $valorDespesas){
                echo "Saldo: ", $valorSaldo, 
                "R$.\nTotal de receitas: ", $valorReceitas, 
                "R$ \nTotal de despesas: ", $valorDespesas, "R$ \n";
            }else{
                echo"\nDinheiro insuficiente T-T";
            }

            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }

} while($opcao != 0);

