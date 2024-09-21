<?php

require_once("modelo/Atleta.php");
require_once("modelo/País.php");

$atleta1 = new Atleta();
$atleta1 -> setNome("Neymar Jr.");
$atleta1 -> setIdade("32");
$atleta1 -> setEsporte("Futebol");
$atleta1 -> setPais($país1);

$atleta2 = new Atleta();
$atleta2 -> setNome("Samuel Ferreira Younis");
$atleta2 -> setIdade("16");
$atleta2 -> setEsporte("Golf");
$atleta2 -> setPais($país1);

$atleta3 = new Atleta();
$atleta3 -> setNome("Ichigo Kurosaki");
$atleta3 -> setIdade("16");
$atleta3 -> setEsporte("Natação");
$atleta3 -> setPais($país2);

$atleta4 = new Atleta();
$atleta4 -> setNome("Naruto sushi");
$atleta4 -> setIdade("29");
$atleta4 -> setEsporte("Basquete");
$atleta4 -> setPais($país2);

$país1 = new País();
$país1 -> setNome("Brasil");
$país1 -> setContinente("América");

$país2 = new País();
$país2 -> setNome("Japão");
$país2 -> setContinente("Ásia");



$todosAtletas = array($atleta1, $atleta2, $atleta3, $atleta4);

foreach($todosAtletas as $tA){
    echo $tA->getNome(), " é atleta do ", $tA->getPais()->getNome(), " continente ", $tA->getPais()->getContinente(), ", possui ", $tA->getIdade(), " anos e atua no esporte ", $tA->getEsporte(), "\n";
}