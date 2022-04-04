a<?php
$link = "https://crackstation.net";
$senha = "19760711";

$novasenha = base64_encode($senha);
echo "base64 : ".$novasenha."<br>";
echo "Sua senha é:". base64_decode($novasenha);

echo "<hr>";
echo "Md5: ". md5($senha)."<br>";
echo "Sha1: ". sha1($senha)."<br>";


$options = [
    'cost' => 10,
];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo "Senha Segura: " .$senhaSegura."<br>";
$senha_db = '$2y$10$39x1taVQ7r1pWG8Xw7BQc.OInxd5yfai1dbq03v3l6UbJMqcVe4SC';

if(password_verify($senha, $senha_db)):
    echo "Senha Válida";
else:
    echo "Senha Inválida";
endif;

echo "<h1>Descriptografando senhas</h1>";
echo "Acesse o site: <a href='{$link}' target='_blank'>Descriptografia</a>";
