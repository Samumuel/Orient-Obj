<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$prato1 = new Prato();
$prato1 -> setNumero(1);
$prato1 -> setNome("Camarão a Milanesa");
$prato1 -> setValor(110.00);

$prato2 = new Prato();
$prato2 -> setNumero(2);
$prato2 -> setNome("Pizza Margherita");
$prato2 -> setValor(80.00);

$prato3 = new Prato();
$prato3 -> setNumero(3);
$prato3 -> setNome("Macarrão à Carbonara");
$prato3 -> setValor(60.00);

$prato4 = new Prato();
$prato4 -> setNumero(4);
$prato4 -> setNome("Bife à Parmegiana");
$prato4 -> setValor(75.00);

$prato5 = new Prato();
$prato5 -> setNumero(5);
$prato5 -> setNome("Risoto ao Funghi");
$prato5 -> setValor(70.00);

$pratos = array($prato1, $prato2, $prato3, $prato4, $prato5);
$pedidos = array();
$nescolha = 0;
$x = 1;

function setaprato($nescolha, $pratos, $pratoescolhido){

}

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Cadastrar\n";
    echo "2- Cancelar\n";
    echo "3- Listar\n";
    echo "4- Total de Vendas\n";
    echo "0- Sair\n";
    $opcao = readline("Escolha a opção: ");
    
    switch($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        
        case 1: 
            $pedido = new Pedido();
            $pedido -> setNomeCliente(readline("\nDiga o nome do cliente: "));
            $pedido -> setNomeGarcom(readline("\nDiga o nome do garçom: "));  
            //1- Listar os pratos disponíveis -
            echo "\nAbaixo está a lista de pratos, escolha usando o número: ";
            foreach($pratos as $pr){
                echo "\n", $pr->getNumero(), "º - ", $pr->getNome(), " - R$", $pr->getValor(); 
            }
            //2- Ler o número do prato
            $nescolha = readline("\nDiga o prato que deseja (1-5):" );

            //3- Verificar se o número escolhido 
            if($nescolha <= 5 && $nescolha >= 1){
                foreach($pratos as $pr){
                    if($nescolha == $pr->getNumero()){
                        $pedido -> setPrato($pr);
                    }
                }
            }else{
                echo "Número inserido não existente.";
            }
            array_push($pedidos, $pedido);
            print_r($pedidos);
            break;

        case 2:
            echo "\n Abaixo será a lista de pedidos: \n";
            foreach($pedidos as $pe){
                echo $x, "º Pedido ", $pe->getPrato()->getNome(), " - R$", $pe->getPrato()->getValor(), "\n"; 
                $x = $x + 1;
            }
            $nexclui = readline("\nDiga o número que deseja remover: ");
            $nexclui --;
            $pedidos = array_splice($pedidos, $nexclui, 1);
            print_r($pedidos);
            break;
        
        case 3:
            foreach($pedidos as $pe){
                echo "O cliente ", $pe->getNomeCliente(), " foi atendido pelo garçom ",  
                $pe->getNomeGarcom(), " pediu um prato de ", $pe->getPrato()->getNome(), " no valor de ",
                $pe->getPrato()->getValor();
            }
            break;
            
        case 4:
            $valortotal = 0;
            foreach($pedidos as $pe){
                $valortotal += $pe->getPrato()->getValor();
            }
            break;
        
        default:
            echo "Opção INVÁLIDA!\n";
    }

} while($opcao != 0);