<?php
//Funções para Números
/*
number_format
round
ceil
floor
rand
*/

$db = 1234.56;
$preco = number_format($db, 2, ", ", ".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(3.49);
echo ceil(5.10); // arredonda para cima
echo "<hr>";
echo floor(90.99); // arredonda para baixo
echo "<hr>";
echo rand(1,20); //cria numeros aleatórios, muito utilizado em sorteios
echo "<hr>";
