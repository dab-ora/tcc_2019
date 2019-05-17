<?php
include 'cabecalho.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="denuncia.php">
<label>tipo:</label><input type="radio" name="tipo" id="tipo" value="1"><br>
<input type="radio" name="tipo" id="tipo" value="2"><br>
<input type="radio" name="tipo" id="tipo" value="3"><br>
<label>denucia:</label><textarea rows="4" cols="50" name="denuncia" id="denuncia"></textarea><br>
<label>data:</label><input type="date" name="data" id="data"><br>
<label>local:</label><input type="text" name="local" id="local"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">

</body>
</html>
