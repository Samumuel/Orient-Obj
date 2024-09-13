<?php
class Posto{
    private $litrosGasolina;
    private $abastecimentoGasolina;

    public function __construct(){
        
        $this->litrosGasolina = 0;
        $this->abastecimentoGasolina = array();
    }
    public function abastecer($LitAbast){
        if($LitAbast > $this->litrosGasolina){
            echo "Não há combústivel suficiente para abastecer!";
            return false;
        }else{
            $this->litrosGasolina = ($this->litrosGasolina - $LitAbast);
            echo "Abastecido com sucesso! ", $this->litrosGasolina, " litros restantes.";
            return true;
        }
    }
    public function reporEstoque($qtdRepr){
        $this->litrosGasolina = $this->litrosGasolina + $qtdRepr;
        echo "Pronto, agora há ", $this->litrosGasolina, " litros no estoque!";
    }
    
    /**
     * Get the value of abastecimentoGasolina
     */
    public function getAbastecimentoGasolina()
    {
        return $this->abastecimentoGasolina;
    }

    /**
     * Set the value of abastecimentoGasolina
     */
    public function setAbastecimentoGasolina($abastecimentoGasolina): self
    {
        $this->abastecimentoGasolina = $abastecimentoGasolina;

        return $this;
    }
}

$posto1 = new Posto();
$historico = array();

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Abastecer\n";
    echo "2- Repor estoque\n";
    echo "3- Listar abastecimento\n";
    echo "0- Sair\n";
    $opcao = readline("Escolha a opção: ");
    
    switch($opcao) {
        case 0:
            echo "Volte sempre!\n";
            break;
        
        case 1:
            $LitAbast = readline("Diga a quantidade que quer abastecer: ");
            $posto1->abastecer($LitAbast);
            array_push($historico, $LitAbast);
            break;

        case 2:
            $qtdRepr = readline("Diga quanto você quer repor: ");
            $posto1->reporEstoque($qtdRepr);
            break;
        
        case 3:
            echo "Histórico de abastecimentos: \n";
            $x=1;
            foreach($historico as $h){
                echo $x ,"º Abastecimento" , ": " , $h , "L \n";
                $x++;
            }  
            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }

} while($opcao != 0);
