<?php
//ESCOPO GLOBAL
$nome = "Cesar Augusto";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
	global $nome;
	echo $nome;
}
exibeNome();
echo "<hr>";

//////////////////////////////

function exibeCidade(){
	//Escopo LOCAL
	global $cidade;
	$cidade = "Rio de Janeiro";	
}
exibeCidade();
echo $cidade;
echo "<hr>";
//////////////////////////////

function soma() {
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();