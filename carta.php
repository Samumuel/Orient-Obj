<?php

class Carta{

    private $numero;
    private string $nome;

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

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
}

$qntdcartas = readline("\nDiga quantas cartas você quer que o baralho tenha(mín. 7): ");
$valor = array("Ás", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Valete", "Dama", "Rei");
$naipe = array("Espada", "Paus", "Copas", "Ouro");
$todascartas = array();


for($i = 0; $i < $qntdcartas; $i++){

    $carta = new Carta();
    
    $xAleatorio = rand(0, count($valor) - 1);
    $valorAleatorio = $valor[$xAleatorio];
    $carta->setNumero($valorAleatorio);
    $yAleatorio = rand(0, count($naipe) - 1);
    $naipeAleatorio = $naipe[$yAleatorio];
    $carta->setNome($naipeAleatorio);

    $todascartas[] = $carta;
}

$cartaaleatoria = rand(0, count($todascartas) - 1);
$cartaSorteada = $todascartas[$cartaaleatoria];

execucao($todascartas, $cartaSorteada);

function execucao($todascartas, $cartaSorteada) {
    $tentativas = 1;
    $pontos = 100;

    while (true) {
        $x = 1;
        echo "Cartas possíveis: ";
        foreach ($todascartas as $ta) {
            echo "\n", $x, "º ", $ta->getNumero() , " de " , $ta->getNome();
            $x++;
        }

        echo "\nDigite 1 caso queira tentar acertar a carta.\nDigite 2 caso queira uma dica(-30 pontos).\nDigite 3 caso queira desistir.";
        $escolha = readline("\nDiga sua escolha: ");
        
        switch ($escolha) {
            case 1:
                echo "Escolha um número entre 1 e " , count($todascartas) , " referente à ordem das cartas mostradas: ";
                $chavescolha = readline("\nDiga o número: ");

                if ($chavescolha > 0 and $chavescolha <= count($todascartas)) {
                    $acertou = verifica($chavescolha - 1, $todascartas, $cartaSorteada, $tentativas, $pontos); 
                    
                    if ($acertou) {
                        return;
                    } else {
                        $tentativas++;
                    }
                } else {
                    echo "Escolha inválida!\n";
                }
                break;

            case 2:
                echo "\nDica: O naipe da carta sorteada é " , $cartaSorteada->getNome() , ".\n";
                $pontos -= 30;
                break;

            case 3:
                echo "Você desistiu.\n";
                return;

            default:
                echo "Escolha inválida!\n";
                break;
        }
    }
}

function verifica($chavescolha, $todascartas, $cartaSorteada, $tentativas, $pontos) {
    if ($todascartas[$chavescolha]->getNome() == $cartaSorteada->getNome()) {
        if ($todascartas[$chavescolha]->getNumero() == $cartaSorteada->getNumero()) {
            echo "Parabéns, você acertou a carta!\n";
            $pontosFinal = $pontos - ($tentativas * 10);
            echo "Você acertou com " . $tentativas . " tentativa(s) e ganhou " . $pontosFinal . " pontos.\n";
            return true;
        } else {
            echo "Você errou.\n";
        }
    } elseif ($todascartas[$chavescolha]->getNumero() == $cartaSorteada->getNumero()) {
        echo "Você errou.\n";
    } else {
        echo "Você errou a carta.\n";
    }

    return false;
}
