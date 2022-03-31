<?php
/******* Escalares *********/

// String

$nome = "Olá Mundo!";
var_dump($nome);

if(is_string($nome)):
	echo "string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";


// Inteiro
$idade = 10;
var_dump($idade);

if (is_int($idade)) :
	echo "È integer";
else:
	echo "Não é integer";
endif;
echo "<hr>";

// Floar
$altura = 10.0;
var_dump($altura);

if (is_float($altura)) :
	echo "È Float";
else:
	echo "Não é Float";
endif;
echo "<hr>";

//Boolean
$admin = false;
var_dump($admin);
if (is_bool($admin)):
	echo "È um Booleano";
else:
	echo "Não é um Booleano";
endif;
echo "<hr>";

/******************** Compostos *********************/

//Array

$carros = array('Gol', 'Uno', 'Camaro', 12, 20.2, true);
var_dump($carros);
if (is_array($carros)):
	echo "È um Array";
else:
	echo "Não é um Array";
endif;
echo "<hr>";

// Object
class Cliente {
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Cesar");
var_dump($cliente);
if (is_object($cliente)):
	echo "È um Object";
else:
	echo "Não é um Object";
endif;
echo "<hr>";

/******************** Especiais *********************/

//NULL

$nome = null;
var_dump($nome);

// Resource
