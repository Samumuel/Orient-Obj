<?php
    require_once("modelo/Curandeiro.php");
    require_once("modelo/Combatente.php");
    require_once("modelo/Mago.php");
    require_once("modelo/Poder.php");

    $p1 = new Poder("Recuperar energia", 0);
    $p2 = new Poder("Recuperar energia Super", 20);
    $p3 = new Poder("Golpe normal", 0);
    $p4 = new Poder("Golpe especial", 15);

    $curandeiro1 = new Curandeiro();
    $curandeiro1->setNome(readline("Escolha o nome do seu curandeiro: "))->setPoder($p1);
    $curandeiro1->setForcaDeCura(readline("Digite a força de cura do seu curandeiro: "));

    $curandeiro2 = new Curandeiro();
    $curandeiro2->setNome(readline("Escolha o nome do seu segundo curandeiro: "))->setPoder($p2);
    $curandeiro2->setForcaDeCura(readline("Digite a força de cura do seu curandeiro: "));
    
    $combatente1 = new Combatente();
    $combatente1->setNome(readline("Escolha o nome do seu combatente: "))->setPoder($p3);
    $combatente1->setForcaDeAtaque(readline("Digite a força de ataque do seu combatente: "));

    $combatente2 = new Combatente();
    $combatente2->setNome(readline("Escolha o nome do seu combatente: "))->setPoder($p4);
    $combatente2->setForcaDeAtaque(readline("Digite a força de ataque do seu segundo combatente: "));
    
    echo "\n\n";
    echo $combatente->lancarPoder();
    echo "\n\n";
    echo $curandeiro->lancarPoder();
    echo "\n\n";