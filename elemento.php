<?php
class elemento {
    public $nome;
    public $simbolo;
    public $numeroAtomico;
    public $massaAtomica;
    public $grupo;
    public $periodo;
    public $estadoFisico;
    public $quantidade;
 
    public function aumentarQuantidade($valor) {
        $this->quantidade += $valor;
    }
 
    public function diminuirQuantidade($valor) {
        $this->quantidade -= $valor;
    }
 
    public function mostrarNome() {
        echo "Nome: " . $this->nome . "<br>";
    }
 
    public function mostrarSimbolo() {
        echo "Símbolo: " . $this->simbolo . "<br>";
    }
}
 
$objelemento = new elemento();
$objelemento->nome = "Oxigênio";
$objelemento->simbolo = "O";
$objelemento->numeroAtomico = 8;
$objelemento->massaAtomica = 15.999;
$objelemento->grupo = "16";
$objelemento->periodo = 2;
$objelemento->estadoFisico = "Gasoso";
$objelemento->quantidade = 5;
 
$objelemento->aumentarQuantidade(3);
$objelemento->diminuirQuantidade(1);
 
$objelemento->mostrarNome();
$objelemento->mostrarSimbolo();
echo "Número atômico: " . $objelemento->numeroAtomico . "<br>";
echo "Estado físico: " . $objelemento->estadoFisico . "<br>";
echo "Quantidade final: " . $objelemento->quantidade . "<br>";
 
echo '<pre>';
print_r($objelemento);