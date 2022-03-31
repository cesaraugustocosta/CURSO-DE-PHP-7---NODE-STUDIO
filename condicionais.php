<?php
///////// Condicionais ///////
/*
if
else
elseif
*/

$numero = 1;

if($numero == 10):
  echo "É igual a Dez";
elseif($numero <= 9):
  echo "Número é igual ou menor que 9";
else:
  echo "é diferente de Dez";
endif;

echo "<hr>";

$media = 15;
$mediaFinal = ($media >= 7) ? "Aprovado!" : "Reprovado!";
echo $mediaFinal;

echo "<hr>";
/*****  Switch e Case ******/
$cor = "amarelo";

switch($cor):
  case "vermelho":
    echo "Sua cor preferida é o vermelho";
  break;
  case "verde":
    echo "Sua cor preferida é o verde";
  break;
  case "azul":
    echo "Sua cor preferida é o azul";
  break;

  default:
  echo "Sua cor preferida não é o vermelho, verde ou azul";
endswitch;
echo "<hr>";
