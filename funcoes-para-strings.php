<?php

/* Funções para Strings
strtoupper
strtolower
substr
str_pad
str_repeat
strlen
str_replace
strpos
*/

$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome); // Converte o texto para letras para Maisculas
$Nomeminusculas = strtolower($nome); // Converte o texto para letras para Minusculas
echo $novoNome."<br>";
echo $Nomeminusculas."<br>";
echo "<hr>";

$mensagem = "Olá Mundo!";
echo substr($mensagem, 4, 4);
echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT); // STR_PAD_RIGHT OU STR_BOTH
echo $novoObjeto;

echo "<hr>";
