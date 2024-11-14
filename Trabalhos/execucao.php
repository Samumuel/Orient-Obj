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

            break;
        case 2:

            break;

        case 3:

            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
