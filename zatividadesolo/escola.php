<?php

class escola{

    private $nome;
    private $endereço;
    private $qntAlunos;

    

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endere
     */
    public function getEndereço()
    {
        return $this->endereço;
    }

    /**
     * Set the value of endere
     */
    public function setEndereço($endereço): self
    {
        $this->endereço = $endereço;

        return $this;
    }

    /**
     * Get the value of qntAlunos
     */
    public function getQntAlunos()
    {
        return $this->qntAlunos;
    }

    /**
     * Set the value of qntAlunos
     */
    public function setQntAlunos($qntAlunos): self
    {
        $this->qntAlunos = $qntAlunos;

        return $this;
    }
}
$escolas = array();
for($i=0; $i<4; $i++){
    $escolax = new Escola();
    $escolax->setNome(readline("Diga o nome da escola: "))
        ->setEndereço(readline("Diga o endereço da escola: "))
        ->setQntAlunos(readline("Diga a quantidade de alunos: "));    
    array_push($escolas, $escolax);
}
foreach($escolas as $a){
    echo $a->getNome() . "|" . $a->getEndereço() . "|" . $a->getQntAlunos() . "\n";
}

$escolasMaisAluno= $escolas[0];
foreach($escolas as $a){
    if($e->getQntAlunos()> $escolasMaisAluno->getQntAlunos())
    $escolasMaisAluno = $e;
}

echo "\nEscola com mais alunos: ";
printf("%s | %s %d\n", 
$escolasMaisAluno->getNome(), $escolasMaisAluno->getEndereço(), $escolasMaisAluno->getQntAlunos());