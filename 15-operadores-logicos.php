<?php
// Operadores lógicos
// Nos permitem fazer comparações entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação ( ! )

$idade = 45;
$nome = "Cesar";

if(($idade == 45) and ($nome == "Rodrigo")):
  echo "É verdadeiro";
else:
  echo "É falso";
endif;
