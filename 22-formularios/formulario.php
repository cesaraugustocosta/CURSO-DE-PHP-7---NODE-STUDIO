<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="dados.php" method="POST">
		Nome: <input type="text" name="nome">
		Email: <input type="email" name="email">
		<button type="submit">Enviar</button>
	</form>

	<a href="dados.php?idade=25&sobrenome=Santos">Enviar Dados pelo metodo GET</a>

</body>
</html>