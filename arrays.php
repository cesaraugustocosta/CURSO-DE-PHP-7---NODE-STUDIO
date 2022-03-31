<?php

//ARRAYS
$carros = array("BMW", "Veloster", "Hilux" );
$carros[] = "Amarok";
$carros[10] = "Camaro";
print_r($carros);
echo $carros[10];
echo "<hr>";

$motos = array( );

$motos []= "Yamaha";
$motos []= "Honda";
$motos [5] = "Yamaha";
echo $motos[5];

print_r($motos);

echo "<hr>";
$nomes= array("Rodrigo", "Vera", "Bia");

print_r ($nomes);
echo "<hr>";

// Função Count
echo count($nomes);
echo "<br>";
$totalClientes = count($nomes);
echo $totalClientes;
echo "<hr>";

//Array com Foreach

foreach($carros as $valor){
  echo $valor."<br>";
}
echo "<hr>";

//Arrays Associativos
$pessoa = array("nome"=>"Rodrigo", "idade" =>23, "altura"=>1.75);
$pessoa["cidade"] = "Itabuna";
echo $pessoa["altura"]."<br>";
print_r($pessoa);
echo "<hr>";

foreach($pessoa as $indice => $valor){
  echo $indice.":".$valor."<br>";
}
echo "<hr>";

//Arrays multidimensionais
$times = array(
  "cariocas" => array("campeão"=>"Vasco","Vice"=>"Flamengo","terceiro"=>"Fluminense", "Quarto"=>"Botafogo"),
  "Paulistas"=> array("Santos", "São Paulo", "Palmeiras", "Corinthians"),
  "gauchos"=> array("Grêmio", "Internacional", "Caxias Do Sul", "Juventude")
);
echo $times["gauchos"][0]."<br>";
foreach($times["cariocas"] as $indice => $valor){
  echo $indice.":".$valor."<br>";
}
