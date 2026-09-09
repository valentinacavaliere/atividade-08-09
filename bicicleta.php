<?php
class bicicleta{
   //atributos - caracteristicas
 public $marca;
 public $modelo;
 public $cor;
 public $velocidade;
 public $marcha;
 public $marchaAtual;
 public $roda; 

 //metodos
    public function acelelar($valor){
          return $this->velocidade += $valor;
    }
     public function frear($valor){
          return $this->velocidade -= $valor;
    }
     public function TrocaMarcha($marcha){
          return $this->marchaAtual+= $marcha;
    }
}

// instanciou o classe ao objeto
$objbicicleta = new bicicleta();
// informou valores aos atributos
$objbicicleta->marca = "caloi";
$objbicicleta->modelo = "aro 26";
$objbicicleta->cor = "preta";
$objbicicleta->valocidade = 0;
$objbicicleta->marcha = 21;
$objbicicleta->marchaAtual = 1;
$objbicicleta->roda = 26;
// utilizou os metodos
$objbicicleta->acelerar(10);
$objbicicleta->acelerar(10);
$objbicicleta->frear(5);
$objbicicleta->trocarMarcha(4);
// recupera os valores dos atributos
echo "Velocidade final: " . $objbicicleta->velocidade . " km/h<br>";
echo "Marcha atual: " . $objbicicleta->marchaAtual . "<br>";

// print do objeto inteiro
echo '<pre>';
print_r($objbicicleta);
 