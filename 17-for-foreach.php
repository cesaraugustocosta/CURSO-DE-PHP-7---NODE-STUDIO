<?php
// FOR quer dizer para, utilizado quando você ja sabe o numero de repetições que deseja utilizar
// estrutura: (condição inicial; contador; incremento)

for($contador = 0 ; $contador <=10; $contador++):
  echo "O contador é $contador <br>";
endfor;

echo "<hr>";

$cores = array("Verde", "vermelho", "Azul");

foreach ($cores as $valor):
  echo $valor."<br>";
endforeach;
