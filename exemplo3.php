<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method="post">
		<label for="nota1"> nota 1:</label>
		<input type="text" name="nota1" id="nota1">
		<br>
		<label for="nota2"> nota 2:</label>
		<input type="text" name="nota2" id="">
		<br>

		<button type="sumit">Enviar</button>
	</form>




<?php
if ($_POST) {
	
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];


	$media = $nota1 + $nota2 / 2;

	switch ($media) {
		case $media < 7:
			echo "reprovado";
			break;

		case $media == 7:
			echo "na media";
			break;
		
		default:
			echo "aprovado com perfeição";
			break;
	}
}
?>

</body>
</html>