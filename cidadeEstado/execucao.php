<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$estado1 = new Estado();
$estado1 -> setNome("Párana");
$estado1 -> setCigla("PR");

$estado2 = new Estado();
$estado2 -> setNome("Santa Catarina");
$estado2 -> setCigla("SC");


$cidade1 = new Cidade();
$cidade1 -> setNome("Florianópolis");
$cidade1 -> setQtdhab(200000);
$cidade1 -> setAltitude(100);
$cidade1 -> setEstado($estado2);

$cidade2 = new Cidade();
$cidade2 -> setNome("Blumenau");
$cidade2 -> setQtdhab(50000);
$cidade2 -> setAltitude(150);
$cidade2 -> setEstado($estado2);

$cidade3 = new Cidade();
$cidade3 -> setNome("Foz do Iguaçu");
$cidade3 -> setQtdhab(210000);
$cidade3 -> setAltitude(90);
$cidade3 -> setEstado($estado1);

$cidade4 = new Cidade();
$cidade4 -> setNome("Cascavel");
$cidade4 -> setQtdhab(300000);
$cidade4 -> setAltitude(200);
$cidade4 -> setEstado($estado1);

$cidades = array($cidade1, $cidade2, $cidade3, $cidade4);

foreach($cidades as $c){
    printf("A cidade de %s, localizada no estado de %s-%s, possui %d habitantes e uma altitude de %d metros", 
    $c->getNome(), $c->getEstado()->getNome(), $c->getEstado()->getCigla(), $c->getQtdhab(), $c->getAltitude());
    echo "\n";  
}