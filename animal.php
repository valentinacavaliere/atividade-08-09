<?php
class animal{
   //atributos - caracteristicas
 public $nome;
 public $especie;
 public $cor;
 public $idade;
 public $peso;
 public $alimento;
 public $agua; 

 //metodos
    public function comer($quantidade){
          return $this->alimento += $quantidade;
    }
     public function beber($quantidade){
          return $this->agua += $quantidade;
    }
     public function Ganharpeso($quantidade){
          return $this->peso+= $quantidade;
    }
}

// instanciou o classe ao objeto
$objanimal = new animal();
// informou valores aos atributos
$objanimal->nome = "ruivo";
$objanimal->especie = "srd";
$objanimal->cor = "laranja";
$objanimal->altura = 30;
$objanimal->peso = 3;
$objanimal->alimento = 40;
$objanimal->agua = 490;
// utilizou os metodos
$objanimal->comer(10);
$objanimal->beber(10);
$objanimal->Ganharpeso(2);
// recupera os valores dos atributos
echo "Nome: " . $objanimal->nome . "<br>";
echo "Peso final: " . $objanimal->peso . " kg<br>";
echo "alimento: " . $objanimal->alimento. " g<br>";
echo "Água: " . $objanimal->agua . " ml<br>";
echo "Espécie:" . $objanimal->especie . "<br>";

// print do objeto inteiro
echo '<pre>';
print_r($objanimal);
 