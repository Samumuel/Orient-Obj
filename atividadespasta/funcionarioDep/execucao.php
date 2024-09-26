<?php

require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

$funcionarios = array();

for($i = 0; $i<2; $i++){
    $funcionario = new Funcionario();
    echo "Novo funcionário.\n";
    $funcionario->setNome(readline("Diga o nome do funcionário: "));
    $funcionario->setCargo(readline("Diga o cargo do funcionário: "));
    $funcionario->setSalario(readline("Diga o sálario do funcionário: "));
    $funcionario->setDep($dep = new Departamento());
    $funcionario->setDep($dep->setNome(readline("Diga o nome do departamento: ")));
    $funcionario->setDep($dep->setNumeroSala(readline("Diga o número da sala: ")));
    array_push($funcionarios, $funcionario);
}
foreach($funcionarios as $fa){
    echo "\nO funcionário ", $fa->getNome(), " trabalha como ", $fa->getCargo(), 
    ", possui o salário de ", $fa->getSalario(), ", trabalha na sala ", $fa->getDep()->getNumeroSala(),
    " e é do departamento ", $fa->getDep()->getNome();
}