<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form method="post">
		<label for=numerodasorte> numero da sorte:</label>
		<input type="text" name="numerodasorte" id="">

		<br>

		<button type="submit">Enviar</button>
	</form>

<?php
 		if ($_POST) {

		$numerodasorte = $_POST['numerodasorte'];

		switch ($numerodasorte) {
			case '0':
				echo "não me parece um bom numero";
				break;

			case '1':
				echo "legal!!";
				break;
			
			default:
				echo "escolha perfeita";
				break;
		}
	}
		
        
?>

</body>
</html>