<?php 

require_once("Calculadora.php");

class Soma extends Calculadora{

    public function calcular(){
        $resultado = ($this->numA + $this->numB);
        echo "Resultado: ". $resultado. ".\n";
    }

}