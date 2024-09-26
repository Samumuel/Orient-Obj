<?php

require_once("Departamento.php");
class Funcionario{

    private string $nome;
    private string $cargo;
    private float $salario;
    private Departamento $dep;
    
    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of dep
     */
    public function getDep(): Departamento
    {
        return $this->dep;
    }

    /**
     * Set the value of dep
     */
    public function setDep(Departamento $dep): self
    {
        $this->dep = $dep;

        return $this;
    }

    /**
     * Get the value of cargo
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     */
    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

}