<?php

require_once("modelo/Roleta.php");
require_once("modelo/Double.php");
require_once("modelo/Keno.php");

do {
    echo "Bem vindo ao cassino, boa sorte!\n";
    echo "\n-----------MENU-----------\n";
    echo "1- Roleta\n";
    echo "2- Double\n";
    echo "3- Keno\n";
    echo "0- Sair\n";
    $opcao = readline("Escolha a opção: ");

    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            echo 'Bem vindo a Roleta!', "\n";
            echo 'Regras:', "\n";
            echo '1º-Há 37 números, incluindo o 0, você deve escolher um ou mais para apostar.', "\n";
            echo '2º-Você deve escolher um valor para aposta, caso ganhe o valor apostado no número ganhador será multiplicado por 36, caso perca, o valor será zerado.', "\n";

            break;
        case 2:
            echo 'Bem vindo ao Double!', "\n";
            echo 'Regras:', "\n";
            echo '1º-Há 2 cores, branco e preto, você deve escolher uma delas e apostar.', "\n";
            echo '2º-Você deve escolher um valor para aposta, caso ganhe o valor será dobrado, caso perca, o valor será zerado.', "\n";
            $aposta = new Double();
            $aposta->setEscolha(readline("Escolha entra branco e preto: "));
            $aposta->setValorAposta(readline("Diga quanto quer apostar: "));
            $aposta -> Apostar($aposta->getValorAposta(), $aposta->getEscolha(), 1);
            break;

        case 3:
            echo 'Bem vindo ao Keno!', "\n";
            echo 'Regras:', "\n";
            echo '1º-Há 30 números, você deve escolher um ou mais para apostar.', "\n";
            echo "2º- escolha um ou mais para apostar";
            $aposta = new Keno();
            $aposta->setEscolha(readline("escolha um numero entre 1 a 30: "));
            $aposta->setValorAposta(readline("quanto quer apostar?: "));
            $aposta->Apostar($aposta->getValorAposta(), $aposta->getEscolha(),1);
            
            
            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
