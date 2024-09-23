<?php

class Carta
{
    private int $numero;
    private string $nome;

    public function getNumero(): int
    {
        return $this->numero;
    }
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

$carta1 = new Carta();
$carta1->setNome("GENGAR");
$carta1->setNumero(1);

$carta2 = new Carta();
$carta2->setNome("VENUSAUR");
$carta2->setNumero(2);

$carta3 = new Carta();
$carta3->setNome("PIKACHU");
$carta3->setNumero(3);

$carta4 = new Carta();
$carta4->setNome("NIDOKING");
$carta4->setNumero(4);

$carta5 = new Carta();
$carta5->setNome("BLASTOISE");
$carta5->setNumero(5);

$carta6 = new Carta();
$carta6->setNome("GYARADOS");
$carta6->setNumero(6);

$carta7 = new Carta();
$carta7->setNome("KABUTO");
$carta7->setNumero(7);

$carta8 = new Carta();
$carta8->setNome("SNORLAX");
$carta8->setNumero(8);

$carta9 = new Carta();
$carta9->setNome("DRAGONAIR");
$carta9->setNumero(9);

$carta10 = new Carta();
$carta10->setNome("UMBREON");
$carta10->setNumero(10);

$pokeBaralho = array($carta1, $carta2, $carta3);
array_push($pokeBaralho, $carta4);
array_push($pokeBaralho, $carta5);
array_push($pokeBaralho, $carta6);
array_push($pokeBaralho, $carta7);
array_push($pokeBaralho, $carta8);
array_push($pokeBaralho, $carta9);
array_push($pokeBaralho, $carta10);

$cartaSorteada = $pokeBaralho[array_rand($pokeBaralho)];

echo "CARTAS  DISPONÍVEIS: \n";
foreach ($pokeBaralho as $carta) {
    echo $carta->getNumero() . "-" . $carta->getNome() . "\n";
}

echo "\n";
$acertou = false;
$pontos = 0;

while(! $acertou) {
    echo "\n";
    $num = readline("TENTE ADIVINHAR A CARTA:  ");

    if ($num == $cartaSorteada->getNumero()) {
        echo "VOCÊ ACERTOU! PARABÉNS!\n";
        $acertou = true;
        $pontos++;
    } else {
        echo "VOCÊ ERROU! TENTE NOVAMENTE :C\n";
    }
echo "VOCÊ ESTÁ COM " . $pontos . " PONTOS\n";
}
