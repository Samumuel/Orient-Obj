<?php 

require_once("Produto.php");

class Livro extends Produto {
    private $autor;

    public function getDados()
    {
        echo "\n", "Livro", "\n";
        $dados = parent::getDados(). "|" ."Autor: " . $this->autor;
        echo $dados;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}