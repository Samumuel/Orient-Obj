<?php

require_once("modelo/Time.php");
require_once("modelo/Jogador.php");
//1-Criar objeto time

$time = new Time();
$time -> setNome("Corinthians");
$time -> setCidade("São Paulo");

//print_r($time);

$jogador = new Jogador();
$jogador -> setNome("Memphis Depay");
$jogador -> setNumero(10);
$jogador -> setTime($time);

$jogador2 = new Jogador();
$jogador2 -> setNome("Sérgio Ramos");
$jogador2 -> setNumero(8);
$jogador2 -> setTime($time);


//echo $jogador -> getNome(), ", mais nova contratação do ", $jogador -> getTime() -> getNome(), ", time da cidade de ", $jogador -> getTime() -> getCidade() , ", jogador será camisa ", $jogador -> getNumero(), "!\n";

$jogadores = array();
array_push($jogadores, $jogador);
array_push($jogadores, $jogador2);
$time -> setJogadores($jogadores);
print_r($time->getJogadores());