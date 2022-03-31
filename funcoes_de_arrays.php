<?php
/*
is_array($array) verificar se uma determinada variavel é um array
in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
array_values($array) = retorna um novo array com os valores do array passado como parâmetro
array_merge($array1, $array2) = agraga o conteúdo dos dois arrays
array_pop($array) = exclui a última posição do array
array_shift($array) = exclui a primeira posição do array

*/

$nomes = array("Rodrigo", "Felipe", "Maria", "José");

if(is_array($nomes)):
  echo "é um array";
else:
  echo "não é um array";
endif;
echo "<hr>";
if(in_array("Elza", $nomes)):
  echo "Existe no array";
else:
  echo "Não existe";
endif;
echo "<hr>";
$nomes = array("primo"=>"Rodrigo","tio"=>"Felipe", "Mãe"=>"Maria","Pai"=>"José");
$keys = array_keys($nomes);
print_r($keys);

echo "<hr>";
$values = array_values($nomes);
print_r($values);
echo "<hr>";

$carros = array("BMW", "Veloster", "Hilux","Amarok","Camaro");
$motos = array( );
$motos []= "Yamaha";
$motos []= "Honda";
$motos [5] = "Suzuky";

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

array_pop($carros);
echo "<br>";
print_r($carros);
echo "<hr>";
array_shift($motos);
print_r($motos);
echo "<hr>";
