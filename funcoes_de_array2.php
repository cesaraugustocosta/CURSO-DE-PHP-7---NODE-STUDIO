<?php
/*
* array_unshift($arr, "valor") = adiciona um ou mais elementos no início do array
* array_push($array, "valor", "valor") = Adiciona um ou mais elementos no final de um array
* array_combine($keys, $values) = mescla os dois arrays passados
* array_sum() = calcula a soma dos elementos de um array
* explode("/", "20/01/2001") transforma string em array
* implode("-", $arr) = transforma array em string
*/
$frutas = array("Uva", "Laranja", "Maça");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

print_r($frutas);
array_push($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

$keys =  array("Campeão", "Vice", "Terceiro");
$values = array ("Grêmio", "Cruzeiro", "Atlético-PR");
$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

$soma = array(7.8,5.5,10,7.2);
echo array_sum($soma);
echo "<br>";
$total = array_sum($soma);
echo $total;
echo "<hr>";

$data = "30/04/2021";
$novaData = explode("/", $data);
print_r($novaData);
echo "<hr>";

$frase = "Meu nome não é Cesar";
$array = explode(" ", $frase);
print_r($array);
echo "<hr>";

$nomes = array("Rodrigo", "Cesar", "Neusa", "Talita");
$string = implode(", " , $nomes);
print_r($nomes);
echo "<hr>";
