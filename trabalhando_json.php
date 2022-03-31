<?php
echo "<pre>";

$lin_receita = file_get_contents('dados.json');
print_r($lin_receita);

$jsonObj = json_decode($lin_receita);
$lin_rec = $jsonObj->dados_extras;
print_r($lin_rec);

foreach($arr_receita['dados_extras'] as $op){
  echo $op['desc_receita']. '/'.$op['desc_receita'].PHP_EOL;
}


//json_decode($op['desc_receita'], true);
