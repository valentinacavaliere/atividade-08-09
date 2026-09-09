<?php
class planta{
//atributos - caracteristicas
 public $nome;
 public $especie;
 public $cor;
 public $altura;
 public $idade;
 public $folha;
 public $agua;

 
    //metodos
    public function crescer($centimentros){
          return $this->altura += $centimentros;
    }
     public function regar($quantidade){
          return $this->agua += $quantidade;
    }
     public function criarfolhas($quantidade){
          return $this->folhas += $quantidade;
    }
}
 
// instanciou o classe ao objeto
$objplanta = new planta();
// informou valores aos atributos
$objplanta->nome = "rosa";
$objplanta->especie = "rosa rubiginosa";
$objplanta->cor = "vermelha";
$objplanta->altura = 30;
$objplanta->idade = 15;
$objplanta->folhas = 12;
$objplanta->agua = 50;
// utilizou os metodos
$objplanta->crescer(10);
$objplanta->regar(10);
$objplanta->criarfolhas(4);
// recupera os valores dos atributos
echo "Nome: " . $objplanta->nome . "<br>";
echo "Altura: " . $objplanta->altura . " cm<br>";
echo "Água: " . $objplanta->agua . " ml<br>";
echo "Quantidade de folhas: " . $objplanta->folhas . "<br>";
// print do objeto inteiro
echo '<pre>';
print_r($objplanta);
 
