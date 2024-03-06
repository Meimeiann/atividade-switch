<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
		<label for=cores> cor favorita:</label>
		<input type="text" name="cores" id="">

		<br>

		<button type="submit">Enviar</button>
	</form>

	<?php
 		if ($_POST) {

		$cores = $_POST['cores'];

		switch ($cores) {
			case 'vermelho':
				echo "cor perfeita!";
				break;

			case 'rosa':
				echo "que horror!!";
				break;

			case 'azul':
				echo "lindo!!";
				break;

			default:
				echo "você tem bom gosto";
				break;
		}
	}

	?>
</body>
</html>