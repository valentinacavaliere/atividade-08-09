<?php
class planeta{
   //atributos - caracteristicas
 public $nome;
 public $tipo;
 public $temperatura;
 public $gravidade;
 public $luas;
 public $distanciaSol;
 public $velocidade; 

 //metodos
    public function aumentarTemperatura($graus){
          return $this->temperatura+= $graus;
    }
     public function frear($graus){
          return $this->temperatura -= $graus;
    }
     public function TrocaMarcha($valor){
          return $this->velocidade+= $valor;
    }
}

// instanciou o classe ao objeto
$objplaneta = new planeta();
// informou valores aos atributos
$objplaneta->nome = "saturno";
$objplaneta->tipo= "gasoso";
$objplaneta->temperatura = -140;
$objplaneta->gravidade = 10.44;
$objplaneta->luas = 146;
$objplaneta->distanciaSol = 1400000000;
$objplaneta->velocidade = 0;


// recupera os valores dos atributos
echo "Nome: " . $objplaneta->nome . "<br>";
echo "Tipo: " . $objplaneta->tipo . "<br>";
echo "Temperatura: " . $objplaneta->temperatura . " °C<br>";
echo "Gravidade: " . $objplaneta->gravidade . " m/s²<br>";
echo "Luas: " . $objplaneta->luas . "<br>";
echo "Distância do Sol: " . $objplaneta->distanciaSol . " km<br>";
echo "Velocidade: " . $objplaneta->velocidade . " km/h<br>";

// print do objeto inteiro
echo '<pre>';
print_r($objplaneta);
echo '</pre>';