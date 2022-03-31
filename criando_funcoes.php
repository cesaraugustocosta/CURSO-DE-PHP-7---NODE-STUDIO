<?php
// Crindo Funções

/*function exibirNome()
{
	echo "Meu nome é Cesr";
}*/

// Passando Nome pela Variavel
function exibirNome($nome)
{
	echo "Meu nome é $nome";
}

exibirNome("Adrielle Santos");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
	$media = ($n1 + $n2 + $n3 + $n4) / 4;
	if($media >= 7):
		echo "O(a) aluno(a) $nome, foi aprovado com média $media<br>";
	else:
		echo "O Aluno $nome, foi reprovado<br>";
	endif;
}

calcularMedia("Bob", 5, 9, 10, 7);
calcularMedia("jorge", 5, 8, 6, 7);