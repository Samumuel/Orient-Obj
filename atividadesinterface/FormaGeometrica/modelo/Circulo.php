<?php

require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica{
    private $raio;
    
    public function getArea(){
        $areacirculo = ($this->raio * $this->raio) * 3.14;
        echo "Area: ", $areacirculo;
    }
    public function getDesenho(){
        $desenho = "\n          xxxxxxxxxxxx x  xxxxx         
                xxxx                    xxxx     
            xx                           xx    
            xx                             xx   
        xx                                 x  
        xxx                                 x  
        xxx                                   x 
        xxx                                   x 
        xx                                     xx
        x                                       x
        x                                       x
        x                                      x 
        x                                      x 
        xx                                    xx 
        x                                    x  
        xx                                 xx  
        xx                               xx   
        x                             xxx    
            x                           xxx      
            xxx                      xxx         
            xxx              xxxxxx           
                xxxxxxxxxxxxxxxx                \n";
        echo $desenho;
    }

    /**
     * Get the value of raio
     */
    public function getRaio()
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}