<?php
/*
* Operadores aritmeticos
*
* São usados com valores núemricos para executar operações
* aritméticas comuns, como adição, subtração, multiplicação etc.
 Adição +
 Subtração -
 Multiplicação *
 Divisão /
 Módulo %
 Exponenciação **
*/

$a = 10;
$b = 20;
$c =30;
$d = 5;
$e = 100;

$adicao = $a + $b;
echo $adicao;
echo "<hr>";

$subtracao = $c - $b;
echo $subtracao;
echo "<hr>";

$multiplicacao = $c * $d;
echo $multiplicacao;
echo "<hr>";

$divisao = $a / $d;
echo $divisao;
echo "<hr>";

$modulo = $e % $d;
echo $modulo;
echo "<hr>";

$expo = $a ** $d;
echo $expo;
echo "<hr>";
