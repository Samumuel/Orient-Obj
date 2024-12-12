<?php 

require_once("Calculadora.php");

class Resto extends Calculadora {

    public function calcular()
    {
        $resultado = ($this->numA % $this->numB);
        echo "Resultado: ". $resultado. ".\n";
    }
}