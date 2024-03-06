<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<label for="num1"> numero 1:</label>
		<input type="text" name="num1" id="num1">
		<br>

		<button type="sumit">Enviar</button>
	</form>




	<?php
	if ($_POST) {
	
	$num1 = $_POST['num1'];


	switch ($num1) {
		case $num1 % 2 == 0:
			echo "numero par";
			break;

		default:
			echo "numero impar";
			break;
	}
	}
	?>
</body>
</html>