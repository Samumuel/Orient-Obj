<?php 

require_once("modelo/Retangulo.php");
require_once("modelo/Quadrado.php");
require_once("modelo/Circulo.php");

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Quadrado\n";
    echo "2- Circulo\n";
    echo "3- Retângulo\n";
    echo "0- Sair\n";
    $opcao = readline("Escolha a opção: ");
    
    switch($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        
        case 1: 
            $quadrado = new Quadrado();
            $quadrado -> setLado(readline("\nDiga o tamanho do lado: "));
            $quadrado -> getArea();
            $quadrado -> getDesenho();
            break;
        case 2:
            $circulo = new Circulo();
            $circulo -> setRaio(readline("Diga o raio do circulo: "));
            $circulo -> getArea();
            $circulo -> getDesenho();
            break;
        
        case 3:
            $retangulo = new Retangulo();
            $retangulo -> setAltura(readline("Diga a altura do retângulo: "));
            $retangulo -> setBase(readline("Diga a base do retângulo: "));
            $retangulo -> getArea();
            $retangulo -> getDesenho();
            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }

} while($opcao != 0);