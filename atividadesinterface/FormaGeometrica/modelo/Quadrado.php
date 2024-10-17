<?php

require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica{
    private $lado;
    
    public function getArea(){
        $areaquadrado = $this->getLado() * $this->getLado();
        echo "Area: ", $areaquadrado;
    }
    public function getDesenho(){
        $desenho ="\n                      ┌──────────────────────────────┐
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      │                              │
                      └──────────────────────────────┘\n";
        echo $desenho;
    }
    
    /**
     * Get the value of lado
     */
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     */
    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}