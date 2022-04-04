<?php

$nome  = $_POST['nome'];
$email =$_POST['email'];

echo "Seu nome é $nome e email é $email<br>";

var_dump($_POST);
echo "<hr>";
echo $_GET['idade']."<br>";
echo $_GET['sobrenome']."<br>";
var_dump($_GET);