<?php

require_once("modelo/RadPort.php");
require_once("modelo/Radrelogio.php");

$tipo ="RR";
$radio = null;

if($tipo == "RP"){
    $radio = new RadPort();
    $radio ->setCor("Preto");
    $radio->setMarca("Livstar");
} else if($tipo == "RR"){
    $radio = new Radrelogio();
    $radio->setCorTela("Vermelho");
}

$radio->ligarRad();
$radio->desligarRad();

if($radio instanceof Irelogio)
    $radio->mostrarHora();
