<?php 

require_once("Calculadora.php");

class Divisao extends Calculadora {

    public function calcular()
    {
        $resultado = ($this->numA / $this->numB);
        echo "Resultado: ". $resultado. ".\n";
    }
}