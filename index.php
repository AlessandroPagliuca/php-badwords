<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <form action="words.php" method="POST">
		<label for="paragrafo">Paragrafo</label><br>
		<textarea name="paragrafo" id="paragrafo" cols="30" rows="10"></textarea><br>
		<label for="parola">Parola da censurare</label><br>
		<input type="text" name="parola" id="parola"><br>
		<input type="submit" value="Invia">
	</form>
    
</body>
</html>