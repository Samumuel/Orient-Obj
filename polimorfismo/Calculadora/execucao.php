<?php 

require_once("modelo/Divisao.php");
require_once("modelo/Multiplicacao.php");
require_once("modelo/Resto.php");
require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");


do {
    echo "\n-----------MENU-----------\n";
    echo "1- Soma\n";
    echo "2- Subtração\n";
    echo "3- Multiplicação\n";
    echo "4- Divisão\n";
    echo "5- Resto\n";
    $numA = readline("Diga o valor do número A: ");
    $numB = readline("\nDiga o valor do número B: ");
    
    $opcao = readline("Escolha a opção: ");
    switch($opcao) {
        case 1: 
            $soma = new Soma();
            $soma->setNumA($numA);
            $soma->setNumB($numB);
            $soma->calcular();
            break;
        case 2:
            $subtracao = new Subtracao();
            $subtracao->setNumA($numA);
            $subtracao->setNumB($numB);
            $subtracao->calcular();
            break;
        
        case 3:
            $multiplicacao = new Multiplicacao();
            $multiplicacao->setNumA($numA);
            $multiplicacao->setNumB($numB);
            $multiplicacao->calcular();
            break;
            
        case 4:
            $divisao = new Divisao();
            $divisao->setNumA($numA);
            $divisao->setNumB($numB);
            $divisao->calcular();
            break;
        case 5:
            $resto = new Resto();
            $resto->setNumA($numA);
            $resto->setNumB($numB);
            $resto->calcular();
            break;
        default:
            echo "Opção INVÁLIDA!\n";
}
    
} while($numA != 0 and $numB != 0);
    

